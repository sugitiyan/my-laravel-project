# PHPのバージョンを指定
FROM php:8.3-fpm

# php.iniをコピー
COPY php.ini /usr/local/etc/php/

# 必要な依存関係をインストール
RUN apt update \
    && apt install -y default-mysql-client zlib1g-dev libzip-dev unzip curl \
    && docker-php-ext-install pdo_mysql zip

# Node.jsとnpmのインストール
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
    && apt install -y nodejs

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer self-update

# 作業ディレクトリを設定
WORKDIR /var/www
