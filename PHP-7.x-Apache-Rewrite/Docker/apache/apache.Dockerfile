# Imagem de origem
FROM php:apache

# Mantenedor
LABEL maintainer="Gabriel.sistemasjr@gmail.com"

# Setando o modo de reescrita de URL no apache.
RUN a2enmod rewrite && service apache2 restart