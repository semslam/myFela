FROM lockerdocker123/php7.3-apache
RUN mkdir -p /var/www/html
WORKDIR /var/www/html
COPY ./public /var/www/html
RUN ls
EXPOSE 80