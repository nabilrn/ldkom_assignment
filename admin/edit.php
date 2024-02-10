<?php 
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $kat = $_POST['kat'];
        $tbm = $_POST['tbm'];
        $kond = $_POST['kond'];
        $jml = $_POST['jml'];

        $allowExt 			= array( 'png', 'jpg', 'jpeg','webp' );
		$fileName 			= $_FILES['Gambar']['name'];
        $fileNameParts      = explode('.', $fileName);
        $fileExt            = strtolower(end($fileNameParts));
		$fileSize			= $_FILES['Gambar']['size'];
		$fileTemp 			= $_FILES['Gambar']['tmp_name'];
		$base 				= basename ($fileName);
		$Gambar 			= str_replace(' ','_',$base);

        if($_FILES['Gambar']['size']>0)
        {
            if(in_array($fileExt, $allowExt) === true)
            {
                if($fileSize < 1044070) //untuk mengecek ukuran file
                {			
                    if(move_uploaded_file($fileTemp, 'assets/'.$Gambar))
                    {
                        $query = mysqli_query($koneksi,"UPDATE databarang SET 
			                kat = '$kat',
			                tbm = '$tbm',
			                kond = '$kond',
			                jml = '$jml',
                            Gambar = '$Gambar' 
			                WHERE nama = '$nama'");
                        if($query)
                        {
                            header("location:index.php?success=yes");
                        }
                        else
                        {
                            header("location:index.php?success=no");
                        }
                    }
                    else
                    {
                        echo 'FILE TIDAK TERUPDATE';
                        header("location:index.php?success=no");   
                    }
                }
                else
                {
                    echo 'UKURAN FILE TERLALU BESAR';
                    header("location:index.php?success=no");
                }
            }
            else
            {
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                header("location:index.php?success=no");
            }
        }
        else
        {
            $query = mysqli_query($koneksi,"UPDATE databarang SET 
            kat = '$kat',
            tbm = '$tbm',
            kond = '$kond',
            jml = '$jml' 
            WHERE nama = '$nama'");

        if($query)
        {
            header("location:index.php?success=yes");
        }
        else
        {
            header("location:index.php?success=no");
        }
        }
    }
?>