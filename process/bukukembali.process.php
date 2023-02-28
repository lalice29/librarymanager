<?php
     include "koneksi.php";

     $idpinjam           = $_POST ["idpinjam"];
     $judulbuku          = $_POST ["judulbuku"];
     $kategori           = $_POST ["kategori"];
     $jumlah             = $_POST ["jumlah"];
     $namapeminjam       = $_POST ["namapeminjam"];
     $kelas              = $_POST ["kelas"];
     $email              = $_POST ["email"];
     $notlp              = $_POST ["notlp"];
     $tglpinjam          = $_POST ["tglpinjam"];
     $tglkembali         = $_POST ["tglkembali"];

     $sv = "INSERT INTO tb_bukukembali (idpinjam, judulbuku, kategori, jumlah, namapeminjam, kelas, email, notlp, tglpinjam, tglkembali) SELECT idpinjam, judulbuku, kategori, jumlah, namapeminjam, kelas, email, notlp, tglpinjam, tglkembali FROM tb_pinjam WHERE idpinjam ='$_GET[idpinjam]'";
     $dlt = "DELETE FROM tb_pinjam WHERE idpinjam = '$_GET[idpinjam]'";
     $query = mysqli_query($conn, $sv, $dlt);

     if($conn->query($sv, $dlt)) {
     header("location: ../beranda.php");
     } else {
     echo "<script>
     alert('Data gagal diperbarui.');
     window.location = '../tampildata.php';
     </script>";
     }
?>