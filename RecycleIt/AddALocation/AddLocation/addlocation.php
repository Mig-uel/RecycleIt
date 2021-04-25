<?php
session_start();
ini_set('max_execution_time', 3000);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Register";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully";

$address = $_POST['address'];
$location = $_POST['lName'];
$name = $_POST['pName'];
$date = $_POST['tDate'];
$plastic = $_POST['plastic'];
$cans = $_POST['cans'];
$glass = $_POST['glass'];

echo "<br />";
echo $address;
echo "<br />";
echo $location;
echo "<br />";
echo $name;
echo "<br />";
echo $date;
echo "<br />";
echo $plastic;
echo "<br />";
echo $cans;
echo "<br />";
echo $glass;

$sql = "INSERT INTO Info (address, lName, nPerson, tDate, plastic, cans, glass) VALUES ('$address', '$location', '$name', '$date', '$plastic', '$cans', '$glass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
