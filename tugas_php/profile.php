<?php
$Nama = "Raihan Julian Rahman";
$Umur = "17 thn";
$Tinggi = "166 cm";
$Hobi = "Futsal";
$Citacita = "Pengusaha";
$Sekolah = "SMKN 2 BANDUNG";

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>SISWA SMKN 2 BANDUNG</title>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap' rel='stylesheet'>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('indah.jpg');
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(135, 206, 250, 0.6);
            padding: 30px;
            max-width: 350px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .container:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(135, 206, 250, 0.6);
        }
        h1 {
            color: #808080;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .info {
            margin: 15px 0;
            font-size: 18px;
            color: #555;
        }
        .info span {
            font-weight: 700;
            color: #333;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>PROFIL SISWA</h1>
        <div class='info'><span>Nama:</span> $Nama</div>
        <div class='info'><span>Umur:</span> $Umur</div>
        <div class='info'><span>Tinggi:</span> $Tinggi</div>
        <div class='info'><span>Hobi:</span> $Hobi</div>
        <div class='info'><span>Cita-Cita:</span> $Citacita</div>
        <div class='info'><span>Asal Sekolah:</span> $Sekolah</div>
    </div>
</body>
</html>
";
?>