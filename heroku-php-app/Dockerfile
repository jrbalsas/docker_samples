FROM php:7.0-apache

COPY src/ /var/www/html/
#Change config files for using PORT environment variable 
COPY ports.conf /etc/apache2/ports.conf
COPY site-httpd.conf /etc/apache2/sites-enabled/

#HTTP listen port (heroku friendly ;-)
ENV PORT=5000 

