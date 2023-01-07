<html>

<head>
    <h1>Latihan php</h1>
</head>

<body>
    <?php
$day = date("D"); // DD MM YY
switch ($day) {
    case 'Sun':
        $hari = "Minggu";
        break;
    case 'Mon':
        $hari = "Senin";
        break;
    case 'Tue':
        $hari = "Selasa";
        break;
    case 'Wed':
        $hari = "Rabu";
        break;
    case 'Thu':
        $hari = "Kamis";
        break;
    case 'Fri':
        $hari = "Jum'at";
        break;
    case 'Sat':
        $hari = "Sabtu";
        break;
    default:
        $hari = "Kiamat";
}
echo "Hari ini hari <b>$hari</b><br>";

// grade A B C D E
$grade = "D";
    $valuenya = "";
switch ($grade) {
        case 'A':
            $valuenya = "Grade A rentang 85 - 100";
            break;
        case 'B':
            $valuenya = "Grade B rentang 75 - 85";
            break;
        case 'C':
            $valuenya = "Grade C rentang 50 - 74";
            break;
        default:
            $valuenya = "Grade tidak memenuhi";
            break; 
    }
    echo "<b>$valuenya</b><br>";
?>

</body>

</html>