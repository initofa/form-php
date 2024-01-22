<?php
// Cek apakah form pendaftaran telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Ambil data dari form pendaftaran
    $fullname = isset($_GET["fullname"]) ? htmlspecialchars($_GET["fullname"], ENT_QUOTES, 'UTF-8') : "";
    $gender = isset($_GET["gender"]) ? htmlspecialchars($_GET["gender"], ENT_QUOTES, 'UTF-8') : "";
    $dob = isset($_GET["dob"]) ? htmlspecialchars($_GET["dob"], ENT_QUOTES, 'UTF-8') : "";
    $education_status = isset($_GET["education_status"]) ? htmlspecialchars($_GET["education_status"], ENT_QUOTES, 'UTF-8') : "";
    $school = isset($_GET["school"]) ? htmlspecialchars($_GET["school"], ENT_QUOTES, 'UTF-8') : "";
    $whatsapp = isset($_GET["whatsapp"]) ? htmlspecialchars($_GET["whatsapp"], ENT_QUOTES, 'UTF-8') : "";
    $address = isset($_GET["address"]) ? htmlspecialchars($_GET["address"], ENT_QUOTES, 'UTF-8') : "";

    // Proses pendaftaran (simpan data ke database, dll.)
    // Contoh: Menampilkan data yang didaftarkan
    echo "Pendaftaran berhasil!<br>";
    echo "Nama Lengkap: " . $fullname . "<br>";
    echo "Jenis Kelamin: " . $gender . "<br>";
    echo "Tanggal Lahir: " . $dob . "<br>";
    echo "Status Pendidikan: " . $education_status . "<br>";
    echo "Nama Kampus/Sekolah: " . $school . "<br>";
    echo "Nomor WhatsApp: " . $whatsapp . "<br>";
    echo "Alamat: " . $address . "<br>";
} else {
    // Jika form tidak disubmit secara sah, kembali ke form login
    echo "Formulir tidak disubmit dengan benar!<br>";
    var_dump($_GET); // Debugging: Cetak isi variabel $_GET
}
?>
