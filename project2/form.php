<?php

if($_SERVER["REQUEST_METHOD"] != "POST"){
    header("Location: ass2.php");
}
echo basename("https://www.w3schools.com/php/php_file_upload.asp");

print_r($_FILES);

move_uploaded_file($_FILES['chobi']['tmp_name'], "./image/emon.png");
?>



<h1><?php echo $_POST["username"]; ?></h1>
<h1><?php echo $_POST["mail"]; ?></h1>
<h1><?php echo $_GET["pass"]; ?></h1>
<h1><?php echo $_POST["chobi"];?></h1>