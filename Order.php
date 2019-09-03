<?php
$host="localhost";
$username="root";
$password="";
$dbname="hotel";

$con=mysql_connect($host,$username,$password,$dbname);
$con2=mysql_select_db("$dbname",$con);

if($con2){
	echo"ok ";
}
else
{
	echo"unable to connect";
}

$sql="INSERT INTO booking(name,email,country,address,type,code,date)
VALUES
('$_POST[name]','$_POST[email]','$_POST[country]','$_POST[address]','$_POST[type]','$_POST[code]','$_POST[date]')";

if(mysql_query($sql,$con)){
	echo "thank you";
}
mysql_close($con)

?>