<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $nama = $_POST['nama'];
         $nis = $_POST['nis'];
         $rombel = $_POST['rombel'];
         $alamat = $_POST['alamat'];
         $tanggal = $_POST['tanggal'];
         $umur = $_POST['umur'];
         $sekolah = $_POST['sekolah'];
        
         echo "<br/><br/><br/><br/>";
         echo "<b>BIODATA ANDA</b>";
         echo "<br/><br/>";
         echo "Nama anda adalah: ". $nama;
         echo "<br/>";
         echo "Nis anda adalah: ". $nis;
         echo "<br/>";
         echo "dan anda berada di kelas: ". $rombel;
         echo "<br/>";
         echo "Anda tinggal di: ". $alamat;
         echo "<br/>";
         echo "Anda lahir tanggal: ". $tanggal;
         echo "<br/>";
         echo "Usia anda: ". $umur;
         echo "<br/>";
         echo "Anda bersekolah di: ". $sekolah;
         echo "<br/>";
         echo "dan anda berada di kelas: ". $rombel;
         echo "<br/>";
     
         echo "<br/>";
     
         $gg = $_POST['gg'];
         $duk = $_POST['duk'];
         $gam = $_POST['gam'];
         $pas = $_POST['pas'];
         $nda = $_POST['nda'];

         echo "Nilai b.inggris anda adalah: ". $gg;
         echo "<br/>";
         echo "Nilai Produktif anda adalah: ". $duk;
         echo "<br/>";
         echo "Nilai agama anda adalah: ". $gam;
         echo "<br/>";
         echo "Nilai pipas anda adalah: ". $pas;
         echo "<br/>";
         echo "Nilai sunda anda adalah: ". $nda;
         echo "<br/>";

        ?>

</body>
</html>