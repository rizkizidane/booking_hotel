
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION SUNRISE HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo base_url('assets/assets_admin/') ?>css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url('assets/assets_admin/') ?>css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="<?php echo base_url('assets/assets_admin/') ?>css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="<?php echo base_url('index.php/customer/home') ?>"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php foreach($detail as $dt) : ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <?php echo $dt->nama_hotel ?>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                HOTEL INFORMATION
                            </div>
                            <div class="panel-body">
                                <table class ="table">
                                    <tr>
                                        <th>Rating</th>
                                        <td><?php echo $dt->rating ?></td>
                                    </tr>
                                    <tr>
                                        <th>Fasilitas</th>
                                        <td><?php echo $dt->fasilitas ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Kamar</th>
                                        <td><?php echo $dt->jumlah_kamar ?></td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="<?php echo base_url('assets/upload/').$dt->gambar; ?>" class="img-responsive" alt="/" style="height: 300px">
                    </div>
                </div>
                <a href="<?php echo base_url('index.php/customer/reservation/tambah_reservation/'.$dt->id_hotel) ?>"><button class="btn btn-primary">Book Now</button></a>
                
                <?php endforeach; ?>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url('assets/assets_admin/') ?>js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?php echo base_url('assets/assets_admin/') ?>js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url('assets/assets_admin/') ?>js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="<?php echo base_url('assets/assets_admin/') ?>js/custom-scripts.js"></script>
    
   
</body>
</html>
