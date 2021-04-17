<?php
print_r($_POST);

?>
<?php

if(isset($_POST['submit'])){
    echo " Registration Successful" . "$lname";
    echo $_GET["$lname"];

    $errorCount = 0;

    $fname = $_POST['fname'] != "" ? $_POST['fname'] : $errorCount++;
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $gender= $_POST['gender'];
    $track = $_POST['track'];
    $team = $_POST['team'];

    if($errorCount > 0){
        //redirect back and display error
    }else{
        //continue to the database/mainPage to login
    }



    // $errorArray = [];
    //     if($fname == ""){
    //         $errorArray = "First Name connot be empty!";
    //     }



    //check if the inputs are empty
    if(empty($fname) || empty($lname) || empty($email) || empty($pwd)){
        header("Location: register.php?submit=empty");
        echo " there is error!";
        exit();
    } else{
        //check is characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)){
            header("Location: register.php?submit=empty");
            exit();
        } else {
            //check is email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: register.php?submit=email&fname=$fname&lname=$lname");
            exit();
        } else{
            echo "success!";
            //  header("Location: dashboard.php?submit=success");
             exit();
        }

        }
    }

} else {
    header("Location: dashboard.php");

    exit();
}

?>

