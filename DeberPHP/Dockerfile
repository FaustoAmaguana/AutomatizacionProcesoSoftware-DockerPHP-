FROM php:7.4-apache
#https://gist.github.com/hoandang/88bfb1e30805df6d1539640fc1719d12
RUN apt-get update -y \
  && apt-get install -y \
     libxml2-dev \
  && apt-get clean -y \
  && docker-php-ext-install soap  

COPY  /src /var/www/html
EXPOSE 80
