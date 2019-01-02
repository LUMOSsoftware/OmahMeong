<?php $this->load->view('layout_admin/head'); ?>



<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <!-- preloader area start -->
  <!--<div id="preloader" >
  <div class="loader"></div>
  </div>-->
  <!-- preloader area end -->
  <!-- page container area start -->

<?php $this->load->view('layout_admin/nav');?>
  
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
      <!-- header area start -->
      <div class="header-area">
        <div class="row align-items-center">
          <!-- nav and search button -->
          <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
              <span></span>
              <span></span>
              <span></span>
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
          <div class="user-profile pull-right">
              <img class="avatar user-thumb" src="<?php echo base_url();?>assets/admin/images/author/avatar.png" alt="avatar">
              <h4 class="user-name dropdown-toggle" data-toggle="dropdown">ADMIN</h4>
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
                <li><a href="admin_obat">Daftar Harga</a></li>
                <li><a href="admin_home">Data Obat</a></li>
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

                <h4 class="header-title mb-0">Tambah Data Obat</h4><hr>
  
<form action="<?php echo base_url().'admin_obat/tambah_data'; ?>" method="post">

        <div class="form-group row">
          <div class="col-6">
            <h6>ID Obat</h6>
            <input name="id_obat" maxlength="10" class="form-control" type="text" placeholder="Masukkan ID Obat" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-6">
            <h6>Nama Obat</h6>
            <input name="nama_obat" class="form-control" type="text" placeholder="Masukkan Nama Obat" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
         </div>

        <div class="form-group row">
          <div class="col-6">
            <h6>Harga</h6>
            <input name="harga_obat"  maxlength="10" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="Masukkan Nominal Harga" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
           </div>
        </div>
      </div>


        <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Tambah <i class="fa fa-plus ml-1"></i></button>
        <button type="reset"  class="btn btn-danger">Hapus <i class="fa fa-trash"></i></button>
        </div>
</form><hr>

  <h4 class="header-title mb-0">Data Obat</h4><hr>

<form action="<?php echo base_url().'admin_obat/cari'; ?>">
  <input type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="q" value="Search">
</form>

  <div class="market-status-table mt-4">
  <div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="align-middle text-center">ID Obat</th>
                          <th scope="col" class="align-middle text-center">Nama Obat</th>
                          <th scope="col" class="align-middle text-center">Harga</th>
                          <th scope="col" class="align-middle text-center" colspan="2">Aksi</th>
                        </tr>
    </thead>
    <tbody>
    <?php 
    foreach($tbl_obat as $u){ 
    ?>
    <tr>
      <td class="align-middle text-center"><?php echo $u->id_obat ?></td>
      <td class="align-middle text-center"><?php echo $u->nama_obat ?></td>
      <td class="align-middle text-center"><?php echo $u->harga_obat ?></td>
      <td class="align-middle text-center"><a href="<?php echo base_url().'admin_obat/edit/'.$u->id_obat; ?>" class="btn btn-primary text-center">Edit</a></td>
      <td class="align-middle text-center"><a href="<?php echo base_url().'admin_obat/hapus/'.$u->id_obat; ?>" class="btn btn-danger text-center">Hapus</a></td>
    </tr>
    <?php } ?>
  </tbody>
  </table>
                  </div>
                </div>
              </div>
            </div>
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