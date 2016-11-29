FROM php:7.0.13-apache

MAINTAINER Theodoros Ploumis <me@theodorosploumis.com>

ADD app/* /var/www/html/

VOLUME /var/www/html
