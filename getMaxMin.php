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

$sql = "SELECT MAX(price) as max, MIN(price) as min FROM presyo";
$result = mysqli_query($conn, $sql);
$data = array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    array_push( $data,array('max' => $row['max'],'min' => $row['min'] ));
  }
  echo json_encode($data);
} else {
  echo "failed";
}
mysqli_close($conn);
?>
