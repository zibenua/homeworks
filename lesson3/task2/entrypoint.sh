#!/bin/bash

name=`printenv MY_NAME`

sed -i "s/HELLO WORLD to /HELLO WORLD to $name/g"  /usr/share/nginx/html/index.html

echo "Starting nginx"
nginx -g 'daemon off;'
