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
                <li><span>Kategori Tindakan</span></li>
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
  <?php foreach($tbl_pasien as $u){ ?>
  <form action="<?php echo base_url().'admin_data_pasien/update';?>" method="post">

           <div class="form-group row">
          <div class="col-6">
            <h6>No Reg</h6>
            <input name="no_rm" maxlength="6" class="form-control" type="read_only" value="<?php echo $u->no_rm ?>" readonly>
          </div>
         </div>
          <div class="form-group row">
          <div class="col-6">
            <h6>Nama Pemilik</h6>
            <input name="nama_pemilik" class="form-control" type="text" value="<?php echo $u->nama_pemilik ?>" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
          </div>
          
          <div class="form-group">
              <h6>Alamat</h6>
              <textarea name="alamat"  class="form-control" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                <?php echo $u->alamat ?>
              </textarea>
          </div>
          
          <div class="form-group">
             <h6>No.Telp</h6>
             <input name="no_tlp" maxlength="12" onkeypress="return hanyaAngka(event)" class="form-control"  value="<?php echo $u->no_tlp ?>" id=""
             required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group row">
          <div class="col-6">
            <h6>Nama Hewan</h6>
            <input name="nama_hewan" class="form-control" type="text" value="<?php echo $u->nama_hewan ?>" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="col-6">
            <h6>Umur Hewan (Bulan)</h6>
            <input name="umur_hewan" onkeypress="return hanyaAngka(event)" class="form-control" maxlength="2" value="<?php echo $u->umur_hewan ?>" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
        </div>

          <div class="form-group">
              <h6>Warna / Ciri Spesifik Hewan</h6>
              <textarea name="ciri_spesifik"  class="form-control">
                <?php echo $u->ciri_spesifik ?>
              </textarea>
          </div>

          <div class="form-group row">
          <div class="col-6">
            <h6>Jenis Hewan</h6>
            <input name="jenis_hewan" class="form-control" type="text" value="<?php echo $u->jenis_hewan ?>" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="col-6">
            <h6>Jenis Kelamin Hewan</h6>
            <select  name="jk_hewan" class="form-control form-control-lg" value="<?php echo $u->jk_hewan?>"
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" >
                <option>Jantan</option>
                <option>Betina</option>
            </select >
          </div>


        <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
        <button type="reset" class="btn btn-danger">Reset <i class="fa fa-trash"></i></button>
        <a href="<?php echo base_url().'admin_data_pasien'; ?>" class="btn btn-warning">Kembali<i class="fa fa-trash"></i></a>
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