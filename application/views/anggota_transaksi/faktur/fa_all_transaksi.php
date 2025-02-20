<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<style type="text/css">
		h1 {
			font-weight: bold;
			font-size: 14pt;
			text-align: center;  
		}
		p {
			font-size: 11pt;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}
		table th {
			font-size: 11pt;
			padding: 3px 3px;
			background-color: #b4ddc0;
			border: 1px;
		}

		table td {
			font-size: 11pt;
			padding: 3px 3px;
			border: 1px #000000;
		}
	</style>

</head>
<body>
	<img src="<?= base_url('/assets/img/');?>logokoperasi.png" style="position: absolute; width: 80px; height: 80px;">
	<table style="width: 100%; border-style: 0%;">
		<tr>
			<td align="center">
				<h1 style="line-height: 1.6; font-weight: bold;">
					Data Transaksi Keuangan Anggota <br>
					Koperasi Syariah Bundo Saiyo Padang
				</h1>
			</td>
		</tr>
	</table>
	<small><center><i>Jl. SMA 13 Tanjung Aur, Balai Gadang, Koto Tangah, Kota Padang, Sumatera Barat &nbsp; &nbsp; HP : 081363455700</i></center></small>
	<hr>
	<table>
		<div class="col-sm-6">
			<br>
			<div>
				<strong><?= $user['name']; ?></strong>
			</div>
			<div><?= $user['alamat']; ?></div>
			<div>Email: <?= $user['email']; ?></div>
			<div>Phone: <?= $user['no_hp'];?></div>
		</div>
	</table>
	<br>	
	<div class="card-body">
		<div class="table-responsive table-sm" style="height: 250px;overflow: auto;">
			<table class="table table-bordered table-hover table-xs" border="1" cellspacing="0" width="100%">
				<thead class="thead-light">
					<tr>
						<th scope="col-sm" style="text-align: center;">#</th>
						<th style="text-align: center;">Nomor Transaksi</th>
						<th style="text-align: center;">Jenis Simpanan</th>
						<th style="text-align: center;">Tanggal Bayar</th>
						<th style="text-align: center;">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i=1;
					if (is_array($bukuTransaksi) || is_object($bukuTransaksi))
					{
						foreach ($bukuTransaksi as $fsa) :
							
								?>
								<tr>
									<td scope="row" width="3%" style="text-align: center;"><?= $i; ?></td>
									<td width="5%" style="text-align: center;"><?= $fsa->id_transaksi; ?></td>
									<td width="15%" style="text-align: center;"><?= $fsa->jenis_transaksi; ?></td>
									<td width="15%" style="text-align: center;"><?= $fsa->tanggal; ?></td>
									<td width="10%" style="text-align: center;">
										<?php
										if($fsa->validasi == 1) 
										{
											echo "Disetujui";
										} else {
											echo "Ditolak";
										}
										?>
									</td>
								</tr>
								<?php $i++;?>
						<?php endforeach; ?>
					<?php } ?>	
				</tbody>
			</table>	
		</div>
	</div>

	<div class="col-md-3 col-md-offset-5">
		<p style="text-align: right;">Padang, <?php $tgl=date('d M Y'); echo $tgl; ?> &nbsp; &nbsp; &nbsp;  
			<br>
			<p style="text-align: right;">Pimpinan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
			<p><br></p><br>
			<p style="text-align: right;"><b><u>Nofyelni, S.Pd</u></b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.js"></script>
		<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="<?= base_url('assets/'); ?>js/sb-admin-2.js"></script>

		<script src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>

		<!-- Page level plugins -->
		<script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>


		<!-- Script datatable -->
		<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
	</body>
	</html>


