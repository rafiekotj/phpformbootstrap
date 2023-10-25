<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Form Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Form Registrasi</h1>
        <p class="mt-3">Isi Data Dibawah Ini : </p>

        <form action="prosesbootstrap.php" method="post" enctype="">
          <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat Anda"
                required></textarea>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tempat" class="col-sm-3 col-form-label">Tempat Lahir</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Tempat Lahir Anda"
                required>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Lahir Anda"
                required>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="jenis" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9 pt-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis" id="jenis1" value="Laki-laki" required>
                <label class="form-check-label" for="jenis1">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis" id="jenis2" value="Perampuan">
                <label class="form-check-label" for="jenis2">Perempuan</label>
              </div>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="pendidikan" class="col-sm-3 col-form-label">Pendidikan</label>
            <div class="col-sm-5">
              <select class="form-select" name="pendidikan" aria-label="Default select example" required>
                <option value="">Pendidikan Anda</option>
                <option value="S1">S1</option>
                <option value="SMA/SMK">SMA/SMK</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-default">Cancel</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>