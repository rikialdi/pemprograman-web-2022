<html>

<head>
    <h1>Latihan php</h1>
</head>

<body>
    <?php
/* contoh 1 */
for ($i = 1; $i <= 10; $i = $i+2) { // $i++
    echo "$i ";
}
echo "<br><br>";
/* contoh 1 a */
for ($i = 10; $i >=1 ; $i = $i-2) { // $i++ 10 9 8 7
    echo "$i ";
}
echo "<br><br>";
/* contoh 2 */
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo "$i ";
}
echo "<br><br>";
/* contoh 3 */
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo "$i ";
    $i++;
}
echo "<br><br>";
/* contoh 4 */
for ($i = 1; $i <= 10; print "$i ", $i++)
    ;
?>

</body>

</html>