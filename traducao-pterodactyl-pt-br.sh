#!/bin/sh

cd /var/www/pterodactyl/resources/lang

rm -rf en

git clone https://github.com/zGumeloBr/traducao-pt-br-pterodactyl-panel.git

mv traducao-pt-br-pterodactyl-panel en

echo "Tradução finalizada."



