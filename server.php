<?php

$dischi = file_get_contents('./dischi.json');
$dischiList = json_decode($dischi);

header("Content-Type: application/json");
echo json_encode($dischiList);