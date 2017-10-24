#!/bin/sh

rm -rf /usr/local/lib/node_modules/gh-pages/.cache

cd ../libs/python

gh-pages --branch pip-repo --dist . --repo git@github.com:bluejeans/api-rest-meetings.git

cd ../../build
