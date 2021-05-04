<?php
include_once __DIR__ . '/../dati.php';

header('Content-Type: application/json');

if (!empty($_GET)) {
  $author = $_GET['author'];
  $filteredDisks = [];

  foreach ($disks as $disk) {
    if (strpos($disk['author'], $author) !==false) {
      $filteredDisks[] = $disk;
    }
  }
    echo json_encode([
    'response' => $filteredDisks,
    'success' => true]);

} else {
  echo json_encode([
    'response' => $disks,
    'success' => true]);
}
?>
