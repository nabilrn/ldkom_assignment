<?php 
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $kat = $_POST['kat'];
    $tbm = $_POST['tbm'];
    $kond = $_POST['kond'];
    $jml = $_POST['jml'];
    


        $extension = array('png','jpg','jpeg','webp' );
        $Gambar = $_FILES['Gambar']['name'];
        $x = explode('.', $Gambar);
        $ext = strtolower(end($x));
        $ukuran = $_FILES['Gambar']['size'];
        $file_tmp = $_FILES['Gambar']['tmp_name'];

        if(in_array($ext, $extension) === true){
            if($ukuran < 1044070){
                move_uploaded_file($file_tmp, 'assets/'.$Gambar);
                $query = mysqli_query($koneksi,"INSERT INTO databarang (nama, kat, tbm, kond, jml, Gambar) VALUE('$nama','$kat','$tbm','$kond','$jml','$Gambar')") ;
                if($query){
                    header("location:index.php?berhasil=yes");
                    exit();
                }else{
                    echo 'Gagal menyimpan data ke database: ' . mysqli_error($koneksi);
                    header("location:index.php?berhasil=no");
                    exit();
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
                header("location:index.php?berhasil=no");
                exit();
            }
        }else{
            echo 'EKSTENSI FILE TIDAK SESUAI';
            header("location:index.php?berhasil=no");
            exit();
        }

        
?>