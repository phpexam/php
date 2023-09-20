<?php
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
$pid=$_GET['prid'];
$sql="select * from person where pid=$pid";
$cmd=mysqli_query($con,$sql) or die(mysqli_error());
$rset=mysqli_fetch_array($cmd);
?>
<FORM NAME="formupdate" ACTION="Update3.php" METHOD="post">
<table border=0>
<tr>
<td colspan=2>
<center><h3>Updating Person Data</h3></center></td>
</tr>
<tr>
<td><B>Person Name</B></td>
<td><B>Age</B></td>
</tr>
<tr>
<td>
<INPUT TYPE="hidden" NAME="hdpid" VALUE="<?php echo $pid;?>"/>
<INPUT TYPE="text" NAME="txtpname" VALUE="<?php echo $rset['pname'];?>"/>
</td>
<td>
<INPUT TYPE="text" NAME="txtage" VALUE="<?php echo $rset['age'];?>"/>
</td>
</tr>
<tr>
<td>
<center>
<INPUT TYPE="submit" NAME="btnupdate" VALUE="UPDATE"/>
</center>
</td>
</tr>
</table>
</FORM>
<?php
mysqli_close($con);
?>