<?php

class Json
{
    //Reads and outputs json file content
    public function show($file)
    {
        $json = json_decode(file_get_contents($file), true);
        print_r($json);
    }
}
