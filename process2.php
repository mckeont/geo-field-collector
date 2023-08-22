<?php
$servername = "127.0.0.1:3306";
$database = "u582777506_MgAhr";
$username = "u582777506_S93Kd";
$password = "tm-21-MP";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully. ";
if(isset($_POST['save']))
{
// Insert to database  
   $name = $_POST['name'];
   $location = $_POST['location'];
   $latitude = $_POST['latitude'];
   $longitude = $_POST['longitude'];
   $comment = $_POST['comment'];
   $cdate = $_POST['cdate'];
$sql = "INSERT INTO lighthouse_location(name, location, latitude, longitude, comment, cdate)
values ('$name', '$location', '$latitude', '$longitude', '$comment', '$cdate')";
if (mysqli_query($conn, $sql)) {
      echo "Submission accepted.";
}
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
