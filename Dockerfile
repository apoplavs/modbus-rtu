FROM apoplavs/home-automation:0.9

# Створюємо основну папку
RUN mkdir -p /app/modbus_rtu

# Створюємо папку для логів
RUN mkdir -p /app/modbus_rtu/log

# Копіюємо файли проекту до контейнера
COPY . /app/modbus_rtu

# Встановлюємо робочу папку
WORKDIR /app/modbus_rtu

# Встановлюємо залежності проекту через Composer
RUN composer install --no-interaction --prefer-dist --no-dev

# Запускаємо команду при старті контейнера
CMD ["php", "modbusRTUWorker.php"]