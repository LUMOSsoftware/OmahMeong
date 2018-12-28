  <body>

    <!-- Static navbar -->

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
		<img src="assets/img/logo.jpg" alt="logo" align='left' height="100px" width="100px">

				<h3 align='center'>Rumah Sakit Bina Sehat</h3>
				<p align='center'>Jl. Jayanegara No.7, Kabupaten Jember, Jawa Timur 68131</p>
			<div class="row">
			<table width="100%">
			<tr bgcolor="#7EC0EE" align="center">
				<td>Kartu Indeks Berobat (KIB)</td>
			</tr>
			</table>
			<?php
			$norm = $_GET['id'];
			$data = mysqli_query ("select * from tbl_pasien where no_rm='$norm'");
			while($anu = mysqli_fetch_array($data))
			{
			?>
				<p align="right">No. RM : <?php echo $anu['no_rm']; ?></p>

					<table width="100%">
						<tr>
							<td width="25%">Nama Pemilik</td><td>:</td><td> <?php echo $anu['nama_pemilik']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td><td>:</td><td><?php echo $anu['alamat'];?></td>
						</tr>
						<tr>
							<td>No Telp</td><td>:</td><td><?php echo $anu['no_tlp'];?></td>
						</tr>
						<tr>
							<td>Nama Hewan</td><td>:</td><td><?php echo $anu['nama_hewan'];?></td>
						</tr>
				<?php
			}
				?>
					</table>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	<script>
		window.print();
	</script>
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>