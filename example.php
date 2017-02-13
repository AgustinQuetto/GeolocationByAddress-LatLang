<form>
  Address:<br>
  <input type="text" name="address"><br>
  <input type="submit" name="send">
</form>

<?php

require_once 'geocode.php';

if (isset($_GET['address'])) { 

// define the address and set sensor to false
$opt = array (
	'address' => urlencode($_GET['address']),
	'sensor'  => 'false'
);

// now simply call the function
$result = getLatLng($opt);

// if status was successful, then print the lat/lon ?
if ($result['status']) {
  
   echo '<pre>';
   print_r($result);
   echo '</pre>';
   print_r($result['lat']);
}
}