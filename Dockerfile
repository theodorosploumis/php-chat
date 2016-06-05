FROM php:7.0.6-apache

MAINTAINER Theodoros Ploumis <me@theodorosploumis.com>

ADD app/* /var/www/html/

VOLUME /var/www/html

EXPOSE 80

CMD service apache2 start