<html lang="en">
 <head>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <link rel="stylesheet" href="beli.css">
  
  <title>
   Free Fire Top-up
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-purple-900 text-white">
  <div class="container mx-auto p-4">
   <div class="flex flex-col lg:flex-row">
    <!-- Left Section -->
    <div class="lg:w-1/3 p-4">
     <img alt="Free Fire characters" class="w-full mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/-sRrlGB66seRHlaw2j199v4R_0z5I8TisTrELENkLac.jpg" width="600"/>
     <h1 class="text-2xl font-bold mb-4">
      Free Fire Top-up
     </h1>
     <p class="mb-4">
      Unduh Free Fire sekarang!
      Codashop menawarkan top up Free Fire yang mudah, aman, dan instan.

Pembayaran tersedia melalui pulsa (Telkomsel, Indosat, Tri, XL, Smartfren), Codacash, QRIS, GoPay, OVO, DANA, ShopeePay, LinkAja, Krevido, Alfamart, Indomaret, DOKU, Bank Transfer and Card Payments.

Cukup masukkan user ID anda, Pilih jumlah Diamond yang ingin anda beli, pilih metode pembayaran yang anda inginkan, selesaikan pembayaran, dan Diamonds anda akan segera ditambahkan ke akun Free Fire.
     </p>
    </div>
    <!-- Right Section -->
    <div class="lg:w-2/3 p-4">
  
      <div class="bg-white text-purple-900 p-4 rounded">
       <h2 class="text-xl font-bold mb-2">
       ISI LEBIH BANYAK DIAMOND LEBIH BAIK
       </h2>
    <div class="bg-white text-purple-900 p-4 rounded border">
  <div class="flex justify-between items-center mb-2">

  </div>

<form id="topupForm" action="process.php" method="POST">
    <input type="hidden" id="raw_price" name="raw_price" value="0"> <!-- Hidden input for raw price -->

    <div class="bg-white text-purple-900 p-4 rounded mb-4">
        <h2 class="text-xl font-bold mb-2">Masukkan Player ID</h2>
        <input id="player_id" name="player_id" class="w-full p-2 border rounded mb-2" placeholder="Masukkan Player ID" type="text" required/>
    </div>

    <div class="bg-white text-purple-900 p-4 rounded">
        <h2 class="text-xl font-bold mb-2">Pilih Jumlah Diamond</h2>
        <select id="diamond" name="diamond" class="w-full p-2 border rounded mb-2" required>
          <option value="50" price="5000">50 Diamond</option>
          <option value="100" price="10000">100 Diamond</option>
          <option value="200" price="20000">200 Diamond</option>
          <option value="500" price="50000">500 Diamond</option>
          <option value="1000" price="100000">1000 Diamond</option>
          <option value="2000" price="200000">2000 Diamond</option>
          
        </select>
        <label for="price" class="block text-lg font-semibold mt-2">Harga:</label>
        <input id="price" name="price" class="w-full p-2 border rounded bg-gray-200" type="text" readonly value="Rp 0">
        

    
        <label for="payment_method" class="block text-lg font-semibold mt-2">Metode Pembayaran:</label>
        <select id="payment_method" name="payment_method" class="w-full p-2 border rounded mb-2" required>
            <option value="">Pilih metode pembayaran</option>
            <option value="pulsa">Pulsa</option>
            <option value="codacash">Codacash</option>
            <option value="qris">QRIS</option>
            <option value="gopay">GoPay</option>
            <option value="ovo">OVO</option>
            <option value="dana">DANA</option>
            <option value="shopeepay">ShopeePay</option>
            <option value="linkaja">LinkAja</option>
            <option value="bank_transfer">Bank Transfer</option>
            <option value="card_payment">Kartu Kredit</option>
        </select>
        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4">Top Up</button>
   </div>
  </div>
  <script src="submitForm.js"></script> <!-- Link to the JavaScript file -->
</body>
