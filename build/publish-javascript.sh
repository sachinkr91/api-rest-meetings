#!/bin/sh

./build.sh

cd ../libs/javascript

npm install gh-pages --save-dev

node_modules/gh-pages/bin/gh-pages --branch npm-repo --dist . --repo git@github.com:bluejeans/api-rest-onvideo.git

cd ../../build
