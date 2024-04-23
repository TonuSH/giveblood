<?php
//  database connection
include 'connection.php';


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//  form data
$f_name = $_POST['f_name'] ?? '';
$l_name = $_POST['l_name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? ''; 
$phone = $_POST['phone'] ?? '';
$gender = $_POST['gender'] ?? '';
$b_group = $_POST['b_group'] ?? '';
$donated = $_POST['donated'] ?? '';

// SQL query 
$sql = "INSERT INTO users (f_name, l_name, email, password, phone, gender, b_group, donated) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param('ssssssss', $f_name, $l_name, $email, $password, $phone, $gender, $b_group, $donated);

if ($stmt->execute()) {
    header("Location: login.php?success_message=Registered successfully.");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
