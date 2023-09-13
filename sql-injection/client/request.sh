#!/bin/sh

curl -X POST http://localhost:8000 \
    -H "Content-Type: application/x-www-form-urlencoded" 
    -d "username=USERNAME&password=PASSWORD"
