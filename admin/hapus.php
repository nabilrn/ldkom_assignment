<?php 
include('koneksi.php');

$nama = $_GET["id"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Penghapusan Data</title>
    <script type="text/javascript">
        function konfirmasiHapus() {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");
            if (konfirmasi) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
<?php

if(isset($_GET['hapus']) && $_GET['hapus'] == 'ya') {
    $hasil = mysqli_query($koneksi,"DELETE FROM databarang WHERE nama='$nama'");
    
    if($hasil) {
        echo "<script>
                    alert('data berhasil dihapus');
                    document.location.href='index.php';
                </script>";
    } else {
        echo "<script>
                    alert('data gagal dihapus');
                    document.location.href='index.php';
                </script>";
    }
} else {
    echo "<script>
                var hapus = konfirmasiHapus();
                if (hapus) {
                    document.location.href='hapus.php?id=".$nama."&hapus=ya';
                } else {
                    document.location.href='index.php';
                }
            </script>";
}

?>
</body>
</html>
