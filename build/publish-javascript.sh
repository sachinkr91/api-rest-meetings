#!/bin/sh

rm -rf /usr/local/lib/node_modules/gh-pages/.cache

cd ../libs/javascript

rm -rf node_modules

gh-pages --branch npm-repo --dist . --repo git@github.com:bluejeans/api-rest-onvideo.git

cd ../../build
