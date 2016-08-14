<?php  session_start(); ?>

<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <h1>User Information</h1>
     <br>

     <?php


     echo "name: ".$_SESSION['nameHolder']."<br>";
     echo "email: ".$_SESSION['emailHolder']."<br>";
     echo "Membership: ".$_SESSION['memberTypeHolder']."<br>";



 // remove all session variables
 session_unset();

 // destroy the session
 session_destroy();
 ?>

 <br>
     <a href="page_one.php"><input type="button" name="name" value="Home"></a>


   </body>
 </html>
