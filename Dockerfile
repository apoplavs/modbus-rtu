FROM apoplavs/home-automation:latest

# Встановлюємо Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Копіюємо файли проекту до контейнера
COPY . /home/mqtt_client

# Встановлюємо залежності проекту через Composer
WORKDIR /home/mqtt_client
RUN composer install --no-interaction --prefer-dist --no-dev

# Запускаємо команду при старті контейнера
CMD ["php", "modbusRTUWorker.php"]
