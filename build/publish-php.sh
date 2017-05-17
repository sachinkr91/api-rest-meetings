#!/bin/sh

cd ../libs/php/BlueJeansOnVideoRestApi

gh-pages --branch php-repo --dist . --repo git@github.com:bluejeans/api-rest-onvideo.git

cd ../../../build
