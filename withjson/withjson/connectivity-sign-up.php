<?php
include_once ("user.php");

$fullname = $_POST['name']; 
 $email = $_POST['email']; 
 $contact = $_POST['con'];
 $detail = new user;
// header('Content-Type: application/json');
 $detail->setName($fullname );
$detail->setEmail( $email);
$detail->setContact( $contact );

 $json = json_encode($detail);
 $url = "http://contactdemoapp.azurewebsites.net/registerContact";

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$json);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$response=curl_exec($ch);
curl_close($ch);

 echo "data send";
 ?>
 
<input type="button" value="getdata" class="getdatabutton" id="btngetdata" 
onClick="document.location.href='getdata.php'" />
 
