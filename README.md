
# Installing Nginx, PHP-Fpm, Mariadb, Wordpress with Ansible

Работает только с RedHat и Centos

Плейбук обрабатывает следующие роли:

[Common](ansible/roles/common/README.md) - общие задачи по настройке системы

Nginx - установка и настройка WEB-сервера NGINX, создание конфигурационных файлов и каталогов для сайта

PHP-FPM - установка и настройка PHP-FPM  и необходимых пакетов, создание конфигурационных файлов

MariaDB - установка и настройка сервера баз данных, установка пароля root-у, создание необходимых баз данных 
и  пользователей

Wordpress - скачивание и распаковка дистрибутива Wordpress, создание файла конфигурации Wordpress, настройка разрешений
SELinux для Wordpress

Fail2ban - настройка утилиты для защиты доступа в админку Wordpress и к серверу по SSH
 


Запуск  - 

```
ansible-playbook wplemp.yml
``` 

Works only with RedHat and Centos

Playbook handle the following roles:

[Common](ansible/roles/common/README.md) - general tasks for setting up the system

Nginx - 

PHP-FPM - 

MariaDB -

Wordpress - 

Fail2ban - 



