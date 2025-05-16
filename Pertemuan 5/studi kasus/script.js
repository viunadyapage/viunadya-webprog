function hitung() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let operator = document.getElementById("operator").value;
    let hasil;

    if (isNaN(num1) || isNaN(num2)) {
        hasil = "Masukkan angka yang valid!";
    } else if (operator === "/" && num2 === 0) {
        hasil = "Tidak bisa bagi 0";
    } else {
        hasil = eval(num1 + operator + num2);
    }

    document.getElementById("hasil").innerText = hasil;
}
