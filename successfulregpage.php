<?php 
session_start();

?>

<?php include_once('lib/header.php');
?>


 <html> 

<main>
    <div class="contents">
        <h1>Registratioin Successful<h1>
        <?php 
        //$fname = $_SESSION['fname'];
        // $email = $_SESSION['email'];
        // $pwd = $_SESSION['pwd'];
        echo "<h4>You can now login to your Dashboard<h4>"; 
        ?>

    </div>

    <div class="btns_container">
        <a href="http://localhost/enrolmentTask/login.php" class="button">Login Now</a>
    </div>
</main>






    <footer>
        All rights reserved 2021
    </footer>
</body>
</html>