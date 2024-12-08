<?php
require_once 'database.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usn = $_POST['usn'];
    
    // Check if USN exists in database
    $query = $pdo->prepare("SELECT * FROM users WHERE usn = ?");
    $query->execute([$usn]);
    
    if ($query->rowCount() > 0) {
        echo 'valid';
    } else {
        echo 'invalid';
    }
} else {
    echo 'invalid';
}
?>
