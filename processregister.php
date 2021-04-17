<?php 
session_start();

//print_r($_POST);

?>
<?php

 if(isset($_POST['submit'])){
   echo " Registration Successful" ;
     // echo $_GET["$lname"];
 }

// Collecting user's Date.

     $errorCount = 0;

 //Verifying the data, validation

     $fname = $_POST['fname'] != "" ? $_POST['fname'] : $errorCount++;
     $lname = $_POST['lname'] != "" ? $_POST['lname'] : $errorCount++;
     $email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
     $pwd = $_POST['pwd'] != "" ? $_POST['pwd'] : $errorCount++;
     $gender= $_POST['gender'] != "" ? $_POST['gender'] : $errorCount++;
     $track = $_POST['track'] != "" ? $_POST['track'] : $errorCount++;
     $course = $_POST['course'] != "" ? $_POST['course'] : $errorCount++;
     $team = $_POST['team'] != "" ? $_POST['team'] : $errorCount++;


   $_SESSION['fname'] = $fname;
   $_SESSION['email'] = $email;
   $_SESSION['pwd'] = $pwd;


     if($errorCount > 0){
     //Diaplay proper message to the users & give more acurate feedback to the user.


//         //redirect back and display error
         $_SESSION["error"] = "You have " . $errorCount . " error(s) in your form submission";
         header("Location: register.php");
     }else{
        //count all users to assign id to new user
        $allUsers = scandir("db/users");
        // print_r($allUsers);
        // die();

        $countAllUsers = count($allUsers);
        $newUserId = ($countAllUsers-1);


         //User's object
         $userObject = [
            'id'=>$newUserId,
            'fname'=>$fname,
            'lname'=>$lname,
            'email'=>$email,
            'gender'=>$gender,
            'pwd'=>password_hash($pwd,PASSWORD_DEFAULT),
            'track'=>$track,
            'course'=>$course,
            'team'=>$team,
         ];

//check if the users already exist using email as a unique id 
//using loop(for loop) function

for ($counter = 0; $counter < $countAllUsers  ; $counter++) { 
    # code...
    $currentUser = $allUsers[$counter];

    if($currentUser == $email . ".json"){
        $_SESSION["error"] = "Registration failed, user already exist!";
         header("Location: register.php");
     
         die();
    }
}


         //save data into the database/ 
         file_put_contents("db/users/" . $email . ".json", json_encode($userObject));
         echo "Success!";
         $_SESSION["message"] = "Registration successful, " . $fname . "You can now login!";
         header("Location: successfulregpage.php");
     
         session_unset();
         
        }
       
//SAvibg the data into the database

//returning back to the page, with a atatus message.









    // $errorArray = [];
    //     if($fname == ""){
    //         $errorArray = "First Name connot be empty!";
    //     }



//     //check if the inputs are empty

//     if(empty($fname) || empty($lname) || empty($email) || empty($pwd)){
//         header("Location: register.php?submit=empty");
//         echo " there is error!";
//         exit();
//     } else{
//         //check is characters are valid
//         if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)){
//             header("Location: register.php?submit=empty");
//             exit();
//         } else {
//             //check is email is valid
//         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             header("Location: register.php?submit=email&fname=$fname&lname=$lname");
//             exit();
//         } else{
//             echo "success!";
//             //  header("Location: dashboard.php?submit=success");
//              exit();
//         }

//         }
//     }

// } else {
//     header("Location: dashboard.php");

//     exit();
 //}

?>

