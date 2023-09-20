<?php
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
$sql="select * from person";
$cmd=mysqli_query($con,$sql) or die(mysqli_error($con));
echo "<table border=1>
<tr>
<td colspan=3><center>
<h3>Person Data</center></h3></td>
</tr>
<tr>
<td>Person ID</td>
<td>Person Name</td>
<td>Person Age</td>
</tr>";
while($rset=mysqli_fetch_array($cmd))
{
echo "<tr>";
echo "<td>".$rset['pid']."</td>";
echo "<td>".$rset['pname']."</td>";
echo "<td>".$rset['age']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>