#!/bin/sh

rm -rf /usr/local/lib/node_modules/gh-pages/.cache

cd ../libs/java
mvn deploy
cd ../../build
