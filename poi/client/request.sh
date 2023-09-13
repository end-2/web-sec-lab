#!/bin/sh

curl -X GET http://localhost:8000 -b "data=$1"
