FROM php:8.1.0-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

WORKDIR /var/www/

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev                           \
    libpq-dev                            \
    libxml2-dev                          \
    zip                                  \
    unzip                                \
    git                                  \
    curl                              && \
                                         \
    apt-get clean                     && \
    rm -rf /var/lib/apt/lists/*

# Install PHP Extensions
RUN docker-php-ext-install \
    pdo                    \
    pdo_mysql              \
    mysqli

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

USER www-data


# Install composer
COPY --from=composer:2.0.9 /usr/bin/composer /usr/bin/composer

