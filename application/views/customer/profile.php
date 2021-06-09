
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
       
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            PROFILE USER <small><?php ?></small>
                        </h1>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                User Information
                            </div>
                            <div class="panel-body">
                            <?php foreach($customer as $c) : ?>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row mgbt-xs-0">
                                        <img src="<?php echo $c->foto ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Nama Lengkap: </label>
                                        <div class="col-xs-7 controls"><?php echo $c->nama_customer ?></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Email: </label>
                                        <div class="col-xs-7 controls"><?php echo $c->email ?></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Tanggal Lahir: </label>
                                        <div class="col-xs-7 controls"><?php echo $c->tanggal_lahir ?></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Nomor Telepon: </label>
                                        <div class="col-xs-7 controls"><?php echo $c->no_telepon ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    <a href="<?php echo base_url('index.php/customer/invoice') ?>"><button class="btn btn-primary btn-lg">Invoice</button></a>
                    </div>
                </div>
            </div>
			 <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
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
