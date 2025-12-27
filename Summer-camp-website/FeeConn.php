<?php
$name = $_POST['name'];
$email = $_POST['email'];
$experience = $_POST['experience'];
$trouble = $_POST['trouble'];
$improvement = $_POST['improvement'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Wbproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO feedback (name, email, experience, trouble, improvement) VALUES ('$name','$email','$experience','$trouble','$improvement')";
if ($conn->query($sql) === TRUE)
{
echo header('Location:MainPage.html');
} else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}