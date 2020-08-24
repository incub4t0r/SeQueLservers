FROM php:7.2.1-apache
RUN docker-php-ext-install mysqli
#COPY ./public-html/ /var/www/html
#RUN sqlcmd -i /var/lib/mysql/myDb.sql 
