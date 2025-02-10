<?php
include 'koneksi.php';

if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $chekemail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($chekemail);
    if ($result->num_rows > 0) {
        echo "Email Sudah Terdaftar!";
    } else {
        $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("location:topup.html");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = md5($_POST['password'] ?? '');

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("location:topup.html");
        exit();
    } else {
        echo "<h1><center>Password Salah Atau Email Tidak Terdaftar";
    }
}
?>
