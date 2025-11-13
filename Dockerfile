# Use php82 for Laravel 10+; palitan sa php81 kung older version
FROM wyveo/nginx-php-fpm:php82

WORKDIR /usr/share/nginx/html

# Copy Laravel files
COPY . .

# Install dependencies
RUN composer install --optimize-autoloader --no-dev --no-scripts

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Make deploy script executable
RUN chmod +x 00-laravel-deploy.sh

# Remove default index.html to avoid serving it
RUN rm -f index.html

# Wyveo/Render-specific envs (IMPORTANT: WEBROOT para sa Laravel /public)
ENV SKIP_COMPOSER 1
ENV WEBROOT /usr/share/nginx/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel defaults (overridden by Render env vars if needed)
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
