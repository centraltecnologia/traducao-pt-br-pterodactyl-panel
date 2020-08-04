#!/bin/sh

apt install git
yum install git

cd /var/www/pterodactyl/resources/lang

rm -rf en

git clone https://github.com/zGumeloBr/traducao-pt-br-pterodactyl-panel.git

mv traducao-pt-br-pterodactyl-panel en



