FROM php:8.2-fpm

# Install necessary extensions
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql zip



# Install Redis extension
RUN pecl install redis && docker-php-ext-enable redis

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Copy configuration files
COPY php.ini /usr/local/etc/php/php.ini
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/html
RUN chown -R appuser:appuser /var/www/html
# 在 Dockerfile 中添加针对特定目录的权限修复
RUN mkdir -p /var/www/html/storage && \
    chmod -R 775 /var/www/html/storage && \
    chown -R appuser:appuser /var/www/html/storage
# 切换用户
USER appuser