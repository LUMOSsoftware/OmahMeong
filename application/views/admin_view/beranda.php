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
              <h4 class="page-title pull-left">Beranda</h4>
            </div>
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
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                              <img src="<?php echo base_url(); ?>assets/admin/images/icon/logo.png" alt="logo">
            </div>
            <div class="col-lg-4"></div>
          <div class="col-lg-12">
          <h3 class="hero-heading mb-0 text-center">Selamat datang di Website</h3>
          <h1 class="hero-heading mb-0 text-center">SI Klinik Hewan<br> OmahMeong</h1>
          <div class="row">
            <div class="col-lg-12">
              <p class="lead text-muted mt-4 mb-4 text-center">Animal Care Terpercaya di Jember</p><hr>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-justify">
          <h4 class="header-title">Penjelasan SI Klinik Hewan OmahMeong</h4>
        SI Klinik Hewan Berbasis Web  “Omah Meong Animal Care” di kembangkan untuk tujuan memenuhi kebutuhan klinik hewan khususnya dalam Memanajemen Pemeriksaan Pasien. Terutama dalam pemberian tindakan serta obat yang diberkan pada pasien. Sehingga dengan adanya SI Klinik Hewan Berbasis Web ini para admin dan dokter dapat dengan mudah melakukan pencatatan serta mencetak dokumen untuk khususnya dalam lingkup pemeriksaan pasien.
        </div>


              </div>
            </div>
          </div>
        </div>

                <div class="row">
                    <!-- nav tab start -->
                    <!-- left align tab start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                              <h4 class="header-title">Penjelasan Fitur Menu</h4>
                              
                                <div class="d-md-flex">
                                    <div class="nav flex-column nav-pills mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Pendaftaran Pasien</a>

                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Data Pasien</a>

                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pemeriksaan</a>

                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Transaksi</a>

                                        <a class="nav-link" id="v-pills-laporan-tab" data-toggle="pill" href="#v-pills-laporan" role="tab" aria-controls="v-pills-laporan" aria-selected="false">Laporan</a>

                                        <a class="nav-link" id="v-pills-daftarharga-tab" data-toggle="pill" href="#v-pills-daftarharga" role="tab" aria-controls="v-pills-daftarharga" aria-selected="false">Daftar Harga</a>

                                        <a class="nav-link" id="v-pills-admin-tab" data-toggle="pill" href="#v-pills-admin" role="tab" aria-controls="v-pills-admin" aria-selected="false">Akun Admin</a>

                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab text-justify">
                                            <p class="text-justify">Dalam Menu Pendaftaran Pasien, disediakan form untuk menambahkan data pasien baru yang akan didaftarkan. Dalam fitur ini admin dapat menginputkan data – data yang sesuai dengan kebutuhan pada form yang telah disediakan. Admin dapat menginputkan data seperti nama pasien, alamat, no tlp, nama hewan, umur hewan dan sebagainya.<br>
                                            Terdapat 2 tombol yang memiliki fungsi masing – masing pada fitur Pendaftaran Pasien ini, tombol seperti berikut :<br>
                                            <img src="<?php echo base_url(); ?>assets/admin/images/icon/btn.jpg"><br>
                                            <li>
                                              Tombol Tambah
                                            </li>
                                            Tombol ini berfungsi untuk menyimpan / menambahkan data yang sudah di input melalui form kedalam database sistem.<br><br>
                                            <li>
                                              Tombol Hapus
                                            </li>
                                            Tombol ini berfungsi untuk menghapus / reset data yang diinputkan pada form. Tombol ini dapat digunakan ketika admin salah mengisi form.<br><br>
                                            Setelah men-klik tombol Tambah maka akan muncul peringatan data berhasil di tambahkan.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab text-justify">
                                            <p class="text-justify">Menu Data Pasien ini berfungsi bagi admin untuk melihat data – data dari pasien yang sudah di daftarkan di menu Pendaftaran Pasien terlebih dahulu.<br>
                                            Terdapat 3 tombol yang memiliki fungsi berbeda – beda di setiap kolom berasarkan data pasien tersebut. yaitu :
                                            <li>
                                              Tombol Edit
                                            </li>
                                            Tombol ini berfungsi untuk mengedit data pasien jika dibutuhkan.<br><br>
                                            <li>
                                              Tombol Hapus
                                            </li>
                                            Tombol ini berfungsi untuk menghapus data pasien tertentu jika di butuhkan.<br><br>
                                            <li>
                                              Tombol Cetak
                                            </li>
                                            Tombol ini berfungsi untuk mencetak Kartu Pasien.<br><br>
                                            <h4>Cetak</h4>
                                            Setelah men-klik tombol cetak, maka pengguna secara otomatis mendownload file pdf untuk mencetak kartu pasien. Setelah anda mendownload dokumen tersebut maka hasilnya akan tercetak Kartu Pasien sesuai dengan data pasien yang anda pilih.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab text-justify">
                                            <p class="text-justify">Dalam Menu Pemeriksaan Admin dapat mengisi form untuk pemeriksaan pasien. Dalam form ini Admin harus mengetahui Nomor Registrasi Pasien terlebih dahulu untuk di inputkan ke dalam form. Kemudian dalam menu ini, dapat juga menambahkan tindakan serta obat yang diberikan kepada pasien.
</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab text-justify">
                                            <p class="text-justify">Dalam Menu Transaksi ini Admin dapat melihat detail transaksi dari hasil pemeriksaan terhadap pasien sebelumnya. Pada Menu ini akan muncul jumlah total biaya yang sesuai dengan hasil pemeriksaan.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-laporan" role="tabpanel" aria-labelledby="v-pills-laporan-tab text-justify">
                                            <p class="text-justify">Menu Laporan berfungsi untuk melihat laporan pemeriksaan yang sudah di lakukan sebelumnya.</p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-daftarharga" role="tabpanel" aria-labelledby="v-pills-daftarharga-tab text-justify">
                                            <p class="text-justify">Pada Menu Daftar Harga terdapat 2 sub Menu yaitu : <br>
                                            <li>
                                              List Tindakan
                                            </li>
                                            Pada sub menu ini berfungsi untuk melihat, mengedit, dan menambahkan daftar tindakan   serta harga setiap tindakan yang akan diterapkan pada klinik tersebut.<br><br>
                                             
                                            <li>
                                              List Obat
                                            </li>
                                            pada sub menu list obat ini berfungsi untuk melihat, mengedit, dan menambahkan daftar obat serta harga obat yang akan di gunakan pada klinik tersebut. <br><br>
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-admin" role="tabpanel" aria-labelledby="v-pills-admin-tab text-justify">
                                            <p class="text-justify">Akun Admin adalah menu yang berfungsi untuk melihat data akun admin yang dapat digunakan untuk masuk / login kedalam SI Klinik Hewan Berbasis Web ini. Dalam menu ini, juga dapat menambahkan akun baru.</p>
                                        </div>
                                    </div>
                                </div>

                    <!-- left align tab end -->
                </div>


      </div>

 
  



<?php $this->load->view('layout_admin/footer');?>

 

<?php $this->load->view('layout_admin/jquery');?>