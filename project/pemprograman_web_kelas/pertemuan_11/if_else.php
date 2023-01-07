<html>

<head>
    <h1>Latihan php</h1>
</head>

<body>
    <?php
$nilai = 45;
if ($nilai >= 80) {
    echo "Nilai Anda $nilai, Anda LULUS v1";
} else  if ($nilai >= 60) {
    echo "Nilai Anda $nilai, Anda LULUS v2";   
} else  if ($nilai >= 40) {
    echo "Nilai Anda $nilai, Anda LULUS v3";
}else {
    echo "Nilai Anda $nilai, Anda GAGAL";
}
?>

</body>

</html>