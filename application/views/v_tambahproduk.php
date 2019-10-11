<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Produk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
  <div class="content-wrapper"
 
  <div class="container">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Produk</h6>
      </div>

    <div class="card-body">
      <input type="text" name="" class="form-control" placeholder="Kode Barang" required /><br>
       <input type="text" name="" class="form-control" placeholder="Nama Barang" required /><br>
        <input type="text" name="" class="form-control" placeholder="Kategori" required /><br>
         <input type="text" name="" class="form-control" placeholder="Unit" required /><br>
          <input type="text" name="" class="form-control" placeholder="Harga" required /><br>

          <div class="row">
        <div class="col-sm-2">
          <br><input type="submit" class="btn btn-success" value="Simpan"/>
        </div>
        <div class="row-sm-2">
          <br><input type="submit" class="btn btn-success" value="Reset"/>
        </div>
      </div>
        </div>
      </div>
      </div>
    </div>
  </body>