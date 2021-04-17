<?php
session_start();
$_SESSION['TESTING'] = "testing Session";
print_r($_SESSION);
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
<h7>Kindly register Here<h7>
<p>All fields are required</p>

<form action="processregister.php" method="post">
<p>
      <?php
            if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
                  echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";

                  session_destroy();
            }
      ?>
</p>

<p>
<label>First Name</label>
<input 
      <?php
             if(isset($_SESSION['fname'])) {
                   echo "value=" . $_SESSION['fname'];
                   }
                  ?>

type="text" name="fname" placeholder="First Name"> <br></br>
</p>

<p>
<label>Last Name</label>
<input 
      <?php
             if(isset($_SESSION['lname'])) {
                   echo "value=" . $_SESSION['lname'];
                   }
                  ?>

      type="text" name="lname" placeholder="Last Name"> <br></br>
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

<p>
<label>Gender</label>
<select name="gender" >

<?php
             if(isset($_SESSION['gender'])) {
                   echo "value=" . $_SESSION['gender'];
                   }
                  ?>

<option value="">Select one</option>
<option
 <?php
             if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male') {
                   echo "selected";
                   }
      ?>
      >Male</option>
<option
<?php
             if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female') {
                   echo "selected";
                   }
      ?>
>Female</option>
</select>
</p>


<p>
<label>Track</label>
<select name="track" >

<?php
             if(isset($_SESSION['Track'])) {
                   echo "value=" . $_SESSION['track'];
                   }
                  ?>

<option value="">Select one</option>
<option
 <?php
             if(isset($_SESSION['track']) && $_SESSION['track'] == 'Frontend') {
                   echo "selected";
                   }
      ?>
      >Frontend</option>
<option
<?php
             if(isset($_SESSION['track']) && $_SESSION['track'] == 'Backend') {
                   echo "selected";
                   }
      ?>
>Backend</option>
<option
<?php
             if(isset($_SESSION['track']) && $_SESSION['track'] == 'UI/UX') {
                   echo "selected";
                   }
       ?>
>UI/UX</option>
<option
<?php
             if(isset($_SESSION['track']) && $_SESSION['track'] == 'Design') {
                   echo "selected";
                   }
      ?>
>Design</option>
<option
<?php
            if(isset($_SESSION['track']) && $_SESSION['track'] == 'Mobile') {
                   echo "selected";
                   }
      ?>
>Mobile</option>
</select>
</p>

<p>
<label>Course</label>
<input 
      <?php
             if(isset($_SESSION['course'])) {
                   echo "value=" . $_SESSION['course'];
                   }
                  ?>
type="text" name="course" placeholder="Course"> <br></br>
</p>

<p>
<label>Team</label>
<input 
      <?php
             if(isset($_SESSION['team'])) {
                   echo "value=" . $_SESSION['team'];
                   }
                  ?>
type="text" name="team" placeholder="Team"> <br></br>
</p>

<button type="submit">Register</button>

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
</html>