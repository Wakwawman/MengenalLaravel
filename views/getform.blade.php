<?php 
session_start();

// Simpan data dari form ke sesi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];

    // Simpan data ke dalam array sesi
    $_SESSION["mahasiswa"][] = [
        "nim" => $nim,
        "nama" => $nama,
        "kelas" => $kelas
    ];

    // Redirect ke tabeldatdir.php
    header("Location: gettabel.blade.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkblue;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Form Input Mahasiswa</h2>
    <!-- form start -->
    <form action="" method="post">
        <!-- input NIM -->
        <label for="nim">NIM</label>
        <input type="text" name="nim" required>
        
        <!-- input nama -->
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" required>
        
        <!-- input kelas -->
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" required>
        
        <!-- tombol simpan -->
        <button type="submit">Simpan</button>
    </form>
    <!-- form end -->
</body>
</html>