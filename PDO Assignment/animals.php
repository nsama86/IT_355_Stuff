<?php
try {
  $dbh = new PDO('mysql:host=localhost; dbname=jhawks_animals', 'jhawks_user', 'katana');


} catch (Exception $e) {
  echo $e->getMessage();
  die();
}

//Checks to see if both name and type have been filled
if(empty($_POST['name']))
{
  echo "Please make sure you have put in a name and type before submitting.".'<br>';
}else {
  if(empty( $_POST['type']))
  {
    echo "Please make sure you have put in a name and type before submitting.".'<br>';
  }else {
    $type = $_POST['type'];
    $name = $_POST['name'];

    $sql = 'INSERT INTO animals(animal_type, animal_name)
              VALUES (:type, :name)';

    //prepare the statment
    $statement = $dbh->prepare($sql);

    $statement->bindParam(':type', $type, PDO::PARAM_STR);
    $statement->bindParam(':name', $name, PDO::PARAM_STR);

    //Exectute
    $statement->execute();
  }
}


//Define the query
$sql = 'SELECT animal_name, animal_type FROM animals';

//prepare the statement
$statement = $dbh->prepare($sql);

//Exectute
$statement->execute();

//process the result
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

echo '<h1>'.'Animal List'.'</h1>'.'<br>';

foreach ($result as $row) {
  echo $row['animal_type'].' - '.$row['animal_name'].'<br>';
}

echo "<br>";

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>My Animal List</title>
   </head>
   <body>

      <!--Form for inserting a new animal into the database -->
     <form action="" method="post">
       Name: <br>
       <input type="text" name="name" id="name"><br>
       Type: <br>
       <input type="text" name="type" id="type"><br>
      <input type="submit" value="Submit">
     </form>



   </body>
 </html>
