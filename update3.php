<?php
$pname=$_POST['txtpname'];
$page=$_POST['txtage'];
$pid=$_POST['hdpid'];
$con=mysqli_connect("localhost","root","","demo") or die(mysql_error());
$sql="Update person
set pname='$pname',
age=$page
where pid=$pid";
$cmd=mysqli_query($con,$sql) or die(mysqli_error());
echo "Record Successfully Updated....";
echo "<BR>";
echo "<a href='update.php'>View Result</a>";
mysqli_close($con);
?>