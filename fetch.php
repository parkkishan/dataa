<?php
include 'database.php';

// Fetch a single user if id is specified
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    echo json_encode($data);
    exit;
}

// Fetch all users from database
$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->get_result();

// Output all rows
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['dob']}</td>
        <td>{$row['gender']}</td>
        <td>
            <button class='update-btn' data-id='{$row['id']}'>Edit</button>
            <button class='delete-btn' data-id='{$row['id']}'>Delete</button>
        </td>
    </tr>";
}
?>
