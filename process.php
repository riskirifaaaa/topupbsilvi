<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "topupdb";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah data dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player_id = $_POST['player_id'];
    $diamond = $_POST['diamond'];
    $payment_method = $_POST['payment_method']; // Retrieve the payment method


    // Use the raw price value directly
    $price = intval($_POST['raw_price']); 


    // Simpan ke database
    $sql = "INSERT INTO transactions (player_id, diamond, price, payment_method) VALUES ('$player_id', '$diamond', '$price', '$payment_method')"; // Include payment method


    if ($conn->query($sql) === TRUE) {
        echo "<h1><center>Transaksi Berhasil!</h2>";
        echo "<center><h2>Player ID: " . htmlspecialchars($player_id) . "<br>";
        echo "<center>Jumlah Diamond: " . htmlspecialchars($diamond) . "<br>";
        echo "<center>Met Pembayaran: " . htmlspecialchars($payment_method) . "<br>"; // Display the payment method
        echo "<center>Total Harga: Rp " . number_format($price, 0, ',', '.'). "<br>","<br>";
        echo "Terimakasi Pesanan Sedang Di Proses";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request!";
}

$conn->close();
?>
