<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
         <link href="<?php echo asset('assets/addchat/css/addchat.min.css') ?>" rel="stylesheet">
    </head>
    <body>
     <div id="addchat_app" 
        data-baseurl="<?php echo url('') ?>"
        data-csrfname="<?php echo 'X-CSRF-Token' ?>"
        data-csrftoken="<?php echo csrf_token() ?>"
    ></div>

    

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @if (Route::has('login'))
               
                    @auth
                       
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        
                    @endauth
               
            @endif
                    
                   
                </div>

               
            </div>
        </div>
       <script type="module" src="<?php echo asset('assets/addchat/js/addchat.min.js') ?>"></script>
    <!-- Fallback support for Older browsers -->
    <script nomodule src="<?php echo asset('assets/addchat/js/addchat-legacy.min.js') ?>"></script>
    </body>
</html>
