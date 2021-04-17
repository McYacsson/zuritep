<?php
session_start();
// $_SESSION['TESTING'] = "testing Session";
// print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enrolment Form</title>
</head>
<body>

<p><strong>Welcome to The Zuri Training</strong></p>
<h7>Login with your correct credentials<h7>




<form action="processlogin.php" method="post">
<p>
      <?php
            if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                  echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";

                  session_destroy();
            }
      ?>
</p>


<p>
<label>Email</label>
<input 
    <?php
             if(isset($_SESSION['email'])) {
                   echo "value=" . $_SESSION['email'];
                   }
                  ?>

type="text" name="email" placeholder="Email"> <br></br>
</p>

<p>
<label>Password</label>
<input type="password" name="pwd" placeholder="Password"> <br></br>
</p>

<button type="submit">Login</button>

</form>

<?php
// if(!isset($_POST['submit'])){
//     exit();
// } else{
//     $submithCheck = $_POST['submit'];

//     if($submithCheck == "empty"){
//     echo "<p class='error'>You did not fill in all fields!</p>";
//     exit();
//     }
//     elseif($submithCheck == "char"){
//         echo "<p class='error'>You used invalid character!</p>";
//         exit();
//         }
//     elseif($submithCheck == "email"){
//         echo "<p class='error'>You used an invalid email!</p>";
//         exit();
//         }


// }

?>

</body>
<p>
<?php include_once('lib/footer.php');
?>
</p>
</html>