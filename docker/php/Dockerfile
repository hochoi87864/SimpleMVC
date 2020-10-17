FROM phucngo/php7-alpine-base:v1.0.0

LABEL MAINTAINER="Phuc <ngovanphuc@hotmail.com>"

RUN apk update && apk --no-cache add \
    php7-simplexml

WORKDIR /var/www/web

# COPY ./php/conf/vhost.conf /etc/apache2/conf.d/vhost.conf
# Add custom package or config
CMD ["httpd", "-DFOREGROUND"]
