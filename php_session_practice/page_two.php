<?php

//let's start the session
session_start();



//finally, let's store our posted values in the session variables

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email_address'] = $_POST['email_address'];

  if($_SESSION['name'] != ""){
    $_SESSION['nameHolder'] = $_SESSION['name'];
    $_SESSION['emailHolder'] = $_SESSION['email_address'];

  }



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="script.js"></script>
  </head>
  <body>
    <form name="form2" method="post" action="page_three.php">
      <ul>
        <li><input type="radio" id="r1" name="membership_type" value="Free" <?php if($_SESSION['memberTypeHolder'] == 'Free') {echo "checked=\"checked\"";}?> onclick="myClick();">Free</li>
        <li><input type="radio" id="r2" name="membership_type" value="Normal" <?php if($_SESSION['memberTypeHolder'] == 'Normal') {echo "checked=\"checked\"";}?> onclick="myClick();">Normal</li>
        <li><input type="radio" id="r3" name="membership_type" value="Deluxe" <?php if($_SESSION['memberTypeHolder'] == 'Deluxe') {echo "checked=\"checked\"";}?> onclick="myClick();">Deluxe</li>
      </ul>
      <br>

<input type="submit" value="Previous" onclick="form2.action='page_one.php'">
<input type="submit" id="sub2" value="Go To Step 3" disabled="true">
</form>



  </body>
</html>
