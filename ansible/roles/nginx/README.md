# Роль NGINX 

Rоль выполняет следующие задачи:

- устанавливает репозиторий NGINX
- устанавливает GPG ключ NGINX
- устанавливает NGINX
- включает автозаруск NGINX и запускает службу
- создает директорию для сайта и назначает необходимые права 
- копирует на сервер главный конфигурационный файл NGINX
- копирует на сервер конфигурационный файл для сайта
- перезапускает службу


---

# Role NGINX

Role handle the folloving tasks:

- installs the NGINX repository
- installs NGINX
- enables the auto-start for the NGINX service and starts the service
- сreates a directory for the site and assigns the necessary rights
- copies the main configuration file NGINX to the server
- copies the configuration file for the site to the server
- restarts the service
