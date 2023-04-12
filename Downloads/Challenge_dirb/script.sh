#!/bin/bash
if ! command -v unrar >/dev/null 2>&1; then
    echo "unrar n'est pas installé. Installation en cours..."
    sudo apt-get update
    sudo apt-get install unrar
fi
unrar x ./db/ib.rar ./db/
unrar x ./wordpress/wp-includes.rar ./wordpress
unrar x ./wordpress/wp-admin.rar ./wordpress
unrar x ./wordpress/wp-content/languages.rar ./wordpress/wp-content
unrar x ./wordpress/wp-content/plugins.rar ./wordpress/wp-content
unrar x ./wordpress/wp-content/themes.rar ./wordpress/wp-content
chmod -R 777 ./db
chmod -R 777 ./wordpress