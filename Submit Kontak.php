<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simpan data ke dalam file
    $file = 'kontak_data.txt';
    $data = "Nama: $name, Email: $email, Pesan: $message\n";
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect ke halaman terima kasih
    header("Location: terima_kasih.html");
    exit();
}
?>
