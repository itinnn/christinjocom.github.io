<?php
session_start();
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if ($password == $user['password']) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Login successful'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Invalid password'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('User not found'); window.location='login.php';</script>";
    }
}
?>