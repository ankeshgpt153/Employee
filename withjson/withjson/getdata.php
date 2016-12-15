<?php

//$cur = new user();
$url="http://contactdemoapp.azurewebsites.net/getContacts";
//header('Content-Type: application/json');
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=json_decode(curl_exec($ch),true);
// Closing
curl_close($ch);
//print_r(array_values($result));
foreach ($result as $var) {
	print "<pre>";
    print_r(array_values($var));
	print "</pre>";
}




?>