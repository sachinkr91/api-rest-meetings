#!/bin/sh

cd ../libs/python

gh-pages --branch pip-repo --dist . --repo git@github.com:bluejeans/api-rest-onvideo.git

cd ../../build
