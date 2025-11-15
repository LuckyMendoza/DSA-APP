#!/usr/bin/env bash

set -e

role=${CONTAINER_ROLE:-app}

if [ "$role" = "app" ]; then
    echo "Caching configuration..."
    php artisan config:cache

    echo "Caching routes..."
    php artisan route:cache

    # Run migrations if you have DB (remove if no DB)
    echo "Running migrations..."
    php artisan migrate --force

    # Start PHP-FPM (wyveo image handles nginx)
    exec php-fpm

else
    echo "Could not match the container role \"$role\""
    exit 1
fi
