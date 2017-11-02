
# Installing Nginx, PHP-Fpm, Mariadb, Wordpress with Ansible

Запуск  - 

```
ansible-playbook wplemp.yml
``` 

Работает только с RedHat и Centos

Плейбук обрабатывает следующие роли:

- [Common](ansible/roles/common/README.md) - общие задачи по настройке системы

- Nginx - установка и настройка WEB-сервера NGINX, создание конфигурационных файлов и каталогов для сайта

- PHP-FPM - установка необходимых пакетов и настройка PHP-FPM, создание конфигурационных файлов

- MariaDB - установка и настройка сервера баз данных, установка пароля root-у, создание необходимых баз данных 
и  пользователей

- Wordpress - скачивание и распаковка дистрибутива Wordpress, создание файла конфигурации Wordpress, 
настройка разрешений SELinux для Wordpress

- Fail2ban - настройка утилиты для защиты доступа в админку Wordpress и к серверу по SSH
 
---


Launch playbook - 

```
ansible-playbook wplemp.yml
``` 

Works only with RedHat and Centos

Playbook handle the following roles:

- [Common](ansible/roles/common/README.md) - general tasks for setting up the system

- Nginx - installation and configuration of WEB-server NGINX, creation of configuration files and directories

- PHP-FPM - installation of packages and configuration of PHP-FPM, creation of configuration files

- MariaDB - installing and configuring the database server, setting the root password, 
creating the necessary databases and users

- Wordpress - downloading and unpacking Wordpress distribution, creation of Wordpress configuration file, setting 
the SELinux permissions for Wordpress

- Fail2ban - setting up a utility to protect access to the Wordpress admin area and to the server via SSH




