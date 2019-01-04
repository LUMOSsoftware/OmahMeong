  <div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
      <div class="sidebar-header">
        <div class="logo">
          <a href="admin_home"><img src="<?php echo base_url(); ?>assets/admin/images/icon/logo.png" alt="logo"></a>
        </div>
      </div>
      <div class="main-menu">
        <div class="menu-inner">
          <nav>
            <ul class="metismenu" id="menu">
              <li class="active">

                <a href="admin_beranda"><i class="fa fa-home"></i><span>Beranda</span></a>
              </li>
              <li class="">
                <a href="admin_home"><i class="fa fa-user-plus"></i><span>Pendaftaran Pasien</span></a>
              </li>
              <li>
                <a href="admin_data_pasien"><i class="fa fa-database""></i><span>Data Pasien</span></a>
              </li>
              <li>
                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-medkit"></i><span>Pemeriksaan</span></a>
              </li>
              <li>
                <a href="transaksi"><i class="fa fa-balance-scale"></i><span>Transaksi</span></a>
              </li>
              <li>
                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Laporan</span></a>
              </li>
              <li>
                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-list"></i><span>Daftar Harga</span></a>
                <ul class="collapse">
                  <li class=""><a href="admin_tindakan">Tindakan</a></li>
                  <li><a href="admin_obat">Obat</a></li>
                </ul>
              </li>
              <li>
                <a href="admin_akun" aria-expanded="true"><i class="fa fa-users"></i><span>Akun Admin</span></a>
              </li>
              <li>
                <a href="<?php echo base_url().'admin/logout'?>"><i ></i><span>KELUAR</span></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>