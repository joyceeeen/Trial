<?php

$con = mysqli_connect('localhost','root','','trydb');

$condition = "";
if($_POST['stars'] > 0)
  if(strlen($condition) > 0)
    $condition .= "AND stars = ".$_POST['stars'];
  else
    $condition .= "stars = ".$_POST['stars'];

$minAndMax = explode(",",$_POST['priceRange']);
if(strlen($condition) > 0)
  $condition .= " AND price BETWEEN " . (int)$minAndMax[0] . " AND " . (int)$minAndMax[1];
else
  $condition .= "price BETWEEN " . (int)$minAndMax[0] . " AND " . (int)$minAndMax[1];

$values = explode(",", $_POST['ukie']);
$amenities = array('kitchen','billiard','wifi');
$final_amenities = "";
if(strlen($condition) > 0){
  $final_amenities = " AND ";
}

if(count($values) > 0){
  for ($i=0; $i < count($values)-1; $i++) {
    $final_amenities .= $amenities[$values[$i]] . " = 1 AND ";
  }
  $final_amenities .= "id > 0";
}

$condition .= $final_amenities;
$query = "SELECT * FROM presyo WHERE ".$condition."";

$res = mysqli_query($con,$query);

echo '<table>';

while($row = mysqli_fetch_assoc($res)){
    echo '<tr><td>' . $row['name'] . '&emsp;'. $row['stars'] .'&emsp;'.$row['reviews'].'</td></tr>';
}
echo '</table>';
//echo json_encode(array('result'=>$result));
 ?>
