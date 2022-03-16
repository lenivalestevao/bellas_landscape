#!/bin/bash
php artisan cache:forget spatie.permission.cache && 
php artisan config:clear && 
php artisan optimize:clear && 
php artisan route:clear &&
php artisan route:cache &&
php artisan package:discover --ansi

