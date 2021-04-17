<?php
session_start();


print_r($_POST);

?>
<?php

$errorCount = 0;

$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
$pwd = $_POST['pwd'] != "" ? $_POST['pwd'] : $errorCount++;

$email = $_SESSION['email'];

if ($errorCount > 0) {

//redirect back and display error
$_SESSION["error"] = "You have " . $errorCount . " error(s) in your form submission";
header("Location: login.php");
}else{

    //count all users to assign id to new user
    $allUsers = scandir("db/users");
    // print_r($allUsers);
    // die();

    $countAllUsers = count($allUsers);

    for ($counter = 0; $counter < $countAllUsers  ; $counter++) { 
        $currentUser = $allUsers[$counter];
    
        if($currentUser == $email . ".json"){
//check user password
$userObject = file_get_contents("db/users".$currentUser);
            echo $userObject['id']
        die();
        }
    }
            $_SESSION["error"] = "Invalid Email or Password";
            //header("Location: login.php");
         echo "logged in successfully";
             die();
        
    
}
//count all users to assign id to new user
//$allUsers = scandir("db/users");
// print_r($allUsers);
// die();}
?>