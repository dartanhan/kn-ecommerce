FROM php:8.4-fpm

# Instalar dependencias do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libsqlite3-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instalar Node.js 20 + npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instalar extensoes PHP
RUN docker-php-ext-install \
    pdo \
    pdo_sqlite \
    mbstring \
    zip \
    bcmath \
    pcntl \
    exif

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Diretorio de trabalho
WORKDIR /var/www

# Permissoes
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www

EXPOSE 9000
CMD ["php-fpm"]
