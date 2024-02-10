<?php 
    include 'koneksi.php';
    $berhasil = isset($_GET['berhasil']) ? $_GET['berhasil'] : '';
    $success = isset($_GET['success']) ? $_GET['success'] : '';
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Data Barang LDKOM</h2>
          <hr />
        </div>
      </div>
      <div class="row text-end">
        <div class="col">
          <a class="btn btn-danger" type="button" href="../logout.php">Logout</a>
          <a class="btn btn-primary" type="button" href="halamaninput.php"
            >+ Tambah Barang</a
          >
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col">
          <?php if($berhasil == 'yes') {?>
          <div
            class="alert alert-success alert-dismissible fade show"
            role="alert"
          >
            <strong>Submit Berhasil !</strong> Data sudah masuk ke database.
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <?php } elseif ($berhasil=='no') {?>
          <div
            class="alert alert-warning alert-dismissible fade show"
            role="alert"
          >
            <strong>Submit Gagal !</strong> Data tidak dapat disimpan di
            database.
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <?php if($success == 'yes') {?>
          <div
            class="alert alert-success alert-dismissible fade show"
            role="alert"
          >
            <strong>Edit Berhasil!</strong> Data sudah diedit.
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <?php } elseif ($success=='no') {?>
          <div
            class="alert alert-warning alert-dismissible fade show"
            role="alert"
          >
            <strong>Edit Gagal !</strong> Data Gagal untuk diedit.
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="alert"
              aria-label="Close"
            ></button>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                 $ambil = mysqli_query($koneksi,"SELECT * FROM databarang");
                 while ($pecah = mysqli_fetch_assoc($ambil)){?>
              <tr>
                <td><?php echo $pecah['kode']; ?></td>
                <td><?php echo $pecah['nama']; ?></td>
                <td>
                  <?php  $kat = $pecah['kat'];
                    if($kat==1)
                    {echo "habis";}
                    else
                    {echo "tersedia";}
                    ?>
                </td>
                <td><?php echo $pecah['tbm']; ?></td>
                <td><?php $kond = $pecah['kond'];
                     if($kond == 1) {
                          echo "Bagus";
                    } elseif($kond == 2) {
                          echo "Sedikit Rusak";
                    } elseif($kond == 3) {
                          echo "Baru";
                    } elseif($kond == 4) {
                          echo "Usang";
                    } else {
                          echo "Pilihan tidak valid";
                    }
                    ?>              
                    </td>
                
                <td><?php echo $pecah['jml']; ?></td>
                <td><img src="assets/<?php echo $pecah['Gambar']; ?>" alt="" style="width:100px;height: 100px;"></td>
                        <td>
                            <a  href="halamanedit.php?id=<?php echo $pecah['nama'];?>"><span class="badge  bg-warning text-dark">Edit</span></a>
                            <a  href="hapus.php?id=<?php echo $pecah['nama'];?>" ><span class="badge  bg-danger text-dark">Delete</span></a>
                        </td>
              </tr>
              <?php 
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
