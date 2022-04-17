<!DOCTYPE html>
<html lang="en" id="all">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Komentar</title>
</head>
<body>
    <form action="viewkomen.php" method="POST">
        <h1>Feedback</h1>
        Komentar dan Saran Anda Sangat Kami Butuhkan<br>
        Untuk Meningkatkan Kualitas Situs Kami<br>
        <hr>
        <pre>
Nama Anda: <br><input class="btn" type="text" name="nama" size="25" maxlength="50">

Email Anda: <br><input class="btn" type="text" name="email" size="25" maxlength="50">

Komentar Anda: <br><textarea class="btn" name="komen" cols="50" rows="5"></textarea>
        </pre>
        <input class="btn success" type="submit" value="Kirim">
        <input class="btn danger" type="reset" value="Batal">
    </form>
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