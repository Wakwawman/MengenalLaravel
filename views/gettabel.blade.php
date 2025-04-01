<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
        .baris-atas {
            background-color: white;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table>
        <tr>
            <th class="baris-atas" colspan="4">Data Mahasiswa</th>
        </tr>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php 
        if (isset($_SESSION["mahasiswa"]) && count($_SESSION["mahasiswa"]) > 0) {
            $no = 1;
            foreach ($_SESSION["mahasiswa"] as $mhs) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["kelas"]; ?></td>
        </tr>
        <?php 
            }
        } else { ?>
        <tr><td colspan="4">Belum ada data.</td></tr>
        <?php } ?>
    </table>
    <br>
    <a href="getform.blade.php"></a>
</body>
</html>