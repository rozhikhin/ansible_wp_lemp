
# Installing Nginx, PHP-Fpm, Mariadb, Wordpress with Ansible

Запуск  - 

```
ansible-playbook wplemp.yml
``` 

Работает только с RedHat и Centos

В каталоге `group_vars` находится файл с общими переменными.
В переменой `develop` указывается выполняется ли данная установка для разработки или на продакшн.
Если `develop: true` - разработка, если `develop: false` - продакшн.
В случае установки для разработки некоторые задачи не будут выполняться ( например, установка
и настройка SELinux и file2ban).

Также существует пременная `www_user`, которая устанавливает пользователя, от имени которого запускается
WEB-сервер NGINX и которому предоставляется доступ к локальному сокету при подключении к PHP-FPM 
через сокет. Переменная была введена для использования при разработке с **Vagrant**. При инициализации ВМ Vagrant 
монтирует каталоги до того, как запускает **Ansible** и при этом в виртуальной системе отсутсвует пользователь, 
например, `nginx`, которому нужны права на файлы в каталоге сайта.


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

Works only with RedHat and Centos.

In the `group_vars` directory there is a file with common variable variables.
The `develop` variable specifies whether the installation is being developed for development or for production. 
If `develop: true` - development, if` develop: false` - production.
If you are installing for development, some tasks will not be performed (for example, installing 
and configuring SELinux and file2ban).

Also, there is a `www_user` variable, which sets the user, on behalf of which NGINX is started, 
and which is granted access to the local socket when connecting to the PHP-FPM via the socket.
The variable was introduced for use with ** Vagrant **. 
When the VM is initialized, Vagrant mounts the catalogs before it starts ** Ansible **.
At the same time, there is no user in the virtual system, for example, `nginx`, 
which needs rights to files in the site directory.

Playbook handle the following roles:

- [Common](ansible/roles/common/README.md) - general tasks for setting up the system

- Nginx - installation and configuration of WEB-server NGINX, creation of configuration files and directories

- PHP-FPM - installation of packages and configuration of PHP-FPM, creation of configuration files

- MariaDB - installing and configuring the database server, setting the root password, 
creating the necessary databases and users

- Wordpress - downloading and unpacking Wordpress distribution, creation of Wordpress configuration file, setting 
the SELinux permissions for Wordpress

- Fail2ban - setting up a utility to protect access to the Wordpress admin area and to the server via SSH




