#!/bin/bash

if [ "$EUID" -ne 0 ];then
    echo "Must be root!"
    exit
fi

docker run --rm -it -v $PWD/src:/tmp/src composer create-project --prefer-dist laravel/laravel /tmp/src
chmod -R 777 $PWD/src