<?php 
$servername="localhost";
$username="root";
$pass="";
$dbname="demo";
$tbname="person";
$con=mysqli_connect($servername,$username,$pass,$dbname) or die (mysqli_connect_error());

//$sql="create table person(pid int(3) primary key ,pname varchar(20) , age int(2))";
//$sql="INSERT INTO $tbname (`pid`, `pname`, `age`) VALUES ('2', 'chetan', '18');";
$sql="INSERT INTO $tbname (`pid`, `pname`, `age`) VALUES ('3', 'ritik', '18');";
$cmd=mysqli_query($con,$sql) or die (mysqli_error($con));

echo " Record Successfully ";
mysqli_close($con);
?>