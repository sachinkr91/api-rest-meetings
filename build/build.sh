#!/bin/sh

java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l java -o ../libs/java --group-id com.bluejeans --artifact-id api --api-package com.bluejeans.api.rest

java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l nodejs-server -o ../libs/nodejs

java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l php -o ../libs/php

java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l javascript -o ../libs/javascript

cd ../libs/java
mvn package
cd ../../build
