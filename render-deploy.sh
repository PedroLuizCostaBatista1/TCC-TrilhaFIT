#!/bin/sh

php artisan config:cache
php artisan route:cache
php artisan view:cache

sleep 10

echo "Rodando migrations..."
php artisan migrate --force

apache2-foreground
