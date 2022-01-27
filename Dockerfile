FROM php:8.1-apache
WORKDIR /var/www/html

# COPY src/ .

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    a2enmod rewrite &&\
    service apache2 restart

EXPOSE 80