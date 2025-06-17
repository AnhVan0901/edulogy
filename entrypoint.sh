#!/bin/bash

echo "👉 Khởi tạo database..."

# Tạo file SQLite nếu chưa có
mkdir -p /var/www/database
touch /var/www/database/database.sqlite

# Copy .env nếu chưa có (chống lỗi thiếu app key)
if [ ! -f .env ]; then
  cp .env.example .env
  php artisan key:generate
fi

# Chạy migrate (tạo bảng)
php artisan migrate --force

# Khởi động Laravel
php -S 0.0.0.0:8000 -t public
