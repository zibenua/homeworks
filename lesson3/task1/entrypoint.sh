#!/bin/sh

#echo Your container args are: "$1"

default_url="https://github.com/zibenua/hello-world.git"

if [ $1 ] 
then 
#    echo Repo to clone: $1
    url=$1
else
#    echo Repo to clone not set
    url=$default_url
fi

echo We will clone $url

cd /data

mkdir ${url##*/}

cd ${url##*/}

if [ $? == 0 ] 
then git clone $url .
fi

