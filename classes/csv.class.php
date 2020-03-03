<?php

class Csv
{
    //Reads and outputs csv file content
    public function show($file)
    {
        $csv = array_map('str_getcsv', file($file));
        print_r($csv);
    }
}
