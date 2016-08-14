<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="script.js"></script>
  </head>
  <body>
    <form method="post" action="page_two.php">
    name: <input type="text" name="name" value="<?php echo $_SESSION['nameHolder'] ?>">
    <br>
    email: <input type="text" name="email_address" value="<?php echo $_SESSION['emailHolder'] ?>">
    <br>
    <br>
    <button type="button" name="button" onclick="myFunction();">click me</button>
    <input id="sub1" type="submit" value="Go To Step 2" disabled="true">
</form>
  </body>
</html>
