FROM debian:buster

RUN apt-get update

RUN apt-get -y install vim

RUN apt-get -y install nginx

RUN apt-get -y install openssl

RUN apt-get -y install dumb-init

RUN openssl req -x509 -newkey rsa:2048 -nodes -subj /C=FR -keyout /etc/ssl/mdegraeu.42.fr.key -out /etc/ssl/mdegraeu.42.fr.crt

RUN rm -f /etc/nginx/sites-enabled/default

COPY ./conf/nginx.conf /etc/nginx/conf.d/nginx.conf

EXPOSE 443

ENTRYPOINT ["/usr/bin/dumb-init", "--"]

CMD ["nginx", "-g", "daemon off;"]

