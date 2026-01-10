<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");

require_once __DIR__ . "/../config/dbcon.php";

$data = json_decode(file_get_contents("php://input"), true);

if (
    empty($data['name']) ||
    empty($data['email']) ||
    empty($data['phone']) ||
    empty($data['course'])
) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "All fields required"
    ]);
    exit;
}

$name   = trim($data['name']);
$email  = trim($data['email']);
$phone  = trim($data['phone']);
$course = trim($data['course']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid email"
    ]);
    exit;
}

$stmt = $conn->prepare(
    "INSERT INTO bookdemo (name, phone, email, selected) VALUES (?, ?, ?, ?)"
);
$stmt->bind_param("ssss", $name, $email, $phone, $course);

if ($stmt->execute()) {
    echo json_encode([
        "status" => "success",
        "message" => "Demo booked successfully"
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Server error"
    ]);
}
