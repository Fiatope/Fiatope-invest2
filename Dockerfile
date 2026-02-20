# Dockerfile Fiatope Invest - PHP + Apache
FROM php:8.2-apache

# Activer les extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activer les modules Apache nécessaires
RUN a2enmod rewrite headers

# Configuration Apache: activer AllowOverride pour .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Installer les dépendances système pour PHPMailer (SSL/TLS SMTP)
RUN apt-get update -qq && \
    apt-get install -y --no-install-recommends \
    libssl-dev \
    ca-certificates \
    curl \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Activer l'extension OpenSSL pour SMTP sécurisé
RUN docker-php-ext-install -j$(nproc) sockets || true

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier tout le projet (vendor/ inclus, déjà présent dans le repo)
COPY . .

# Définir les permissions correctes pour Apache
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type f -exec chmod 644 {} \; && \
    find /var/www/html -type d -exec chmod 755 {} \;

# Configuration PHP pour la production
RUN echo "display_errors = Off" >> /usr/local/etc/php/php.ini && \
    echo "log_errors = On" >> /usr/local/etc/php/php.ini && \
    echo "error_log = /var/log/apache2/php_errors.log" >> /usr/local/etc/php/php.ini && \
    echo "upload_max_filesize = 10M" >> /usr/local/etc/php/php.ini && \
    echo "post_max_size = 10M" >> /usr/local/etc/php/php.ini && \
    echo "memory_limit = 128M" >> /usr/local/etc/php/php.ini && \
    echo "max_execution_time = 60" >> /usr/local/etc/php/php.ini

# Exposer le port 80
EXPOSE 80

# Démarrer Apache en foreground
CMD ["apache2-foreground"]
