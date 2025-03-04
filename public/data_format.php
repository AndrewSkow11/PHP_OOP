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

$xml_format = new XMLFormat();
$xml_encoded = $xml_format->encode($my_array);
echo "XML encoded data: $xml_encoded <br>";
