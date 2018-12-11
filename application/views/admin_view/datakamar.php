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
              <h4 class="page-title pull-left">Data</h4>
              <ul class="breadcrumbs pull-left">
                <li><a href="admin_home">Data</a></li>
                <li><span>Data Hewan</span></li>
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
              <div class="card-body text-right">
                <a href="#" class="btn btn-success text-justify m-2" data-toggle="modal" data-target="#dataHewan">+ Tambah Data</a>
                <div class="d-sm-flex justify-content-between align-items-center">
                  <h4 class="header-title mb-0">Data Kamar</h4>
                  <select class="custome-select border-0 pr-3">
                    <option selected="">Last 24 Hours</option>
                    <option value="0">01 July 2018</option>
                  </select>
                </div>
                              <div class="market-status-table mt-4">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="text-center">ID Kamar</th>
                          <th scope="col" class="text-center">Nomor Kamar</th>
                          <th scope="col" class="text-center">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" class="text-center">1</th>
                          <td class="text-center">2</td>
                          <td><center>
                          <a href="#"  class="btn btn-primary text-center">Edit</a>
                          <a href="#"  class="btn btn-danger text-center" >Hapus</a>
                        </center>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-center">1</th>
                          <td class="text-center">2</td>
                          <td><center>
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Hapus</a>
                          </center>
                          </td>
                        </tr>
                      </tbody>
                      <tbody></tbody>
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
<!--form input-->
<div class="modal fade" id="dataHewan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Kamar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="" id="formtambahdatakamar">
        <div class="form-group">
            <h5 class="modal-title w-100 font-weight-bold text-center">Data Kamar</h5><br>
            <h6>ID Kamar</h6>
            <input name="" maxlength="5" class="form-control" type="text" placeholder="Masukkan ID Kamar" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
            <h6>Nomor Kamar</h6>
            <input  name="" class="form-control" type="text" placeholder="Masukkan Kamar" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          </div>
    </form>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" form="formtambahdatahewan" class="btn btn-success">Tambah <i class="fa fa-plus ml-1"></i></button>
      </div>
    </div>
  </div>
</div>



  <!-- offset area end -->
  <!-- jquery latest version -->
  
<?php $this->load->view('layout_admin/jquery');?>