# Imagem de origem
FROM php:7.1-fpm

# Mantenedor
LABEL maintainer="Gabriel.sistemasjr@gmail.com"

# Instalando o PDO Mysql.
RUN docker-php-ext-install mysqli pdo_mysql