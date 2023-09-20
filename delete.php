<?php
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
$sql="select * from person";
$cmd=mysqli_query($con,$sql) or die(mysqli_error($con));
echo "<table border=1>
<tr>
<td colspan=4>
<center><h3>Person Data</center></h3>
</td>
</tr>
<tr>
<td>Person ID</td>
<td>Person Name</td>
<td>Person Age</td>
<td>Delete</td>
</tr>";
while($rset=mysqli_fetch_array($cmd))
{
?>
<tr>
<td><?php echo $rset['pid'];?></td>
<td><?php echo $rset['pname'];?></td>
<td><?php echo $rset['age'];?></td>
<td>
<a href="Delete2.php?prid=<?php echo $rset['pid'];?>">Delete</a>
</td>
</tr>
<?php
}
mysqli_close($con);
?>
</table>
</center>