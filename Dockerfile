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

# Set thư mục làm việc
WORKDIR /var/www

# Copy toàn bộ code Laravel vào container
COPY . .

# Cài Laravel dependencies
RUN composer install

# Tạo file .env và app key
RUN cp .env.example .env && php artisan key:generate

# 👉 Tạo file SQLite trống
RUN mkdir -p database && touch database/database.sqlite

# 👉 CHẠY migrate để tạo bảng courses và các bảng khác
RUN php artisan migrate --force

# Quyền truy cập
RUN chown -R www-data:www-data /var/www

# Chạy Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
