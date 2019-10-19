# JSON parsing example

This project demonstrates using [Swaggest JSON-schema](https://github.com/swaggest/php-json-schema) to validate a JSON schema

## Running the project

You can run the project with the following commands:

    composer install
    php index.php

## Generating JSON schema to test with

To generate your own JSON schema from Swagger documentation you can use [openapi2jsonschema](https://github.com/instrumenta/openapi2jsonschema)

As an example, assuming that you're using Python3 on Ubuntu 18.10, you can run:

    virtualenv venv
    source venv/bin/activate
    pip3 install -r requirements.txt
    openapi2jsonschema http://petstore.swagger.io/v2/swagger.json

Just replace the link to the [https://petstore.swagger.io/](Petstore) schema with your own Swagger definition.

You will need to correct the path to references, for example:
    
    // this line in the schema
    "$ref": "_definitions.json#/definitions/Category"
    
    // must be edited to include the relative path from the PHP to the definition
    "$ref": "./schemas/_definitions.json#/definitions/Category"
 
 ## Installing virtualenv
 
 Refer to the [https://virtualenv.pypa.io/en/stable/installation/](virtualenv) documentation for instructions.
 
 If you're using Ubuntu 18.04 then the following commands will install it for you:
 
    sudo apt-get update
    sudo apt-get install python3-pip
    pip3 install virtualenv
    source ~/.profile
    
