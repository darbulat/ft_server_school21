
service mysql start

echo "CREATE DATABASE wordpress;" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
echo "update mysql.user set plugin = 'mysql_native_password' where user='root';" | mysql -u root

 cd
wget hhttps://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz
tar xzf phpMyAdmin-5.1.0-english.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin
cp /root/config.inc.php /var/www/html/phpmyadmin/

chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*
echo "GRANT SELECT, INSERT, UPDATE, DELETE ON phpmyadmin.* TO 'ljarrahd'@'localhost' IDENTIFIED BY 'password';"| mysql
echo "GRANT ALL PRIVILEGES ON *.* TO 'ljarrahd'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;"| mysql

mkdir ~/mkcert
cd ~/mkcert  
wget https://github.com/FiloSottile/mkcert/releases/download/v1.1.2/mkcert-v1.1.2-linux-amd64
mv mkcert-v1.1.2-linux-amd64 mkcert
chmod +x mkcert
./mkcert -install
./mkcert localhost

service nginx start
service mysql restart
/etc/init.d/php7.3-fpm start
clear
