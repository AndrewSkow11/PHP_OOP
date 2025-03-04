<?php 

namespace App;
require_once '../vendor/autoload.php';

use App\JsonFormat;
use App\XMLFormat;

$my_array = [
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
];

$json_format = new JsonFormat();
$json_encoded = $json_format->encode($my_array);
echo "JSON encoded data: $json_encoded <br>";
$json_decoded = $json_format->decode($json_encoded);
var_dump($json_decoded);

echo "<br>";

$xmlString = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<person>
    <name>Иван</name>
    <age>30</age>
    <isStudent>false</isStudent>
    <skills>
        <skill>PHP</skill>
        <skill>JavaScript</skill>
        <skill>HTML</skill>
    </skills>
    <address>
        <city>Москва</city>
        <country>Россия</country>
    </address>
</person>
XML;


$xml_format = new XMLFormat();
$xml_encoded = $xml_format->encode($xmlString);
var_dump($xml_encoded);
$xml_decoded = $xml_format->decode($xmlString);
var_dump($xml_decoded);