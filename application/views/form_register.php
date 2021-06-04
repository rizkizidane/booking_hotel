<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_auth') ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_auth') ?>/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('index.php/register') ?>">
                    <div class="form-group">
                        <label for="nama_customer">Nama Lengkap</label>
                        <input id="nama_customer" type="text" class="form-control" name="nama_customer">
                        <?php echo form_error('nama_customer','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" autofocus>
                            <?php echo form_error('tanggal_lahir','<div class="text-small text-danger">','</div>') ?>
                        </div>
                        <div class="form-group col-6">
                            <label for="foto">Foto</label>
                            <input id="foto" type="file" class="form-control" name="foto" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon</label>
                        <input id="no_telepon" type="number" class="form-control" name="no_telepon" autofocus>
                        <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email">
                        <?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password">
                        <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                    </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>