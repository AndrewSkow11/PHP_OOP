<?php 

namespace App;

interface DataFormat{
    public function encode($data);
    public function decode($data);
}