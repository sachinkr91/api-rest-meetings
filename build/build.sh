#!/bin/sh

rm -rf ../libs/java
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l java -o ../libs/java --group-id com.bluejeans --artifact-id api --api-package com.bluejeans.api.rest.onvideo

rm -rf ../libs/php
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l php -o ../libs/php

rm -rf ../libs/javascript/docs
rm -rf ../libs/javascript/src
rm -rf ../libs/javascript/test
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l javascript -o ../libs/javascript

rm -rf ../libs/csharp
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l csharp -o ../libs/csharp

rm -rf ../libs/python
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l python -o ../libs/python

cd ../libs/java
mvn package
cd ../../build
