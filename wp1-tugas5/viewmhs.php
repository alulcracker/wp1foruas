<!DOCTYPE html>
<html lang="en" id="all">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <?php
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tmplahir = $_POST['tmplahir'];
        $tgllahir = $_POST['tgllahir'];
        $gender = $_POST['gender'];
        $edu = $_POST['edu'];
    ?>
    <table id="mhs" border="1" bgcolor="cyan">
        <tr>
            <td colspan="2" align="center"><b>Data Mahasiswa</b></td>
        </tr>
        <tr>
            <td>Nama</td><td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>Alamat</td><td><?php echo $alamat;?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td><td><?php echo $tmplahir;?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td><?php echo $tgllahir;?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td><?php echo $gender;?></td>
        </tr>
        <tr>
            <td>Pendidikan</td><td><?php echo $edu;?></td>
        </tr>
    </table><br>
    <button class="btn success"><a href="formkomen.php">Feedback</a> </button>
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