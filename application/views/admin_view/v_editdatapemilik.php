<?php $this->load->view('layout_admin/head'); ?>



<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <!-- preloader area start -->
  <!--<div id="preloader" >
  <div class="loader"></div>
  </div>
  <!-- preloader area end -->
  <!-- page container area start -->
  
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
              <h4 class="page-title pull-left">Beranda</h4>
              <ul class="breadcrumbs pull-left">
                <li><a href="admin_home">Data</a></li>
                <li><span>Data Pemilik</span></li>
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
	<?php foreach($tbl_pemilik as $u){ ?>
	<form action="<?php echo base_url().'admin_home/update'; ?>" method="post">
		          <div class="form-group row">

          <div class="col-6">
            <h6>ID Pemilik</h6>
            <input name="id_pemilik" maxlength="5" class="form-control" type="read_only" value="<?php echo $u->id_pemilik ?>">
          </div>

          <div class="col-6">
            <h6>Nama Pemilik Hewan</h6>
            <input name="nama_pemilik" class="form-control" type="text" value="<?php echo $u->nama_pemilik ?>">
          </div>
        </div>
          
          <div class="form-group">
              <h6>Alamat</h6>
              <textarea name="alamat"  class="form-control"><?php echo $u->alamat ?></textarea>
          </div>
          
          <div class="form-group">
             <h6>No.HP</h6>
             <input name="no_hp" maxlength="12" onkeypress="return hanyaAngka(event)" class="form-control"  value="<?php echo $u->no_hp ?>">
          </div>

          <div class="form-group row">

          <div class="col-6">
            <h6>Username</h6>
            <input name="username" class="form-control" type="text" value="<?php echo $u->username ?>">
          </div>

          <div class="col-6">
            <h6>Password</h6>
            <input name="password" class="form-control" type="Password" value="<?php echo $u->password ?>">
          </div>
        </div>


        <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
        <button type="reset"  class="btn btn-danger">Hapus <i class="fa fa-trash"></i></button>
		<a href="<?php echo base_url().'admin_home'; ?>" class="btn btn-warning">Kembali<i class="fa fa-trash"></i></a>
        </div>
</form>
	<?php } ?><hr>
              </div>
            </div>
          </div>
        </div>

<!--
      <div class="main-content-inner">
        
        

        <div class="row mt-5 mb-5">
          <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="container">

//KONTEN
  <a href="<?php echo base_url().'admin_home/tambah'; ?>" class="btn btn-success text-justify m-2" data-toggle="modal" data-target="#dataHewan">+ Tambah Data</a>

  <div class="market-status-table mt-4">
  <div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="align-middle text-center">No</th>
                          <th scope="col" class="align-middle text-center">ID Pemilik</th>
                          <th scope="col" class="align-middle text-center">Nama Pemilik</th>
                          <th scope="col" class="align-middle text-center">Alamat</th>
                          <th scope="col" class="align-middle text-center">No HP</th>
                          <th scope="col" class="align-middle text-center">Username</th>
                          <th scope="col" class="align-middle text-center" colspan="2">Aksi</th>
                        </tr>
    </thead>
    <?php 
    $no = 1;
    foreach($tbl_pemilik as $u){ 
    ?>
    <tr>
      <td><?php echo $u->id_pemilik ?></td>
      <td><?php echo $u->nama_pemilik ?></td>
      <td><?php echo $u->alamat ?></td>
      <td><?php echo $u->no_hp ?></td>
      <td><?php echo $u->username ?></td>
      <td>

            <a href="<?php echo base_url().'admin_home/edit/'.$u->id_pemilik; ?>">ugugjhghj</a>
                              <?php echo base_url().'admin_home/hapus/'.$u->id_pemilik; ?>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
-->

        <!-- market value area end -->
        <!-- row area start -->
        <!-- row area end -->
        <!-- row area start-->

<?php $this->load->view('layout_admin/footer');?>

  <!-- page container area end -->
  <!-- offset area start -->
<!--
//form input
<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Pemilik Hewan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

//FORMMMMM       
        <form id="formtambahdatapemilik"  method="post">
        <div class="form-group">
            <h6>ID Pemilik Hewan</h6>
            <input maxlength="5" class="form-control" type="text" placeholder="Masukkan ID Pemilik" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
            <h6>Nama Pemilik Hewan</h6>
            <input class="form-control" type="text" placeholder="Masukkan Nama" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
          
          <div class="form-group">
              <h6>Alamat</h6>
              <textarea  class="form-control" placeholder="Masukkan Alamat" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
          </div>

          
          <div class="form-group">
             <h6>No.HP</h6>
             <input maxlength="12" onkeypress="return hanyaAngka(event)" class="form-control"  placeholder="Masukkan No.HP" id=""
             required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
            <h6>Username</h6>
            <input class="form-control" type="text" placeholder="Masukkan Username" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
            <h6>Password</h6>
            <input class="form-control" type="Password" placeholder="Masukkan Password" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" form="formtambahdatapemilik" class="btn btn-success">Tambah <i class="fa fa-plus ml-1"></i></button>
        <button type="reset" form="formtambahdatapemilik" class="btn btn-danger">Hapus <i class="fa fa-trash"></i></button>
      </div>
    </div>
  </div>
</div>

//form Edit
<div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Data Pemilik Hewan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

//FORMMMMM        
        <form id="formtambahdatapemilik">
        <div class="form-group">
            <h6>ID Pemilik Hewan</h6>
            <input maxlength="5" class="form-control" type="text" placeholder="Masukkan ID Pemilik" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
            <h6>Nama Pemilik Hewan</h6>
            <input class="form-control" type="text" placeholder="Masukkan Nama" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
          
          <div class="form-group">
              <h6>Alamat</h6>
              <textarea  class="form-control" placeholder="Masukkan Alamat" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
          </div>

          
          <div class="form-group">
             <h6>No.HP</h6>
             <input maxlength="12" onkeypress="return hanyaAngka(event)" class="form-control"  placeholder="Masukkan No.HP" id=""
             required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" form="formeditdatapemilik" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
        <button type="reset" form="" class="btn btn-danger">Batal <i class="fa fa-close"></i></button>
      </div>
    </div>
  </div>
</div>
-->

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