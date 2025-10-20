<?php
header('Content-Type: application/json');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid or missing JSON input."
    ]);
    exit;
}

$name = trim($data['name'] ?? 'Guest');

$response = [
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
];

echo json_encode($response);
?>

