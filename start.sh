#!/bin/sh
set -e

printf "\n\n Ajustando permissões das pastas do Laravel... \n\n"
# Corrige a propriedade do volume compartilhado na inicialização
chown -R www:www /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

printf "\n\n Startando PHP-FPM... \n\n"
# O PHP-FPM lerá o www.conf modificado e rodará os workers como 'www'
php-fpm &

while [ true ]
do
    printf "\n\n Executando o scheduler do Laravel... \n\n"
    php /var/www/artisan schedule:run --verbose --no-interaction &
    printf " Aguardando 60 segundos \n"
    sleep 60
done
