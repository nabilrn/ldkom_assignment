<?php
include 'koneksi.php';
$nama=$_GET['id'];
$query=mysqli_query($koneksi, "SELECT * FROM databarang WHERE nama='$nama'");
$pecah=mysqli_fetch_assoc($query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Edit</title>
  </head>
  <body>
    <!-- <h1>Hello, worldnlkfw!</h1> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<section id="form">
    <div class="container ">
        <div class="row text-center">
            <div class="col">
                <h2>Edit Data Barang</h2>
                <hr>
            </div>
        </div>
        <div class="row  justify-content-center">
            <div class="col-md-6 bg-light">
                <div class="container mt-4 mb-4">
                
                

                    <form action="edit.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" readonly name="nama" id="nama" value="<?php echo $pecah['nama']; ?>"  aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="kat" class="form-label">kategori</label>
                        <select class="form-select" name="kat" aria-label="Default select example">
                            <?php 
                            if($pecah['kat']==1){
                                $kat = "Habis";
                            } else{
                                $kat = "tersedia";
                            }?>
                        <option disabled selected value="<?php echo $pecah["jml"]?>"><?=$kat?></option>
                            <option value="1">Habis</option>
                            <option value="2">Tersedia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tbm" class="form-label">Tanggal Barang Masuk</label>
                        <input type="date" class="form-control" name="tbm" value="<?php echo $pecah['tbm']; ?>" id="tbm">
                    </div>
                   
                    <div class="mb-3">
                    <label for="kond" class="form-label">Kondisi</label>
                    <select class="form-select" name="kond" aria-label="Default select example">
                        <?php 
                        $selectedValue = $pecah['kond']; 

                        $conditions = array(
                            1 => "Bagus",
                            2 => "Sedikit Rusak",
                            3 => "Baru",
                            4 => "Usang"
                        );

                        foreach ($conditions as $value => $text) {
                            $selected = ($selectedValue == $value) ? 'selected' : ''; 
                            echo '<option value="' . $value . '" ' . $selected . '>' . $text . '</option>';
                        }
                        ?>
                    </select>


                    </div>
                    <div class="mb-3">
                        <label for="jml" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jml" min="1"  value="<?php echo $pecah['jml']; ?>" id="jml">
                    </div>
                    <div class="mb-3">
                    <img src="assets/<?php echo $pecah['Gambar']; ?>" alt="" style="width:100px;height: 100px;">
                    <td></td>
                        <label for="Gambar" class="form-label"></label>
                        <input type="file" class="form-control" name="Gambar" id="gambar">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="index.php" class="btn btn-success">Back</a>
                    </form>
            
                </div>
            </div>
        </div>
    </div>
</section>



  </body>
</html>