<!DOCTYPE html>
<html>
<head>
    <title>Penentuan Nilai Huruf</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 300px;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Tugas 2 JWD 6</h1>
<?php
// Menerima nilai yang dikirimkan melalui form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai = $_POST['nilai'];

// Proses lain yang Anda inginkan dengan data yang diterima

// Contoh output data yang diterima

if ($nilai >= 80) {
    $nilaiHuruf = 'A';
} elseif ($nilai >= 75) {
    $nilaiHuruf = 'B';
} elseif ($nilai >= 70) {
    $nilaiHuruf = 'C';
} else {
    $nilaiHuruf = 'Tidak valid';
}




?>
<table>
        <tr>
            <th>nama</th>
            <th>kelas</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <tr>   
            <td><?php echo $nama; ?></td>
            <td><?php echo $kelas; ?></td>
            <td><?php echo $nilai; ?></td>
            <td class="label"><?php echo $nilaiHuruf; ?></td>
        </tr>
    </table>
</body>
</html>