        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="<?php echo base_url('index.php/admin/home') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo base_url('index.php/admin/hotel') ?>"><i class="fa fa-desktop"></i> Hotel</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/admin/customer') ?>"><i class="fa fa-user"></i> Customer</a>
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
                        <a href="<?php echo base_url('index.php/admin/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            Update Hotel
                        </h1>
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($hotel as $h) : ?>
                        <form method="POST" action="<?php echo base_url('index.php/admin/hotel/update_hotel_aksi') ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Hotel</label>
                                        <input type="hidden" name="id_hotel" value="<?php echo $h->id_hotel ?>">
                                        <input type="text" name="nama_hotel" class="form-control" value="<?php echo $h->nama_hotel ?>">
                                        <?php echo form_error('nama_hotel','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Fasilitas</label>
                                        <input type="text" name="fasilitas" class="form-control" value="<?php echo $h->fasilitas ?>">
                                        <?php echo form_error('fasilitas','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Rating</label>
                                        <select name="rating" class="form-control">
                                            <option <?php if($h->rating=="1"){echo "selected";} ?> value="1">1</option>
                                            <option <?php if($h->rating=="2"){echo "selected";} ?> value="2">2</option>
                                            <option <?php if($h->rating=="3"){echo "selected";} ?> value="3">3</option>
                                            <option <?php if($h->rating=="4"){echo "selected";} ?> value="4">4</option>
                                            <option <?php if($h->rating=="5"){echo "selected";} ?> value="5">5</option>
                                        </select>
                                        <?php echo form_error('rating','<div class="text-small text-danger">','</div') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Kamar</label>
                                        <input type="text" name="jumlah_kamar" class="form-control" value="<?php echo $h->jumlah_kamar ?>">
                                        <?php echo form_error('jumlah_kamar','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" name="harga" class="form-control" value="<?php echo $h->harga ?>">
                                        <?php echo form_error('harga','<div class="text-small text-danger">','</div') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
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
