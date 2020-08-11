#!/bin/bash

default_name="Noname"

if [ $1 ] 
then 
    name=$1
else
    name=$default_name
fi

sed -i "s/HELLO WORLD to /HELLO WORLD to $name/g"  /usr/share/nginx/html/index.html

echo "Starting nginx"
nginx -g 'daemon off;'
