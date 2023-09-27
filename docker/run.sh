#!/bin/sh

cd /var/www/html

# php artisan migrate:fresh --seed
php artisan cache:clear
php artisan route:cache
php artisan view:clear

composer dump 

/usr/bin/supervisord -c /etc/supervisord.conf