<?php
include_once __DIR__ . '/./database.php';

$response = [
    'success' => true,
    'response' => $discs
];

header('Content-Type: application/json');

echo json_encode($response);