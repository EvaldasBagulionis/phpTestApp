<?php

//Includes autoloader file
 include "autoloader.php";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" content="width=device-width">
        <title>phpTestApp</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
        <header>
            <div id="brand">
                <h1 ><a href="index.php">phpTestApp</a></h1>
            </div>
        </header>
        <div id="backimage">
            <div class="container">
                <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <label for="filename">File name:</label>
                    <input type="text" id="filename" name="filename"><br><br>
                    <input type="submit" value="Search">
                </form>
                <div id="content">
                    <?php
                    //Calls Main class
                    $app = new Main();
                    //Checks if file name is set in _GET method
                    if (isset($_GET['filename'])) {
                        echo '</br>';
                        $app->showFile($configs['file_type']);
                    //Outputs message to set file name if file name is not set
                    } else {
                        echo 'Type file name to view its content';
                    }
                    ?>
                </div>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html>
