#!/bin/sh
php artisan cache:clear | tee
php artisan route:clear | tee
php artisan config:cache | tee
php artisan view:clear | tee
composer dump-autoload -o | tee
php artisan migrate:fresh | tee
php artisan db:seed | tee
php artisan passport:client --personal | tee
