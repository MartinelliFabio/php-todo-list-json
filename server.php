<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");

$file_text = file_get_contents('./data.json');
$list = json_decode($file_text); 

header('Content-Type: application/json');
echo json_encode($list);
    