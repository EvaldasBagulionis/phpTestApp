<?php

//Includes autoloader file
 include "autoloader.php";

 ?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <label for="filename">File name:</label>
   <input type="text" id="filename" name="filename"><br><br>
   <input type="submit" value="Submit">
 </form>

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
