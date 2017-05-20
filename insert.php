<?php
error_reporting(E_ERROR | E_PARSE);
$timeCheckOut1 = date("H:i", strtotime(str_replace(' ', '', $_POST['timepicker1'])));
$timeCheckOut2 = date("H:i", strtotime(str_replace(' ', '', $_POST['timepicker2'])));
$dateCheckIn = date('Y-m-d', strtotime($_POST['checkin']));
$dateCheckOut = date('Y-m-d', strtotime($_POST['checkout']));
$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 mysql_select_db("webcup", $con);

$sql="INSERT INTO booking (`checkin`, `checkout`,`checkintime`, `checkouttime`, npeople, nuniverse,`npackage`)
VALUES ('$dateCheckIn','$dateCheckOut','$timeCheckOut1','$timeCheckOut2','$_POST[people]','$_POST[universe]','$_POST[package]')";

$res = mysql_query($sql);

if (!mysql_query($sql,$con))

  {

  echo  'Error: ' . mysql_error();
	 
  } else {
		echo "success";
  }


mysql_close($con);

?>