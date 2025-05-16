document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formNilai");
    const hasil = document.getElementById("hasil");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        
        const nim = document.getElementById("nim").value.trim();
        let nilai = parseInt(document.getElementById("nilai").value.trim());
        let hurufMutu = "";

        // Validasi input agar ada nilai
        if (nim === "" || isNaN(nilai)) {
            hasil.textContent = "Harap isi NIM dan nilai dengan benar!";
            return;
        }

        if (nilai < 0 || nilai > 100) {
            hasil.textContent = "Nilai tidak valid!";
            return;
        }

        // nentukan huruf mutu A-E
        if (nilai >= 80) {
            hurufMutu = "A";
        } else if (nilai >= 70) {
            hurufMutu = "B";
        } else if (nilai >= 60) {
            hurufMutu = "C";
        } else if (nilai >= 50) {
            hurufMutu = "D";
        } else {
            hurufMutu = "E";
        }

        hasil.textContent = `NIM: ${nim}, Huruf Mutu: ${hurufMutu}`;
    });
});
