#!/bin/sh

./build.sh

cd ../libs/python

npm install gh-pages --save-dev

node_modules/gh-pages/bin/gh-pages --branch pip-repo --dist . --repo git@github.com:bluejeans/api-rest-onvideo.git

cd ../../build
