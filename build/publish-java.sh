#!/bin/sh

./build.sh

cd ../libs/java
mvn deploy
cd ../../build
