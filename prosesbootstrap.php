<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Data Registrasi</h1>
      </div>
    </div>

    <?php
    error_reporting(0);
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tempat = $_POST["tempat"];
    $tanggal = $_POST["tanggal"];
    $jenis = $_POST["jenis"];
    $pendidikan = $_POST["pendidikan"];

    if (!empty($nama) && !empty($alamat) && !empty($tempat) && !empty($tanggal) && !empty($jenis) && !empty($pendidikan)) {
      ?>
      <div class="container">
        <div class="row mt-3">
          <div class="col-6">
            <table class="table table-striped table-hover">
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                  <?= $nama; ?>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                  <?= $alamat; ?>
                </td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                  <?= $tempat; ?>
                </td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                  <?= $tanggal; ?>
                </td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                  <?= $jenis; ?>
                </td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>
                  <?= $pendidikan; ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <?php
    }
    ?>

    <p><a href="tugasformbootstrap.php">Back To Home</a></p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>