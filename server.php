<?php
$dischi_json = file_get_contents("./data/dischi.json");

$dischi = json_decode($dischi_json);

header("Content-Type: application/json");
echo json_encode($dischi);
?>