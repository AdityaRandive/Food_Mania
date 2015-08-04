<html>

<body>

<?php


$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("food", $con);

$sql1="create table signup(create table signup(fname char(20),lname char(20),email char
(20),addr char (40),city char(20),country char(20))";

// Execute query
if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

else
  {
  echo "table created: " ;
  }
 

$sql="INSERT INTO SIGNUP VALUES (fname, lname ,email , addr ,city,country)

VALUES

('$_POST[FirstName]','$_POST[LastName]','$_POST[FromEmailAddress]','$_POST[StreetAddress1]','$_POST[City]','$_POST[Country]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 
mysql_close($con)

?>

</body>

</html>