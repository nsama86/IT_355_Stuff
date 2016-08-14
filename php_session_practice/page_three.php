<?php
//let's start our session, so we have access to stored data
    session_start();





//finally, let's store our posted values in the session variables
$_SESSION['membership_type'] = $_POST['membership_type'];

if($_SESSION['membership_type'] != ""){
  $_SESSION['memberTypeHolder'] = $_SESSION['membership_type'];
  $memberCounter = 1;
}



    echo "name: ".$_SESSION['nameHolder']."<br>";
    echo "email: ".$_SESSION['emailHolder']."<br>";
    echo "Membership: ".$_SESSION['memberTypeHolder']."<br>";


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form name='form_three' action="page_four.php" method="post">

      Are you sure you want to submit this information? <br>

      <input type="submit" value="Yes">
      <input type="submit" value="No" onclick="form_three.action='page_two.php'">
    </form>

  </body>
</html>
