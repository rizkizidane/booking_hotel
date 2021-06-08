        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="<?php echo base_url('index.php/admin/home') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/hotel') ?>"><i class="fa fa-desktop"></i> Hotel</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo base_url('index.php/admin/customer') ?>"><i class="fa fa-user"></i> Customer</a>
                    </li>
					<li>
                        <a href="<?php echo base_url('index.php/admin/reservation') ?>"><i class="fa fa-bar-chart-o"></i> Reservation</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/payment') ?>"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/profit') ?>"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/auth/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Update Customer
                        </h1>
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($customer as $c) : ?>
                        <form method="POST" action="<?php echo base_url('index.php/admin/customer/update_customer_aksi') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="hidden" name="id_customer" value="<?php echo $c->id_customer ?>">
                                        <input type="text" name="nama_customer" class="form-control" value="<?php echo $c->nama_customer ?>">
                                        <?php echo form_error('nama_customer','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo $c->email ?>">
                                        <?php echo form_error('email','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" value="<?php echo $c->password ?>">
                                        <?php echo form_error('password','<div class="text-small text-danger">','</div') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $c->tanggal_lahir ?>">
                                        <?php echo form_error('tanggal_lahir','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="number" name="no_telepon" class="form-control" value="<?php echo $c->no_telepon ?>">
                                        <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </form>
                        <?php endforeach; ?>
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
