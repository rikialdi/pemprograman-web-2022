<html>

<head>
  <h1>Belajar php</h1>
</head>

<body>
  <?php 
 echo "Operasi AND <br>";
 echo "1 && 1 :".(true && true)."<br>";
 echo "1 && 0 :".(true && false)."<br>";
 echo "0 && 0 :".(false && false)."<br><br>";
 
 echo "Operasi OR <br>";
 echo "1 || 1 :".(true || true)."<br>";
 echo "1 || 0 :".(true || false)."<br>";
 echo "0 || 0 :".(false || false)."<br><br>";
 
 echo "Operasi NOT <br>";
 echo "!1 :".(!true)."<br>";
 echo "!0 :".(!false)."<br><br>";
 
 echo "Operasi XOR <br>";
 echo "1 xor 1 :".(true xor true)."<br>";
 echo "1 xor 0 :".(true xor false)."<br>";
 echo "0 xor 0 :".(false xor false)."<br><br>";
  ?>

</body>

</html>