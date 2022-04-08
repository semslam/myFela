#!/bin/bash
docker pull myfela/felaui:test_CICD_deploy
docker images
docker run -d -p 5432:3000 --name test_deploy_app myfela/felaui:test_CICD_deploy
docker container ls -a