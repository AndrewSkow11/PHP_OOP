<?php 

namespace App;

use SimpleXMLElement;

class XMLFormat implements DataFormat{
    public function encode($data) {
        return simplexml_load_string($data);
    }

    public function decode($data) {
        $xml = new SimpleXMLElement($data);
        return $xml->asXML();
    }
}