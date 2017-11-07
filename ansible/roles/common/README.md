
# Роль Common 

Rоль выполняет следующие задачи:
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

Если переменная `develop` (определяется в файле `group_vars/all` ) имеет значение `true` - то файл `selinux.yml`
не включается в файл `main.yml`. Соответственно, пакеты SELinux не будут ставиться и SELinux не будет настраиваться.
Это конфигурация для разработки.

# Role Common

Role handle the folloving tasks:
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

If the variable `develop` (defined in the file` group_vars / all`) has the value `true` - 
then the file` selinux.yml` is not included in the file `main.yml`. Accordingly, SELinux packages will not be installed 
and SELinux will not be configured. This is the configuration for development.









