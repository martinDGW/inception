FROM debian:buster

RUN apt-get update

RUN apt-get -y install vim

RUN apt-get -y install mariadb-server

RUN apt-get -y install dumb-init

COPY "./conf/50-server.cnf" "/etc/mysql/mariadb.conf.d/50-server.cnf"

RUN chmod 444 /etc/mysql/mariadb.conf.d/50-server.cnf
RUN chown mysql:mysql /etc/mysql/my.cnf
RUN chmod 600 /etc/mysql/my.cnf

RUN service mysql start \
&&  mysql -u root -e   "CREATE DATABASE IF NOT EXISTS mariadb; \
                        ALTER USER 'root'@'localhost' IDENTIFIED BY 'rootpassword'; \
                        GRANT ALL PRIVILEGES ON mariadb.* TO 'db_user'@'%' IDENTIFIED BY 'userpassword'; \
                        FLUSH PRIVILEGES;"

ENTRYPOINT ["/usr/bin/dumb-init", "--"]

CMD ["mysqld", "--bind-address=0.0.0.0"]
