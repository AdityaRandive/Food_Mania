

<?php


$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("food", $con);


	$sql="INSERT INTO signup (fname, lname,email,addr,city,country)

	VALUES

	('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[addr]','$_POST[city]','$_POST[country]')";



if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }



 
mysql_close($con)

?>

