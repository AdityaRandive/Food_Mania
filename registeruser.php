
<?php
   echo("register"); 
		
	   $host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="food"; // Database name
	$tbl_name="signup"; // Table name

	 mysql_connect("$host", "$username", "$password")or die("cannot connect");
	 mysql_select_db("$db_name")or die("cannot select DB");
	   

	 $fname=$_POST["fname"];
           $lname=$_POST["lname"];
           $addr=$_POST["addr"];	
    
           $city=$_POST["city"];
           $country=$_POST["country"];
            
           $email=$_POST["email"];
		$pass = $_POST["pass"];


	   $q2="INSERT INTO signup (fname,lname,email,addr,city,country,pass) values('$fname','$lname','$email','$addr','$city','$country','$pass')";
	   $result=mysql_query($q2);   
	    
	   if($result)
	   {
		echo "<h1><b><i>****************Successful******************</i></b></h1>";
		echo "<BR>";
		 echo "<a href='Home.html'>Back to Home page</a>";
	   }

	   else 
	   {
		echo "SOMETHING WENT WRONG...";
	   }    
?>