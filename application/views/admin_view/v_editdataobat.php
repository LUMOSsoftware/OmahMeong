<?php $this->load->view('layout_admin/head'); ?>



<body>
    <div class="main-content">
      <!-- header area start -->
      <div class="header-area">
        <div class="row align-items-center">
          <!-- nav and search button -->
          <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
            </div>
            <div class="search-box pull-left">
              <form action="#">
                <input type="text" name="search" placeholder="Cari..." required="">
                <i class="ti-search"></i>
              </form>
            </div>
          </div>
          <!-- profile info & task notification -->
          <div class="col-md-6 col-sm-4 clearfix">
          <ul class="notification-area pull-right">
          <div class="user-profile pull-right">
              <img class="avatar user-thumb" src="<?php echo base_url();?>assets/admin/images/author/avatar.png" alt="avatar">
              <h4 class="user-name dropdown-toggle" data-toggle="dropdown">ADMIN<i class="fa fa-angle-down"></i></h4>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Keluar</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- header area end -->
      <!-- page title area start -->
      <div class="page-title-area">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="breadcrumbs-area p-4 clearfix">
              <ul class="breadcrumbs pull-left">
                <li><a href="">Edit</a></li>
                <li><span>Data obat</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- page title area end -->

<div class="main-content-inner">
        <!-- overview area start -->
        <!-- overview area end -->
        <!-- market value area start -->

        <div class="row mt-5 mb-5">
          <div class="col-12">
            <div class="card">
              <div class="card-body">

<h3>Edit Data</h3>
  </center>
  <?php foreach($barang as $u){ ?>
  <form action="<?php echo base_url().'admin_obat/update';?>" method="post">

          <div class="form-group row">
          <div class="col-6">
            <h6>ID Obat</h6>
            <input name="barang_id" maxlength="5" class="form-control" type="read_only" value="<?php echo $u->barang_id ?>" readonly>
          </div>
         </div>

          <h6>ID Kategori</h6>
            <input name="kategori_id" maxlength="5" class="form-control" type="read_only" value="<?php echo $u->kategori_id ?>" readonly>
          </div>
         </div>
          <div class="form-group row">
          <div class="col-6">
            <h6>Nama Obat</h6>
            <input name="nama_barang"  class="form-control" type="read_only" value="<?php echo $u->nama_barang ?>">
          </div>
         </div>

          <div class="form-group row">
          <div class="col-6">
            <h6>Harga</h6>
            <input name="harga" maxlength="8" onkeypress="return hanyaAngka(event)" class="form-control" type="text" value="<?php echo $u->harga ?>">
          </div>
        </div>


        <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
        <button type="reset" class="btn btn-danger">Reset <i class="fa fa-trash"></i></button>
        <a href="<?php echo base_url().'admin_obat'; ?>" class="btn btn-warning">Kembali<i class="fa fa-trash"></i></a>
        </div>
</form><?php } ?><hr>
             
              </div>
            </div>

        <!-- market value area end -->
        <!-- row area start -->
        <!-- row area end -->
        <!-- row area start-->

<?php $this->load->view('layout_admin/footer');?>

  <!-- page container area end -->
  <!-- offset area start -->
  <!-- input angka only -->
  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>

  <!-- offset area end -->
  <!-- jquery latest version -->

<?php $this->load->view('layout_admin/jquery');?>