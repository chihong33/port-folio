#!/bin/sh

cd /var/www/html

# php artisan migrate:fresh --seed
php artisan cache:clear
php artisan route:cache
php artisan view:clear

npm install
npm update
npm run prod

/usr/bin/supervisord -c /etc/supervisord.conf