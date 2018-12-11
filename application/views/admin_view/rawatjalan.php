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

<?php $this->load->view('layout_admin/nav1');?>

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
              <h4 class="page-title pull-left">Catatan Medis</h4>
              <ul class="breadcrumbs pull-left">
                <li><a href="admin_rawat_jalan">Catatan Medis</a></li>
                <li><span>Rawat Jalan</span></li>
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
                <a href="#" class="btn btn-success text-justify m-2" data-toggle="modal" data-target="#dataRawatJalan">+ Tambah Data</a>
                <div class="d-sm-flex justify-content-between align-items-center">
                  <h4 class="header-title mb-0">Data Rawat Jalan</h4>
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
                          <th scope="col" class="align-middle text-center">No.</th>
                          <th scope="col" class="align-middle text-center">ID Rawat Jalan</th>
                          <th scope="col" class="align-middle text-center">ID Layanan</th>
                          <th scope="col" class="align-middle text-center">Nama Layanan</th>
                          <th scope="col" class="align-middle text-center">ID Pemilik</th>
                          <th scope="col" class="align-middle text-center">Nama Pemilik</th>
                          <th scope="col" class="align-middle text-center">ID Hewan</th>
                          <th scope="col" class="align-middle text-center">Nama Hewan</th>
                          <th scope="col" class="align-middle text-center">Anamnesa</th>
                          <th scope="col" class="align-middle text-center">Tanggal</th>
                          <th scope="col" class="align-middle text-center">Keterangan</th>
                          <th scope="col" class="align-middle text-center" colspan="2">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" class="text-center">1</th>
                          <td class="text-left">Mark</td>
                          <td class="text-center">Jl. Sumatra No.2</td>
                          <td class="text-center">081847988723</td>
                          <td class="text-center">Data</td>
                          <td class="text-center">Data</td>
                          <td class="text-center">Data</td>
                          <td class="text-center">Data</td>
                          <td class="text-center">Data</td>
                          <td class="text-center">Data</td>
                          <td class="text-center">Data</td>
                          <td class="text-center"><a href="#" class="btn btn-primary text-center" data-toggle="modal" data-target="#edit_dataRawatJalan">Edit</a></td>
                          <td class="text-center"><a href="#" class="btn btn-danger text-center">Hapus</a></td>
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
<div class="modal fade" id="dataRawatJalan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Rawat Jalan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="" id="formtambahdatahewan">
        <div class="form-group">
            <h5 class="modal-title w-100 font-weight-bold text-center">Data Hewan</h5><br>
            <h6>ID Hewan</h6>
            <input name="" maxlength="5" class="form-control" type="text" placeholder="Masukkan ID Hewan" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
            <h6>Nama Hewan</h6>
            <input  readonly="" name="" class="form-control" type="text" placeholder="Masukkan Nama Hewan" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
          
          <hr class="my-4">
          <h5 class="modal-title w-100 font-weight-bold text-center">Data Pemilik Hewan</h5><br>

          <div class="form-group">
              <h6>ID Pemilik</h6>
              <input name="" maxlength="5" class="form-control" placeholder="Masukkan ID Pemilik" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <h6>Nama Pemilik</h6>
              <input readonly="" name="" class="form-control" placeholder="Nama Pemilik" id="">
          </div>

          <hr class="my-4">
          <h5 class="modal-title w-100 font-weight-bold text-center">Data Rawat Jalan</h5><br>

          <div class="form-group">
              <h6>ID Rawat Jalan</h6>
              <input name="" maxlength="5" class="form-control" placeholder="Masukkan ID Pemilik" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <h6>ID Layanan</h6>
              <input name="" maxlength="5" class="form-control" placeholder="Masukkan ID Pemilik" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <h6>Nama Layanan</h6>
              <input readonly="" name="" class="form-control" placeholder="Nama Layanan"
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" id="">
          </div>

           <div class="form-group">
              <h6>Tanggal</h6>
              <input type="datetime-local" name="" class="form-control"
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"  id="">
          </div>

          <div class="form-group">
              <h6>Anamnesa</h6>
              <textarea  class="form-control" placeholder="Masukkan Anamnesa" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
          </div>
         

          <div class="form-group">
              <h6>Keterangan</h6>
              <textarea  class="form-control" placeholder="Masukkan Keterangan" id=""></textarea>
          </div>

          </div>
    </form>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" form="formtambahdataRawatInap" class="btn btn-success">Tambah <i class="fa fa-plus ml-1"></i></button>
        <button type="reset" form="formtambahdataRawatInap" class="btn btn-danger">Hapus <i class="fa fa-trash"></i></button>
      </div>
    </div>
  </div>

<!--form EDIT-->
<div class="modal fade" id="edit_dataRawatJalan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Data Rawat Jalan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="" id="formeditdatarawatinap">
        <div class="form-group">
      <h5 class="modal-title w-100 font-weight-bold text-center">Data Hewan</h5><br>
            <h6>ID Hewan</h6>
            <input name="" maxlength="5" class="form-control" type="text" placeholder="Masukkan ID Hewan" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
            <h6>Nama Hewan</h6>
            <input  readonly="" name="" class="form-control" type="text" placeholder="Masukkan Nama Hewan" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
          
          <hr class="my-4">
          <h5 class="modal-title w-100 font-weight-bold text-center">Data Pemilik Hewan</h5><br>

          <div class="form-group">
              <h6>ID Pemilik</h6>
              <input name="" maxlength="5" class="form-control" placeholder="Masukkan ID Pemilik" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <h6>Nama Pemilik</h6>
              <input readonly="" name="" class="form-control" placeholder="Nama Pemilik" id="">
          </div>


          <hr class="my-4">
          <h5 class="modal-title w-100 font-weight-bold text-center">Data Rawat Jalan</h5><br>

          <div class="form-group">
              <h6>ID Rawat Jalan</h6>
              <input name="" maxlength="5" class="form-control" placeholder="Masukkan ID Pemilik" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <h6>ID Layanan</h6>
              <input name="" maxlength="5" class="form-control" placeholder="Masukkan ID Pemilik" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <h6>Nama Layanan</h6>
              <input readonly="" name="" class="form-control" placeholder="Nama Layanan"
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" id="">
          </div>

           <div class="form-group">
              <h6>Tanggal</h6>
              <input type="datetime-local" name="" class="form-control"
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"  id="">
          </div>

          <div class="form-group">
              <h6>Anamnesa</h6>
              <textarea  class="form-control" placeholder="Masukkan Anamnesa" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
          </div>
         

          <div class="form-group">
              <h6>Keterangan</h6>
              <textarea  class="form-control" placeholder="Masukkan Keterangan" id=""></textarea>
          </div>

          </div>
    </form>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" form="formeditdatarawatjalan" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
        <button type="reset" form="formeditdatarawatjalan" class="btn btn-danger">Batal <i class="fa fa-close"></i></button>
      </div>
    </div>
  </div>
</div>


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