<?php

$host="mysql.hostinger.in"; // Host name 
$username="u102016086_root"; // Mysql username 
$password="youthrocker"; // Mysql password 
$db_name="u102016086_cont"; // Database name 
$tbl_name="contact"; // Table name 

// Connect to server and select database.
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Insert data into mysql 
$sql="INSERT INTO contact (name, email, message)
VALUES('".$_POST["YOUR_NAME"]."', '".$_POST["YOUR_EMAIL"]."', '".$_POST["YOUR_MESSAGE"]."')";
$result=mysql_query($sql,$con);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
header('Location: contact.html');
    exit;
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>