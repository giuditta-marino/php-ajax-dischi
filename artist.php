<?php
header('Content-Type: application/json');

include 'dati.php';

$inputSearch = $_GET['artist'];

$filteredDisks = [];

for ($i=0; $i < count($disks); $i++) {
  if ($disks[$i]['author'] == $inputSearch) {
    $filteredDisks[] = $disks[$i];
  }
}
echo json_encode($filteredDisks);

var_dump($inputSearch);
 ?>
