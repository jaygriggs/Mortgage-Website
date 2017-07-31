<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'drupal8');
define('DB_NAME', 'mortgages');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = ("SELECT rate, date_time_stamp FROM rates ORDER BY `id` DESC LIMIT 10");


//execute query
 $data = mysqli_query($mysqli, $query);
  $i=0;
  while($row = mysqli_fetch_array($data)) {
  //paste new
$rows[$i]= array(strtotime($row['date_time_stamp']) * 1000,(float)$row['rate']);
	$i++;
  }

echo json_encode($rows);

//close connection
$mysqli->close();


?>
