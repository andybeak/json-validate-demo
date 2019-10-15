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
 