<?php
if ($_SERVER && isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $gaji = isset($_POST['gaji']) ? $_POST['gaji'] : 0;
    $pengeluaran = isset($_POST['pengeluaran']) ? $_POST['pengeluaran'] : 0;
    $thrbonus = isset($_POST['thrbonus']) ? $_POST['thrbonus'] : 0;
    $nikah = isset($_POST['nikah']) && $_POST['nikah'] === 'Y' ? true : false;
    $tanggungan = isset($_POST['tanggungan']) ? $_POST['tanggungan'] : 0;

    // Masukkan fungsi perhitungan pajak di sini
    // Misalnya:
    $pajak = calculateTax($gaji, $pengeluaran, $thrbonus, $nikah, $tanggungan);

    // Tampilkan hasil perhitungan
    echo '<div class="result">';
    echo '<h3>Hasil Perhitungan:</h3>';
    echo '<p>Pajak per tahun: ' . number_format($pajak) . '</p>';
    echo '<p>Pajak per bulan: ' . number_format($pajak/12) . '</p>';
    echo '</div>';
} else {
    echo "Metode permintaan tidak valid.";
}

// Fungsi untuk menghitung pajak
function calculateTax($gaji, $pengeluaran, $thrbonus, $nikah, $tanggungan) {
    // Masukkan logika perhitungan pajak di sini
    // ...
    // Misalnya:
    $pajak = $gaji * 0.1; // Contoh sederhana: pajak 10% dari gaji
    return $pajak;
}
?>
