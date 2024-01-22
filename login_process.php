<?php
session_start();

// Cek apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form login
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

    // Validasi email dengan ketentuan tertentu (harus mengandung "@gmail.com")
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, "@gmail.com") === false) {
        // Jika email tidak valid atau tidak mengandung '@gmail.com', tampilkan pesan kesalahan
        $error_message = "Invalid Email Format";
    } else {
        // Gantilah kondisi berikut dengan logika autentikasi yang sesuai
        // Di sini, kita asumsikan pengguna dengan email "user@gmail.com" dan password "password"
        $hashedPassword = password_hash("password", PASSWORD_DEFAULT);

        if ($email === "user@gmail.com" && password_verify($password, $hashedPassword)) {
            // Set sesi bahwa pengguna telah login
            $_SESSION['user_logged_in'] = true;
        } else {
            // Jika login gagal, tampilkan pesan kesalahan
            $error_message = "Invalid Email or Password";
        }
    }
}

// Redirect ke halaman registration_form.php setelah login berhasil atau gagal
header("Location: registration_form.php?error_message=" . urlencode(htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8')));
exit();
?>
