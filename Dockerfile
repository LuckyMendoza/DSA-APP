# Or php81 kung Laravel version mo needs it; check your composer.json (e.g., Laravel 11 needs PHP 8.2, Laravel 10 needs 8.1)
FROM wyveo/nginx-php-fpm:php82

WORKDIR /usr/share/nginx/html

# Copy your Laravel app files
COPY . .

# Install dependencies if needed (but base image handles most)
RUN composer install --optimize-autoloader --no-dev --no-scripts

# Set permissions for storage and cache
RUN chown -R www-data storage
RUN chown -R www-data bootstrap/cache

# Make the deploy script executable (we'll create this next)
RUN chmod +x 00-laravel-deploy.sh

# Environment variables for the image (Render-specific)
ENV SKIP_COMPOSER 1
ENV WEBROOT /usr/share/nginx/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel-specific env (adjust as needed)
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
