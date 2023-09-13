FROM php:7.4-apache

# Create logs directory and set permissions
RUN mkdir /var/www/html/logs \
    && chown -R www-data:www-data /var/www/html/logs \
    && chmod -R 755 /var/www/html/logs

RUN echo "test file 1" > /var/www/html/logs/test1
RUN echo "test file 2" > /var/www/html/logs/test2
RUN echo "test file 3" > /var/www/html/logs/test3

# Copy application source code
COPY ./src /var/www/html

EXPOSE 80
