<?php
include_once('lib/header.php')
?>
<?php

if(isset($_GET['submit'])){
    echo "Registration Successful";
    // print_r($_GET['$fname']);
    //echo "$fname";
}
?>
<?php
if(isset($_POST['submit'])){

echo "You are welcome to your dashboard . '$fname'";
}
?>

