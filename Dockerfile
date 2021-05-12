FROM debian:buster
RUN apt-get -y update
RUN apt-get upgrade -y

COPY srcs/config.inc.php ./root
COPY srcs/nginx ./root
COPY srcs/mysql.sh ./
COPY srcs/wp-config.php ./root/
COPY srcs/wordpress/ ./root/wordpress

RUN apt-get -y install php-mbstring php-zip php-gd libnss3-tools php-xml php-pear php-gettext php-cli php-fpm php-cgi nginx mariadb-server vim wget php-mysql

RUN cp -rf /root/wordpress/* /var/www/html/
CMD cd /var/www/html/
RUN cp /root/nginx /etc/nginx/sites-available/default
RUN cp /root/config.inc.php /var/www/html/
ENTRYPOINT service mysql start && /bin/bash
ENTRYPOINT sh /mysql.sh && tail -f /dev/null
RUN cp /root/wp-config.php /var/www/html
