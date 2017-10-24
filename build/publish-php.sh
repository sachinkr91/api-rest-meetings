#!/bin/sh

rm -rf /usr/local/lib/node_modules/gh-pages/.cache

cd ../libs/php/BlueJeansMeetingsRestApi

gh-pages --branch php-repo --dist . --repo git@github.com:bluejeans/api-rest-meetings.git

cd ../../../build
