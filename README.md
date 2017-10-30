
# Installing Nginx, PHP-Fpm, Mariadb, Wordpress with Ansible

Работает только с RedHat и Centos



Плейбук обрабатывает следующие роли:

Common - роль выполняет следующие задачи:
- устанавливает имя хоста 
- копирует на сервер SSH-ключ
- добавляет DNS-сервер в `/etc/resolv.conf`
- обновляет все пакеты в системе
- устанавливает пакеты, необходимые для работы SELinux и FirewallD
- включает SELinux в режим `enforcing`
- перезагружает систему
- останавливает и удаляет из автозапуска службу IPtables
- запускает и добавляет в автозапуск службу Firewalld 
- добавляет разрешение для доступа по http
- добавляет разрешение для доступа по https
- перезапускает службу Firewalld 

Works only with RedHat and Centos

Playbook handle the following roles:

Common - role handle the folloving tasks:
- sets the hostname
- copies an SSH key to the server
- adds nameserver to the file `/etc/resolv.conf`
- update all packages
- installs the packages required for SELinux and FirewallD
- switches SELinux to the `enforcing` mode
- reboots the system
- stops and removes from the autorun IPtables service
- starts and adds Firewalld service to startup 
- adds permission to access via http
- adds permission to access via https
- restart Firewalld service









