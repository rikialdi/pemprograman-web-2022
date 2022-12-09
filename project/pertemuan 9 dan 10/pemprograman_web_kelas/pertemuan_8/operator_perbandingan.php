<html>

<head>
  <h1>Belajar php</h1>
</head>

<body>
  <?php 
   $a= 13;
   $b= 2;
   
   echo "Nilai \$a : ".$a."<br>"; 
   echo "Nilai \$b : ".$b."<br>";
   
   echo "\$a == \$b, Hasilnya :  ".($a==$b)."<br>";
   echo "\$a === \$b, Hasilnya :  ".($a===$b)."<br>";
   echo "\$a != \$b, Hasilnya :  ".($a!=$b)."<br>";
   echo "\$a !== \$b, Hasilnya :  ".($a!==$b)."<br>";
   echo "\$a < \$b, Hasilnya :  ".($a>$b)."<br>";
   echo "\$a > \$b, Hasilnya :  ".($a>$b)."<br>";
   echo "\$a <= \$b, Hasilnya :  ".($a<=$b)."<br>";
   echo "\$a >= \$b, Hasilnya :  ".($a>=$b)."<br>";
  ?>

</body>

</html>