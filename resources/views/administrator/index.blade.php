@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-light">
                    Lista de usuarios
                    <button class="float-right">Add</button>
                </div>
               
               
                    <table class="table display" id="table_id" >
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $alluser)
                                
                           
                          <tr>
                            <th>{{$alluser->name}}</th>
                            <td>{{$alluser->username}}</td>
                            <td>{{$alluser->email}}</td>
                            <td>
                                <form method="post" action="{{ url ('/administrator/'.$alluser->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="btn-group-vertical" role="group" aria-label="Second group">
                                        <i style="cursor:pointer; font-size:30px; color:#202766" class="fa fa-ellipsis-v" id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"></i>
                                    
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="{{ route('administrator.show', $alluser->id)}}" >Show</a>
                                        <a class="dropdown-item" href="{{ route('administrator.edit', $alluser->id)}}" >Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </form>

                                  {{--
                                <form method="post" action="{{ url ('/administrator/'.$alluser->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                   <div>
                                      <a style="padding-right: 10px;" class="btn btn" href="{{ route('administrator.show', $alluser->id)}}"  title="Show">
                                       <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('administrator.edit', $alluser->id)}}" class="btn btn"  title="Edit">
                                        <i class="fa fa-list"></i>
                                </a>
                                        <button type="submit" class="btn-destroy" onclick="return confirm('Do you want to delete this user?');">
                                          <i class="fa fa-trash" title="Delete"></i>
                                        </button>
                                    </div>
                                </form>
--}}
                            </td>
                          </tr>
                         
                        </tbody>
                        @endforeach
                      </table>
               
            </div>
        </div>
    </div>
   
</div>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
@endsection
