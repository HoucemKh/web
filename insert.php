<html>

<body>
<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 mysql_select_db("webcup", $con);

$sql="INSERT INTO booking (npeople, nuniverse)

VALUES

('$_POST[people]','$_POST[universe]')";

$res = mysql_query($sql);

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

mysql_close($con)

?>

</body>

</html>