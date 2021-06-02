
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
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                  
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                PERSONAL INFORMATION
                            </div>
                            <div class="panel-body">
                                <form name="form" method="post">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input name="nama" class="form-control" required>
                                    </div>
                                
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input name="no_telepon" type ="number" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>        
                                    </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    RESERVATION INFORMATION
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Jumlah Kamar</label>
                                        <select name="jumlah_kamar" class="form-control" required>
                                            <option value selected ></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Check-In</label>
                                        <input name="cin" type ="date" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Check-Out</label>
                                        <input name="cout" type ="date" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>    
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
