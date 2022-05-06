#!/bin/bash
sudo yum update -y
sudo yum install -y httpd
sudo yum install -y mysql
mysql --user=admin --password=workshop123 -e "CREATE USER 'wordpress' IDENTIFIED BY 'wordpress-pass';"
mysql --user=admin --password=workshop123 -e "GRANT ALL PRIVILEGES ON wordpress.* TO wordpress;"
mysql --user=admin --password=workshop123 -e "FLUSH PRIVILEGES;"
wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz

# Grab the workshop wordpress configuration and reset the database from localhost to our RDS endpoint.
wget -O ~/wordpress/wp-config.php https://raw.githubusercontent.com/dmatta22201/dmatta22201.github.io/master/s-wp-config2468.php
sed -i -e 's/localhost/$MYSQL_HOST/' ~/wordpress/wp-config.php

# Deploy Wordpress
sudo amazon-linux-extras install -y lamp-mariadb10.2-php7.2 php7.2
sudo yum install php-xml 
cd /home/ec2-user
sudo cp -r wordpress/* /var/www/html/
sudo chown -R apache:apache /var/www/html

# Start web server
sudo service httpd start
sudo systemctl restart php-fpm
