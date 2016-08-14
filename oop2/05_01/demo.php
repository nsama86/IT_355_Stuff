<?php

require 'class.Address.inc';
require 'class.Database.inc';

echo '<h2>Instantiating Address</h2>';
$address = new Address;

echo '<h2>Setting properties...</h2>';
$address->street_address_1 = '259 James Street';
$address->city_name = 'Kent';
$address->subdivision_name = 'WA';
$address->country_name = 'United States of America';
$address->address_type_id = 1;
echo $address;

echo '<h2>Testing Address __construct with an array</h2>';
$address_2 = new Address(array(
  'street_address_1' => '159 Allen Ave',
  'city_name' => 'Santa Monica',
  'subdivision_name' => 'Bob Region',
  'country_name' => 'Brazil',
));
echo $address_2;
