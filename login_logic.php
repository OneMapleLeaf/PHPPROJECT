<?php
session_start();
include "db.php";
$message = "";
$user = '';
$password = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $connection->prepare("select * from user_info where user_name = ? and user_pass = ?");
        $stmt->bind_param("ss", $user, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        // Replace this with your actual validation logic
        if ($row) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
            exit();
        } else {
            $message = 'Invalid username or password';
        }
        $stmt->close();
    }
}
?>