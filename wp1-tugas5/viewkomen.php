<!DOCTYPE html>
<html lang="en" id="all">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Data Komentar</title>
</head>
<body>
    <?php
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $komen=$_POST['komen'];
        echo "<h1>Data Komentar Anda</h1>";
        echo "<hr>";
        if(!empty($nama))
        {
            echo "Nama Anda     : $nama<br>";
        }
        if(!empty($email))
        {
            echo "Email Anda    : $email<br>";
        }
        if(!empty($komen))
        {
            echo "Komentar Anda     : $komen<br>";
        }
    ?><br>
    <p> Source Code </p>
    <input type="text" value="https://s.id/WP1-ForUAS" id="copybtn">
    <button class="btnkomen" onclick="myFunction()">Salin</button>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<script>
VANTA.NET({
  el: "#all",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 1000.00,
  minWidth: 1000.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x160061,
  backgroundColor: 0xad90d7,
  maxDistance: 15.00,
})
</script>
</html>