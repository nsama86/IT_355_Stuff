<?php

//required so we can access our class Buddy
require 'class.Buddy.inc';

//Creates an object that uses the class Buddy
echo "<h2>Instantiating Buddy</h2>";
$buddy = new Buddy;

echo "<h2>Empty Buddy Info</h2>";
echo '<tt><pre>'.var_export($buddy, TRUE).'</pre></tt>';

//assigning values to the variables in the Buddy class
echo "<h2>Setting Buddy</h2>";
$buddy->buddy_name = 'Bob';
$buddy->buddy_age = 20;
$buddy->buddy_gender = 'Male';
echo '<tt><pre>'.var_export($buddy, TRUE).'</pre></tt>';

//Displays our information using the display function in the Buddy class.
echo '<h2>Showing Buddy info</h2>';
echo $buddy->display();

//just some spacers
echo "<br>";
echo "<br>";

//Attempt to show protected information
echo "<h2>Protected Information</h2>";
echo "Buddy Updated: {$buddy->_buddy_updated}";
echo "Buddy Created: {$buddy->_buddy_created}";

echo "<br>";
echo "<br>";

echo '<h2>Testing magic __get and __set</h2>';
unset($buddy->postal_code);
echo $buddy->display();

echo '<h2>Testing Address __construct with an array</h2>';
$buddy_2 = new Buddy(array(
  'buddy_name' => 'Jane',
  'buddy_age' => 21,
  'buddy_gender' => 'Female'
));
echo $buddy_2->display();

echo '<h2>Buddy __toString</h2>';
echo $buddy_2;

 ?>
