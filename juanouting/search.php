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
$search = $_GET['term'];
$sql = "SELECT * FROM presyo WHERE name LIKE '%".$search."%'";
$result = mysqli_query($conn, $sql);
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row['name'];
  }
  echo json_encode($data);

 mysqli_close($conn);
?>
