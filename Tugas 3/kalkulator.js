function hitung(operator) {
    let bil1 = parseFloat(document.getElementById("bil1").value);
    let bil2 = parseFloat(document.getElementById("bil2").value);
    let hasil;

    if (isNaN(bil1) || isNaN(bil2)) {
        alert("Harap masukkan angka yang valid!");
        return;
    }

    switch (operator) {
        case '+':
            hasil = bil1 + bil2;
            break;
        case '-':
            hasil = bil1 - bil2;
            break;
        case '*':
            hasil = bil1 * bil2;
            break;
        case '/':
            if (bil2 === 0) {
                alert("Tidak bisa membagi dengan nol!");
                return;
            }
            hasil = bil1 / bil2;
            break;
    }

    document.getElementById("hasil").value = hasil;
}
