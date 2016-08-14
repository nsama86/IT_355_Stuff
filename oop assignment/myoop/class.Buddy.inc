<?php

/* Fake Buddies and their attributes*/

class Buddy {
  //Buddy name
  public $buddy_name;

  //Buddy Age
  public $buddy_age;

  //Buddy Gender
  protected $_buddy_gender;

  //Protected information of buddy
  protected $_buddy_updated;
  protected $_buddy_created;

  /**
 * Constructor.
 * @param array $data Optional array of property names and values.
 */
function __construct($data = array()) {
  $this->_buddy_created = time();

  // Ensure that the Address can be populated.
  if (!is_array($data)) {
    trigger_error('Unable to construct address with a ' . get_class($name));
  }

  // If there is at least one value, populate the Address with it.
  if (count($data) > 0) {
    foreach ($data as $name => $value) {
      // Special case for protected properties.
      if (in_array($name, array(
        'buddy_created',
        'buddy_updated',
      ))) {
        $name = '_' . $name;
      }
      $this->$name = $value;
    }
  }
}

/**
 * Magic __get.
 * @param string $name
 * @return mixed
 */
function __get($name) {
  // Postal code lookup if unset.
  if (!$this->_buddy_gender) {
    $this->_buddy_gender = $this->_buddy_gender_guess();
  }

  // Attempt to return a protected property by name.
  $protected_property_name = '_' . $name;
  if (property_exists($this, $protected_property_name)) {
    return $this->$protected_property_name;
  }

  // Unable to access property; trigger error.
  trigger_error('Undefined property via __get: ' . $name);
  return NULL;
}

/**
 * Magic __set.
 * @param string $name
 * @param mixed $value
 */
function __set($name, $value) {
  // Allow anything to set the postal code.
  if ('buddy_gender' == $name) {
    $this->$name = $value;
    return;
  }

  // Unable to access property; trigger error.
  trigger_error('Undefined or unallowed property via __set(): ' . $name);
}

/**
 * Magic __toString.
 * @return string
 */
function __toString() {
  return $this->display();
}

/**
 * Guess the postal code given the subdivision and city name.
 * @todo Replace with a database lookup.
 * @return string
 */
protected function _buddy_gender_guess() {
  return 'LOOKUP';
}

  //Used to display our variables
  function display() {
    $output = '';

    $output .= 'Name: ';
    $output .= $this->buddy_name;
    $output .='<br>Age: '.$this->buddy_age;
    $output .='<br>Gender: '.$this->buddy_gender;

    //Used to return our display
    return $output;
  }

}

 ?>
