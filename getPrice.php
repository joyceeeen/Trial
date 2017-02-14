<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$min = $_POST['minValue'];
$max = $_POST['maxValue'];
$data = array();
$sql = "SELECT * FROM presyo WHERE price BETWEEN '$min' and '$max'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row['name'];
  }
  echo json_encode($data);
} else {
  echo "No Results";
}
mysqli_close($conn);
?>
