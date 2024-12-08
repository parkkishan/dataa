<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, phone=?, dob=?, gender=? WHERE id=?");
    $stmt->bind_param("sssssi", $name, $email, $phone, $dob, $gender, $id);

    if ($stmt->execute()) {
        echo "User info updated successfully.";
    } else {
        echo "Update failed.";
    }
}
?>
