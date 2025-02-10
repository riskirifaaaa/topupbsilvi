<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player_id = $_POST['player_id'];
    $diamond = $_POST['diamond'];
    $price = $_POST['price'];

    echo "<h2>Detail Pembelian</h2>";
    echo "Player ID: " . htmlspecialchars($player_id) . "<br>";
    echo "Jumlah Diamond: " . htmlspecialchars($diamond) . "<br>";
    echo "Total Harga: " . htmlspecialchars($price);
} else {
    echo "Invalid request!";
}
?>
