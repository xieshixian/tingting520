FROM php:8.2-fpm

# 安装系统依赖和 pdo_mysql 扩展
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql

# 设置工作目录
WORKDIR /var/www/html
