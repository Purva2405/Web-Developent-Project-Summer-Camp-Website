<?php
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$email = $_POST['email'];
$t3 = $_POST['t3'];
$campname = $_POST['campname'];
$cardno = $_POST['cardno'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Wbproject";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO payment (t1, t2, email, t3, campname, cardno) VALUES ('$t1','$t2','$email','$t3','$campname','$cardno')";
if ($conn->query($sql) === TRUE)
{
// echo header('Location:received.html');
} else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<html>
<style type="text/css">
body {
	background-image: url(img1.jpg);
	background-size: cover;
 }
 .container{
	
	color: white;
	position: relative;
	font-size: 25px;
}
.overlay{
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: #078277;
	opacity: 0.40;
}
td, th {
  border: 5px solid #dddddd;
  text-align: left;
  padding: 8px;
  font-size: 25px;
}
.camp-btn-4 {
  background: linear-gradient(to right, #16a34a, #059669);
  color: white;
  padding: 20px 40px;
  border-radius: 20px;
  border: 4px solid #14532d;
  border-bottom-width: 8px;
  box-shadow: 0 15px 30px rgba(0,0,0,0.25);
  font-size: 22px;
  display: inline-flex;
  justify-content: center;
  gap: 12px;
  cursor: pointer;
  transition: 0.2s;
  text-decoration: none;
  font-family: cursive;
}

.camp-btn-4:hover {
  transform: scale(1.05);
  background: linear-gradient(to right, #15803d, #047857);
}

</style>
	<head><title>Customer data</title></head>
	<body>
		<form action="ReConn.php" method="POST">
			<div class="overlay"></div>
			<div class="container">


			<a href="MainPage2.html" class="camp-btn-4">
  		<span class="label">Return to Camp</span>
  		</a>

			<?php 

			echo "<center><h1>Your Booking Details: <br><table><tr><th> Your Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>";
			echo "<th>Email-id&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>";
			echo "<th>Persons</th>";
			echo "<th>Camp Name</th></tr>";
			echo "<tr><td>$t1 $t2</td>";
			echo "<td>$email</td>";
			echo "<td>$t3</td>";
			echo "<td>$campname</td></tr>";
			?>
			
			</div>
		</form>

	</body>
</html>