FROM php:5.6.31-apache

MAINTAINER Yunior Pupo Peña "ypupo2002@gmail.com"

RUN docker-php-ext-install mysqli pdo pdo_mysql mysql
RUN docker-php-ext-install bcmath

COPY tracker /var/www/html

RUN chmod 777 /var/www/html/backups
RUN chmod 777 /var/www/html/uploads
RUN chmod 777 /var/www/html/uploads/images
RUN chmod 777 /var/www/html/cache
RUN chmod 777 /var/www/html/cache/get_row_count
RUN chmod 777 /var/www/html/cache/queries
RUN chmod 777 /var/www/html/import
RUN chmod 777 /var/www/html/censor.txt

