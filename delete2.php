<?php
$pid=$_GET['prid'];
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
$sql="delete from person where pid=$pid";
$cmd=mysqli_query($con,$sql);
if($cmd==TRUE)
{
echo "Successfully Deleted.....<BR>";
echo "<a href='delete.php'>
Back to main page</a>";
}
else
{
echo "Error during delete....";
}
?>