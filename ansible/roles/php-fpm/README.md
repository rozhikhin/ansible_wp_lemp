# Роль PHP-FPM 

Rоль выполняет следующие задачи:

- Устанавливает необходимые репозитории и ключи PHP-FPM 

- Устанавливает необходимое для работы PHP-FPM программное обеспечение

- Устанавливает cgi.fix_pathinfo=0 в php.ini

- Отключает пул по-умолчанию и копирует конфигурациооный файл PHP-FPM для сайта

- Запускает службу PHP-FPM и добавляет ее в автозапуск

----

# Role PHP-FPM

Role handle the folloving tasks:

- Installs PHP-FPM repositories and keys

- Installs the software needed to run PHP-FPM

- Sets cgi.fix_pathinfo = 0 in php.ini

- Disables the default pool and copies the PHP-FPM configuration file for the site

- Launches the PHP-FPM service and adds it to the autorun



