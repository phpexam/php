
<?php
$pid=$_POST['txtpid'];
$pname=$_POST['txtpname'];
$page=$_POST['txtpage'];
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
$sql="insert into person values($pid,'$pname',$page)";
$cmd=mysqli_query($con,$sql) or die(mysqli_error($con));
echo "<BR>Record Successfully Inserted...";
mysqli_close($con);
?>