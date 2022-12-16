<?php
$dischi_string = file_get_contents('dischi.json');
$dischi = json_decode($dischi_string, true);

header("Content-Type: application/json");
echo json_encode($dischi);
