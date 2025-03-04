<?php 

namespace App;


class JsonFormat implements DataFormat{
    public function encode($data) {
        $ecnoded_data = json_encode($data);
        return $ecnoded_data;
    }

    public function decode($data) {
        return json_decode($data, true);
    }
}