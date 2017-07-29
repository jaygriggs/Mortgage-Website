<?php
  $sql = mysqli_connect("localhost", "root", "drupal8", "mortgages");
  $query = "SELECT rate FROM rates ORDER BY `id` DESC LIMIT 10";
  $data = mysqli_query($sql, $query);
  $i=0;
  while($row = mysqli_fetch_array($data)) {
     $rows[$i]=array($row['rate']);
     $i++;
  }
  echo json_encode($rows);
?>