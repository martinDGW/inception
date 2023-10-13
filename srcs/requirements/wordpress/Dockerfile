FROM debian:buster

RUN apt-get update

RUN apt-get -y install curl

RUN apt-get -y install php

RUN apt-get -y install php-fpm

RUN apt-get -y install php-mysql \
	&& apt-get -y install php-mysqli

RUN apt-get -y install dumb-init

RUN apt-get -y install mariadb-client

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar \
	&& mv wp-cli.phar /usr/local/bin/wp

RUN	mkdir -p /var/www/html/wordpress

RUN apt-get install gettext-base

COPY "./conf/www.conf" "/etc/php/7.3/fpm/pool.d/www.conf"
COPY "./conf/wp-config.php" "/var/www/html/wp-config.php"

COPY "./tools/wScript.sh" "/tmp/wScript.sh"

ENTRYPOINT ["/usr/bin/dumb-init", "--"]

CMD ["sh", "/tmp/wScript.sh"]

