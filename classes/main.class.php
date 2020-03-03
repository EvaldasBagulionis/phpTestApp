<?php

class Main
{
    //Function checks if wanted file exists and then by file type calls class for that file type
    public function showFile($type)
    {
        $fileDir="./files/".$_GET["filename"].".".$type;
        //Checks if wanted file exists
        if (file_exists($fileDir)) {
            //checks if wanted file is csv
            if ($type=='csv') {
                $content= new Csv();
                $content->show($fileDir);
            //checks if wanted file is xml
            } elseif ($type=='xml') {
                $content= new Xml();
                $content->show($fileDir);
            //checks if wanted file is json
            } elseif ($type=='json') {
                $content= new Json();
                $content->show($fileDir);
            //If file type from config is not any of these 3 types reports error message
            } else {
                echo 'Bad config';
            }
            //Shows error message that file with that name and/or file type doesn't exists
        } else {
            echo 'No such file with that name and/or bad file extension in config.php';
        }
    }
}
