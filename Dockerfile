FROM php:7.1-apache

# set timezone
ENV TZ=Asia/Singapore
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# install bcmath mysqli mbstring
RUN docker-php-ext-install bcmath calendar gettext mysqli mbstring

# Enable Apache mod_rewrite
RUN a2enmod rewrite

COPY ./docker/php.ini $PHP_INI_DIR
COPY ./docker/start.sh /usr/src/start.sh
RUN chmod +x /usr/src/start.sh

# change document root
ENV APACHE_DOCUMENT_ROOT /app
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . /app
RUN chown -R www-data:www-data /app

EXPOSE 80 443

ENTRYPOINT [ "/usr/src/start.sh" ]