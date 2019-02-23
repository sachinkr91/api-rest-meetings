#!/bin/sh

rm -rf ../libs/java
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l java -o ../libs/java -t ./templates/java  --group-id com.bluejeans --artifact-id api-rest-meetings --api-package com.bluejeans.api.rest.meetings.api --model-package com.bluejeans.api.rest.meetings.model --invoker-package com.bluejeans.api.rest.meetings --config config.java.json
cd ../libs/java

perl -p -i -e "s|</properties>|  <github.global.server>github</github.global.server>\n  </properties>|" pom.xml

perl -p -i -e "s|</properties>|  <github.global.server>github</github.global.server>\n  </properties>|" pom.xml

perl -p -i -e "s|</project>|  <distributionManagement>\n</project>|"  pom.xml
perl -p -i -e "s|</project>|    <repository>\n</project>|"  pom.xml
perl -p -i -e "s|</project>|      <id>internal.repo</id>\n</project>|"  pom.xml
perl -p -i -e "s|</project>|      <name>Temporary Staging Repository</name>\n</project>|"  pom.xml
perl -p -i -e "s|</project>|      <url>file://\${project.build.directory}/mvn-repo</url>\n</project>|"  pom.xml
perl -p -i -e "s|</project>|    </repository>\n</project>|"  pom.xml
perl -p -i -e "s|</project>|  </distributionManagement>\n</project>|"  pom.xml

perl -p -i -e "s|^    </plugins>|      <plugin>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        <artifactId>maven-deploy-plugin</artifactId>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        <version>2.8.1</version>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        <configuration>\n    </plugins>|"  pom.xml
perl -p -i -e 's|^    </plugins>|          <altDeploymentRepository>internal.repo::default::file://\${project.build.directory}/mvn-repo</altDeploymentRepository>\n    </plugins>|'  pom.xml
perl -p -i -e "s|^    </plugins>|        </configuration>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|      </plugin>\n    </plugins>|"  pom.xml

perl -p -i -e "s|^    </plugins>|      <plugin>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        <groupId>com.github.github</groupId>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        <artifactId>site-maven-plugin</artifactId>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        <version>0.11</version>\n    </plugins>|"  pom.xml
perl -p -i -e 's|^    </plugins>|        <configuration>\n    </plugins>|' pom.xml
perl -p -i -e 's|^    </plugins>|          <message>Maven artifacts for \${project.version}</message>\n    </plugins>|'  pom.xml
perl -p -i -e "s|^    </plugins>|          <noJekyll>true</noJekyll>\n    </plugins>|"  pom.xml
perl -p -i -e 's|^    </plugins>|          <outputDirectory>\${project.build.directory}/mvn-repo</outputDirectory>\n    </plugins>|'  pom.xml
perl -p -i -e "s|^    </plugins>|          <includes><include>**/*</include></includes>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|          <branch>refs/heads/mvn-repo</branch>  \n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        </configuration>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        <executions>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|          <execution>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|            <goals>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|              <goal>site</goal>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|            </goals>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|            <phase>deploy</phase>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|          </execution>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|        </executions>\n    </plugins>|"  pom.xml
perl -p -i -e "s|^    </plugins>|      </plugin>\n    </plugins>|"  pom.xml

mvn package

mkdir bin
cp target/api-rest-meetings-1.0.0.jar bin/bluejeans-api-rest-meetings-1.0.0.jar
cd ../../build

#
# PHP
#

rm -rf ../libs/php

java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l php -o ../libs/php -t ./templates/php -c config.php.json 

cd ../libs/php/BlueJeansMeetingsRestApi

perl -p -i -e "s|\*\@dev|dev-php-repo|" README.md
perl -p -i -e "s|Video That Works Where You Do.*|Video That Works Where You Do.|" README.md

cd ../../../build

#
# JAVASCRIPT
#

rm -rf ../libs/javascript/docs
rm -rf ../libs/javascript/src
rm -rf ../libs/javascript/test

java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l javascript -o ../libs/javascript -t ./templates/javascript -c config.javascript.json

cd ../libs/javascript

perl -p -i -e "s|Unlicense|MIT|" package.json
perl -p -i -e "s|^  }$|  },|" package.json
perl -p -i -e "s|^}|\,  \"repository\": {\n}|" package.json
perl -p -i -e "s|^}|    \"type\": \"git\",\n}|" package.json
perl -p -i -e "s|^}|    \"url\": \"https://github.com/bluejeans/api-rest-meetings.git\"\n}|" package.json
perl -p -i -e "s|^}|  }\n}|" package.json

npm test

perl -p -i -e "s|Video That Works Where You Do.*|\nVideo That Works Where You Do.\n|" README.md

cd ../../build

#
# CSHARP
#
# Install tools from http://www.mono-project.com/download/
#

rm -rf ../libs/csharp
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l csharp -o ../libs/csharp -t ./templates/csharp -c config.csharp.json
cd ../libs/csharp
chmod 755 build.sh
./build.sh

perl -p -i -e "s|Video That Works Where You Do.*|Video That Works Where You Do.|" README.md

cd ../../build

#
# PYTHON
#

rm -rf ../libs/python
java -jar swagger-codegen-cli.jar generate -i ../swagger.yaml -l python -o ../libs/python -t ./templates/python -c config.python.json

cd ../libs/python

python -m unittest discover -s test

perl -p -i -e "s|\.git|\.git\@pip-repo|" README.md
perl -p -i -e "s|Video That Works Where You Do.*|Video That Works Where You Do.|" README.md

cd ../../build

find ../libs -type f -name "*.bak" -exec rm {} +

echo Press Return
read nothing

