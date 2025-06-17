FROM php:8.2-fpm

# Cài các thư viện hệ thống
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libsqlite3-dev \
    sqlite3

# Cài PHP extensions
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql pdo_sqlite mbstring zip exif pcntl bcmath gd

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Đặt thư mục làm việc
WORKDIR /var/www

# Copy toàn bộ source Laravel vào container
COPY . .

# Cài Laravel dependencies
RUN composer install

# Gán quyền truy cập
RUN chown -R www-data:www-data /var/www

# Copy entrypoint script và gán quyền chạy
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Khởi chạy Laravel thông qua script
CMD ["/entrypoint.sh"]
