<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exp15";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
// $sql = "INSERT INTO employee (empno, empname, salary)VALUES (101,'Pooja',50000)";
// if ($conn->query($sql) === TRUE)
// {
// echo "New record created";
// } else
// {
// echo "Error: " . $sql . "<br>" . $conn->error;
// }

$sql = "SELECT t1, t2, email, t3, cardno FROM payment";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
echo "
<br>Your Booking Details: "  " First Name: " . $row["t1"]. " Last Name: " .$row["t2"] ."Email-id: " .$row["email"] ."How many are there Persons" $row["t3"]"<br>";
}
} else
{
echo "0 results";
}
// $sql = "DELETE FROM employee WHERE empno=101";
// if ($conn->query($sql) === TRUE) {
// echo "Record deleted successfully";
// } else {
// echo "Error deleting record: " . $conn->error;
// }
$conn->close();
?>