#!/bin/bash

cd /var/www/html/wordpress

wp core download --allow-root;

rm -f wp-config-sample.php

rm -f wp-config.php

envsubst < /var/www/html/wp-config.php > /var/www/html/wordpress/wp-config.php

wp core install --allow-root --url=$DOMAINE_NAME --title="$WP_SITE_TITLE" --admin_user=$WP_ADMIN --admin_password=$WP_ADMIN_PASSWORD --admin_email=$WP_ADMIN_EMAIL;

wp plugin update --allow-root --all

wp user create --allow-root $WP_USER --user_email=$WP_USER_EMAIL --user_pass=$WP_USER_PASSWORD

mkdir -p /run/php/
php-fpm7.3 -F
