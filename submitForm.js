document.addEventListener("DOMContentLoaded", function () {
    let diamondSelect = document.getElementById("diamond");
    let priceInput = document.getElementById("price");
    let rawPriceInput = document.getElementById("raw_price");

    diamondSelect.addEventListener("change", function () {
        let selectedOption = this.options[this.selectedIndex];
        let price = selectedOption.getAttribute("price");

        if (price) {
            rawPriceInput.value = price;  // Set nilai raw_price yang akan dikirim ke PHP
            priceInput.value = "Rp " + new Intl.NumberFormat('id-ID').format(price);
        } else {
            rawPriceInput.value = "0";  // Default ke 0 jika tidak ada harga
            priceInput.value = "Rp 0";
        }
    });
});
