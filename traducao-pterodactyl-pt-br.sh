#!/bin/sh

cd /var/www/pterodactyl/resources/lang

rm -rf en

git clone https://github.com/zGumeloBr/traducao-pt-br-pterodactyl-panel.git

cd /var/www/pterodactyl/resources/lang/traducao-pt-br-pterodactyl-panel

rm -rf traducao-pterodactyl-pt-br.sh

cd /var/www/pterodactyl/resources/lang

mv traducao-pt-br-pterodactyl-panel en

echo "Tradução finalizada."



