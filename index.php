<?php

require('vendor/autoload.php');

use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Exception\ObjectException;
use Swaggest\JsonSchema\Exception\TypeException;

// the schema defines the validation requirements
const SCHEMA_FILENAME = './schemas/pet.json';
// the json could be supplied, for example, as the body of a POST request to an API
const JSON_FILENAME = './json/pet.json';

try {

    $schema = Schema::import(json_decode(file_get_contents(SCHEMA_FILENAME)));

    $schema->in(json_decode(file_get_contents(JSON_FILENAME)));

    echo "JSON is valid";

} catch (ObjectException $e) {

    echo "JSON is not valid because [{$e->getMessage()}]" . PHP_EOL;

} catch (TypeException $e) {

    echo "Problem loading the schema" . PHP_EOL;

}
