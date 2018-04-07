<?php

$host="localhost:3306";

$username="anubha";

$password="idomybest";

$db_name="Anubha";

$tbl_name="Record";

$conn = mysql_connect("$host", "$username", "$password")or die("cannot connect");

mysql_select_db("$db_name")or die("cannot select DB");

//$myusername=$_POST['usr'];

//$mypassword=$_POST['pwd'];

//$myusername = stripslashes($myusername);

//$mypassword = stripslashes($mypassword);

//$myusername = mysql_real_escape_string($myusername);

//$mypassword = mysql_real_escape_string($mypassword);

//$sql="select * from $tbl_name where passwd='$mypassword' AND name='$myusername'";

//$result=mysql_query($sql,$conn);

//$count=mysql_num_rows($result);

/*if ($count == 1)
{
//echo ":) :) LOGIN SUCCESS :) :) ";
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
      echo "NAME :{$row['name']}  <br> ".
         "PASSWORD : {$row['passwd']} <br> ".
         "--------------------------------<br>";
   }

}

else 
{
echo ":( :( AUTHETICATION FAILURE :( :( ";
}*/


   
   $sql = 'SELECT * FROM Record';
  // mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Name :{$row['name']}  <br> ".
         "City : {$row['city']} <br> ".
         "Address : {$row['address']} <br> ".
         "Phone Number : {$row['phone']} <br> ".
         "Email : {$row['email']} <br> ".
         "Blood Group : {$row['bg']} <br> ".
         "--------------------------------<br>";
   }

 
?>
