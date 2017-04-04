#!/bin/sh

rm -rf ../libs/java
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l java -o ../libs/java --group-id com.bluejeans --artifact-id api-rest-onvideo --api-package com.bluejeans.api.rest.onvideo.api --model-package com.bluejeans.api.rest.onvideo.model --invoker-package com.bluejeans.api.rest.onvideo --config config.java.json
cd ../libs/java
mvn package
mkdir bin
cp target/api-rest-onvideo-1.0.0.jar bin/bluejeans-api-rest-onvideo-1.0.0.jar
cd ../../build

rm -rf ../libs/php
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l php -o ../libs/php

rm -rf ../libs/javascript/docs
rm -rf ../libs/javascript/src
rm -rf ../libs/javascript/test
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l javascript -o ../libs/javascript
cd ../libs/javascript
npm test
cd ../../build

#
# Install tools from http://www.mono-project.com/download/
#

rm -rf ../libs/csharp
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l csharp -o ../libs/csharp --config config.csharp.json
cd ../libs/csharp
chmod 755 build.sh
./build.sh
cd ../../build

rm -rf ../libs/python
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l python -o ../libs/python
