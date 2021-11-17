<?php
session_start();
ini_set('max_execution_time', 3000);

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "recycleit";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}
// echo "Connected successfully";
//
// if (!mysqli_select_db($conn, $dbName)){
//     $sql = "CREATE DATABASE ".$dbName;
//     if ($conn->query($sql) === TRUE) {
//         echo "Database created successfully";
//     }else {
//         echo "Error creating database: " . $conn->error;
//     }
// }


$address = $_POST['address'];
$location = $_POST['lName'];
$name = $_POST['pName'];
$date = $_POST['tDate'];
$plastic = $_POST['plastic'];
$cans = $_POST['cans'];
$glass = $_POST['glass'];

$sql = "INSERT INTO locations (address, centerName, name, date, plastic, cans, glass) VALUES ('$address', '$location', '$name', '$date', '$plastic', '$cans', '$glass')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Location Added</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    p {
    color: white;
    }
    body {
      background-image: url("https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1652&q=80");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
    }
    .row {
      position: relative;
      text-align: center;
      height: 100vh;
    }
    .row .col-md-12 {
      height: 40px;
      top: 40%;
    }
    h1 {
      padding-bottom: 20px;
      color: whitesmoke;
    }
  </style>

</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1>Thank you!</h1>
        <p>Thank you for submitting a location.</p>
        <a href="/RecycleIt"><button type="button" class="btn btn-primary">Return Home</button></a>
      </div>
    </div>
  </div>
</body>
</html>
