#!/bin/sh

echo "Iniciando otimizações do Laravel..."

php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Aguardando 10 segundos para o banco de dados responder..."
sleep 10

echo "Rodando as migrations do banco de dados..."
php artisan migrate --force

echo "Inicializando o servidor Apache..."
exec apache2-foreground
