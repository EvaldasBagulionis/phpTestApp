<?php

class Xml
{
    //Reads and outputs xml file content
    public function show($file)
    {
        $xml=simplexml_load_file($file);
        print_r($xml);
    }
}
