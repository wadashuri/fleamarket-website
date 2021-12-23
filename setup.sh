#!/bin/bash
 
# MariaDBのリポジトリを追加
sudo bash -c 'cat << EOF > /etc/yum.repos.d/MariaDB.repo
# MariaDB 10.3 CentOS repository list - created 2020-05-06 02:55 UTC
# http://downloads.mariadb.org/mariadb/repositories/
[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.3/centos6-amd64
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1
EOF'
 
# デーモンを止める。
sudo service httpd stop
sudo service mysql stop
 
# yumのアップデート
sudo yum -y update
 
# 現在のファイルを削除
sudo yum -y remove php*
sudo yum -y remove httpd*
sudo yum -y remove mysql*
sudo yum clean all
 
# パッケージのアップデート
sudo yum -y upgrade
 
# apache2.4, php7.3, apache2.4用のsslモジュール, MariaDBのインストール
sudo yum -y install httpd24
sudo yum -y install php73 php73-cli php73-common php73-devel php73-mysqlnd php73-pdo php73-xml php73-gd php73-intl php73-mbstring php73-opcache php73-xmlrpc
 
sudo yum -y install mod24_ssl
sudo yum install -y MariaDB-server MariaDB-client
 
# 利用するphpのバージョンを7.3に切り替え
sudo alternatives --set php /usr/bin/php-7.3
 
# タイムゾーンの設定
sudo sed -i -e '1s/^/#/' -e '2iZONE="Asia/Tokyo"' /etc/sysconfig/clock
sudo ln -sf /usr/share/zoneinfo/Japan /etc/localtime
 
# PHPの設定ファイルを追加
sudo echo "date.timezone = Asia/Tokyo" |sudo tee /etc/php.d/999-php-codecamp.ini
sudo echo "display_errors = On" |sudo tee -a /etc/php.d/999-php-codecamp.ini
sudo echo "mbstring.internal_encoding = UTF-8" |sudo tee -a /etc/php.d/
 
# mariadbを起動
sudo service mysql start
 
# mariadb の自動起動
sudo chkconfig mysql on