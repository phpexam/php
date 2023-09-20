<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$con = mysqli_connect($servername, $username, $password, $dbname);

$query = "create table chirag (ID,Name,Age,City)";
$cmd;

echo "<center><table border=2>";
echo "<tr>";
echo "<td colspan='4'><center><h3>Employee Data</h3></center></td>";
echo "</tr>";

echo "<tr>";
echo "<td>EID</td>";
echo "<td>EName</td>";
echo "<td>Eage</td>";
echo "<td>Ecity</td>";
echo "</tr>";

if (isset($_POST['Select'])) {

    $query = "select * from employee";
    $cmd = mysqli_execute_query($con, $query);

    while ($set = mysqli_fetch_array($cmd)) {
        echo "<tr>";
        echo "<td>" . $set['ID'] . "</td>";
        echo "<td>" . $set['Name'] . "</td>";
        echo "<td>" . $set['Age'] . "</td>";
        echo "<td>" . $set['City'] . "</td>";
        echo "</tr>";
    }
} elseif (isset($_POST['Insert'])) {

    $id = $_POST['txtInsertID'];
    $Name = $_POST['txtInsertName'];
    $Age = $_POST['txtInsertAge'];
    $City = $_POST['txtInsertCity'];

    $query = "Insert into employee values($id,'$Name',$Age,'$City')";
    $cmd = mysqli_execute_query($con, $query);
} elseif (isset($_POST['Update'])) {

    $id = $_POST['txtUpdateID'];
    $Name = $_POST['txtUpdateName'];
    $Age = $_POST['txtUpdateAge'];
    $City = $_POST['txtUpdateCity'];

    $query = "update employee set Name='$Name',Age=$Age,City='$City' where ID=$id";
    $cmd = mysqli_execute_query($con, $query);
} elseif (isset($_POST['Delete'])) {

    $id = $_POST['txtDeleteID'];

    $query = "Delete from employee where ID=$id";
    $cmd = mysqli_execute_query($con, $query);
}
echo "<tr>";
echo "<form action='' method='post'>";
echo "<td colspan='4' ><center><button type='View' name='Select'>Veiw All Records</button></center></td>";
echo "</tr>";
echo "</tr>";

echo "<tr>";
echo "<td>ID:<input type='text' name='txtInsertID' size='1'></td>";
echo "<td>Name:<input type='text' name='txtInsertName' size='3'></td>";
echo "<td>Age:<input type='text' name='txtInsertAge' size='1'></td>";
echo "<td>City:<input type='text' name='txtInsertCity' size='3'>";
echo "<button type='submit' name='Insert'>Insert Records</button></td>";
echo "</tr>";

echo "<tr>";
echo "<td>ID:<input type='text' name='txtUpdateID' size='1'></td>";
echo "<td>Name:<input type='text' name='txtUpdateName' size='3'></td>";
echo "<td>Age:<input type='text' name='txtUpdateAge' size='1'></td>";
echo "<td>City:<input type='text' name='txtUpdateCity' size='3'>";
echo "<button type='submit' name='Update'>Update Records</button></td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2'>ID:<input type='text' name='txtDeleteID' size='1'></td>";
echo "<td colspan='2'><button type='submit' name='Delete'>Delete Records</button></td>";
echo "</tr>";

echo "</form>";

echo "</table></center>";


mysqli_close($con);
?>