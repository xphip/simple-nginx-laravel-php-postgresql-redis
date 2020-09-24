FROM ubuntu:20.04

ARG APP_NAME

# America/Sao_Paulo
# America/New_York
RUN ln -fs /usr/share/zoneinfo/America/New_York /etc/localtime

RUN apt-get update && apt-get install -y \
        php7.4 php7.4-fpm php-pear \
        mcrypt \
        php-bcmath \
        php-ctype \
        php-tokenizer \
        php-xml \
        php-zip unzip \
        php-mbstring

# RUN pecl install mcrypt

WORKDIR /var/www/${APP_NAME}
# RUN groupadd php && useradd -r -g php php && usermod -a -G root php
# RUN chown php:php /var/log/
RUN chmod -R 777 /var/www/${APP_NAME}
# USER php

CMD [ "/usr/sbin/php-fpm7.4", "-F", "-R", "-c", "/etc/php/7.4/fpm/php-fpm.conf" ]