<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  

<section id="form">
    <div class="container">
        <div class="row text-center" >
            <div class="col">
                <h2>Form Tambah Barang</h2>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light" >
                <div class="container mt-4 mb-4">
                    <form action="input.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="kat" class="form-label">Kategori</label>
                        <select class="form-select" name="kat" aria-label="Default select example">
                            <option value="1">Habis</option>
                            <option value="2">Tersedia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tbm" class="form-label">Tanggal Barang Masuk</label>
                        <input type="date" class="form-control" name="tbm" id="tbm" required>
                    </div>
                    <div class="mb-3">
                        <label for="kond" class="form-label">Kondisi</label>
                        <select class="form-select" name="kond" aria-label="Default select example">
                            <option value="1">Bagus</option>
                            <option value="2">Sedikit Rusak</option>
                            <option value="3">Baru</option>
                            <option value="4">Usang</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jml" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jml" id="jml"  min = "1" required>
                    </div>
                    <div class="mb-3">
                        <label for="Gambar" class="form-label">Gambar (jpg.png.webp.jpeg)</label>
                        <input type="file" class="form-control" name="Gambar" id="Gambar"  required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="index.php" class="btn btn-success">< Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
