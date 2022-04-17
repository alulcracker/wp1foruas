<!DOCTYPE html>
<html lang="en" id="all">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Registrasi</title>
</head>
<div id="all">
    <form action="viewmhs.php" method="POST">
        <h1>Form Registrasi</h1>
        <b>Isi Data Dibawah ini:</b>
        <pre>
 Nama: <br><input class="btn" type="text" name="nama" size="25" maxlength="50">

 Alamat: <br><textarea class="btn" name="alamat" rows="4" cols="50"></textarea>

 Tempat Lahir: <br><input class="btn" type="text" name="tmplahir" size="25" maxlength="50">

 Tanggal Lahir: <br><input class="btn" type="text" name="tgllahir" size="25" maxlength="50">
        </pre>
        Jenis Kelamin   : <br>
        <input type="radio" name="gender" value="Laki-Laki">Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan">Perempuan
        <p>
            Pendidikan :
            <select class="btn" name="edu">
                <option value="-Pilih-">
                <option value="S1">S1
                <option value="D4">D4
                <option value="D3">D3
            </select>
        </p>
        <input class="btn success" type="submit" value="Submit">
        <input class="btn danger" type="reset" value="Reset">
    </form>
</div>
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