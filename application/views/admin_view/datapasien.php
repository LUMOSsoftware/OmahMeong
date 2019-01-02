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
          <div class="user-profile pull-right">
              <img class="avatar user-thumb" src="<?php echo base_url();?>assets/admin/images/author/avatar.png" alt="avatar">
              <h4 class="user-name dropdown-toggle" data-toggle="dropdown">ADMIN<i class="fa fa-angle-down"></i></h4>
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
                <li><a href="admin_home">Data Pasien</a></li>
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


  <h2 class="text-center">Data Pasien</h2><hr>

                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Dark</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start Date</th>
                                                <th>salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>29</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>21</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>29</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>21</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->

<form action="<?php echo base_url().'admin_data_pasien/cari'; ?>">
  <input type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="q" value="Cari">
</form>

  <div class="market-status-table mt-4">
  <div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="align-middle text-center">No</th>
                          <th scope="col" class="align-middle text-center">No RM</th>
                          <th scope="col" class="align-middle text-center">Nama Pemilik</th>
                          <th scope="col" class="align-middle text-center">Alamat</th>
                          <th scope="col" class="align-middle text-center">No Telp</th>
                          <th scope="col" class="align-middle text-center">Nama Hewan</th>
                          <th scope="col" class="align-middle text-center">Umur Hewan</th>
                          <th scope="col" class="align-middle text-center">Warna / Ciri-Ciri Spesifik Hewan</th>
                          <th scope="col" class="align-middle text-center">Jenis Hewan</th>
                          <th scope="col" class="align-middle text-center">Jenis Kelamin Hewan</th>
                          <th scope="col" class="align-middle text-center">Tanggal Daftar</th>
                          <th scope="col" class="align-middle text-center" colspan="2">Aksi</th>
                        </tr>
    </thead>
    <tbody>


<!--
      <?php
            $no=1;
            //$list=mysql_query($db, "select pendaftaran.id_pendaftaran, pasien.nama_pasien, pasien.nomor_rm, pendaftaran.poli from pasien, pendaftaran where pasien.nomor_rm=pendaftaran.nomor_rm");
            $data=mysql_query("select * from tbl_pasien order by no_rm DESC");
            while($anu=mysql_fetch_array($data)){
            ?>
            <tr>
              <td align="center"><?php echo $no++; ?></td> 
              <td><?php echo $anu['no_rm'];?></td>
              <td><?php echo $anu['nama_pemilik'];?></td>
              <td><?php echo $anu['alamat'];?></td>
              <td><?php echo $anu['no_tlp'];?></td>
              <td><?php echo $anu['nama_hewan'];?></td>
              <td><?php echo $anu['umur_hewan'];?></td>
              <td><?php echo $anu['ciri_spesifik'];?></td>
              <td><?php echo $anu['jenis_hewan'];?></td>
              <td><?php echo $anu['jk_hewan'];?></td>
              <td><?php echo $anu['tgl_daftar']; ?></td>
              <td><a href='kib.php?id=<?php  echo $anu['nomor_rm']; ?>'>Cetak Kartu Pasien</a></td>
            </tr>
            <?php } ?>
-->

    <?php 
    $no=1;
    foreach($tbl_pasien as $u){ 
    ?>
    <tr>
      <td class="text-center"><?php echo $u->no_rm ?></td>
      <td class="text-center"><?php echo $u->nama_pemilik ?></td>
      <td class="text-left align-middle"><?php echo $u->alamat ?></td>
      <td class="text-left align-middle"><?php echo $u->no_tlp ?></td>
      <td class="text-left align-middle"><?php echo $u->nama_hewan ?></td>
      <td class="text-left align-middle"><?php echo $u->umur_hewan ?></td>
      <td class="text-center"><?php echo $u->ciri_spesifik ?></td>
      <td class="text-center"><?php echo $u->jenis_hewan ?></td>
      <td class="text-center"><?php echo $u->jk_hewan ?></td>
      <td class="text-center"><?php echo $u->tgl_daftar ?></td>
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
<!--form input-->
<!--
<div class="modal fade" id="dataHewan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Hewan</h4>
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
            <input  name="" class="form-control" type="text" placeholder="Masukkan Nama Hewan" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
          
          <div class="form-group">
              <h6>Jenis Hewan</h6>
              <input name="" class="form-control" placeholder="Masukkan Jenis Hewan" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
             <h6>Jenis Kelamin Hewan</h6>
             <select name="" class="form-control form-control-lg" id="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
             <option selected>Jantan</option>
             <option value="1">Betina</option>
           </select>
          </div>

          <div class="form-group">
              <h6>Umur Hewan (Tahun)</h6>
              <input name="" maxlength="2" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="Masukkan Umur Hewan" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <h6>Ciri Spesifik</h6>
              <input name="" class="form-control" placeholder="Masukkan Ciri Spesifik Hewan" id=""
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

          </div>
    </form>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" form="formtambahdatahewan" class="btn btn-success">Tambah <i class="fa fa-plus ml-1"></i></button>
        <button type="reset" form="formtambahdatahewan" class="btn btn-danger">Hapus <i class="fa fa-trash"></i></button>
      </div>
    </div>
  </div>
</div>
--->

<!--form EDIT-->
<!--<div class="modal fade" id="edit_dataHewan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Data Hewan</h4>
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
            <input  name="" class="form-control" type="text" placeholder="Masukkan Nama Hewan" id=""
            required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>
          
          <div class="form-group">
              <h6>Jenis Hewan</h6>
              <input name="" class="form-control" placeholder="Masukkan Jenis Hewan" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
             <h6>Jenis Kelamin Hewan</h6>
             <select name="" class="form-control form-control-lg" id="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
             <option selected>Jantan</option>
             <option value="1">Betina</option>
           </select>
          </div>

          <div class="form-group">
              <h6>Umur Hewan (Tahun)</h6>
              <input name="" maxlength="2" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="Masukkan Umur Hewan" id=""
              required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
          </div>

          <div class="form-group">
              <h6>Ciri Spesifik</h6>
              <input name="" class="form-control" placeholder="Masukkan Ciri Spesifik Hewan" id=""
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

          </div>
    </form>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" form="formtambahdatahewan" class="btn btn-success">Simpan <i class="fa fa-save"></i></button>
        <button type="reset" form="formtambahdatahewan" class="btn btn-danger">Batal <i class="fa fa-close"></i></button>
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