<?php

// Define autoloder.
function __autoload($class_name) {
	include $class_name.'.php';
}
// require_once 'address.php';
// require_once 'database.php';

echo '<h2>Instantiating AddressResidence</h2>';
$address_residence = new AddressResidence();

// echo '<h2>Empty Address</h2>';
// echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Setting properties...</h2>';
$address_residence->street_address_1 = '555 Fake Street';
$address_residence->city_name = 'Townsville';
$address_residence->subdivision_name = 'State';
// $address->postal_code = '12345';
$address_residence->country_name = 'United States of America';
$address_residence->address_type_id = 1;
echo $address_residence;
echo '<tt><pre>'.var_export($address_residence,TRUE).'</pre></tt>';
// echo '<h2>Instantiating Address</h2>';
// $address = new Address;

// // echo '<h2>Empty Address</h2>';
// // echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

// echo '<h2>Setting properties...</h2>';
// $address->street_address_1 = '555 Fake Street';
// $address->city_name = 'Townsville';
// $address->subdivision_name = 'State';
// // $address->postal_code = '12345';
// $address->country_name = 'United States of America';
// $address->address_type_id = 1;
// echo $address;

// echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

// echo '<h2>Displaying address...</h2>';
// echo $address->display();

// echo '<h2>Testing magic __get and __set</h2>';
// unset($address->postal_code);
// echo $address->postal_code = '2564';
// echo $address->display();
// Now create a new address object with an array of properties and values.
echo '<h2>Testing Address __construct with an array</h2>';
// address object this time with an array is as a property
$address_2 = new Address(array(
	'street_address_1' => '123 Phony Ave',
	'city_name' => 'Villageland',
	'subdivision_name'=>'Region',
	// 'postal_code'=>'67890',
	'country_name'=>'Canada',
	'time_created'=>'123156'
	));
echo $address_2;


// echo '<tt><pre>' . var_export($address_2, TRUE) . '</pre></tt>';
// echo $address_2->display();

// echo '<h2>Address __toString</h2>';
// echo $address_2;

// echo '<h2>Displaying address types..</h2>';
// echo '<tt><pre>' . var_export(Address::$valid_address_types, TRUE) . '</pre></tt>';

// echo '<h2>Testing address type ID validation</h2>';
// for ($id = 0; $id <= 4; $id++) {
//   echo "<div>$id: ";
//   echo Address::isValidAddressTypeId($id) ? 'Valid' : 'Invalid';
//   echo "</div>";
// }
