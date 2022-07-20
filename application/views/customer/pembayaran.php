<div class="container mt-5">
	<div class="row mt-5">
		<div class="col-md-7">

			<div class="card " style="margin-top: 115px;">
				<div class="card-header">

					<h4> Invoice Pembayaran</h4>
				</div>
				<div class="card-body">

					<table class="table table-striped">
						<?php foreach ($transaksi as $dt) : ?>
						<tr>
							<td>Nama penyewa</td>
							<td>:</td>
							<td> <?= $dt->fullname ?> </td>
						</tr>
						<tr>
							<td>Kos yang di sewa</td>
							<td>:</td>
							<td> <?= $dt->nama ?> </td>
						</tr>
						<tr>
							<td>Harga</td>
							<td>:</td>
							<td>Rp. <?= number_format($dt->harga, 0, ',', '.') ?> </td>
						</tr>
						<tr>
							<td>Tanggal mulai sewa</td>
							<td>:</td>
							<td> <?= $dt->tgl_sewa ?> </td>
						</tr>
						<tr>
							<td>Tanggal Selesai </td>
							<td>:</td>
							<td> <?= $dt->tanggal_selesai ?> </td>
						</tr>
						<tr>
							<?php
                                $mulai = strtotime($dt->tgl_sewa);
                                $selesai = strtotime($dt->tanggal_selesai);
                                $jmlh = abs(($mulai - $selesai) / (60 * 60 * 1 * 365));
                                ?>

							<td>Lama Sewa </td>
							<td>:</td>
							<td> <?php if (abs(($mulai - $selesai) / (60 * 60 * 24 * 365)) == !',') {
                                            echo  $jmlh .   ' Bulan' ?>
								<?php } else {
                                            $mulai = strtotime($dt->tgl_sewa);
                                            $selesai = strtotime($dt->tanggal_selesai);
                                            $jmlh = abs(($mulai - $selesai) / (60 * 60 * 24 * 30));

                                            echo $jmlh . ' bulan'

                                    ?>

								<?php } ?>
							</td>

						</tr>
						<tr>
							<td>Jumlah Pembayaran </td>
							<td>:</td>
							<td>
								<?php if ($jmlh == 'tahun') {
                                    ?>
								<button class="badge-pill badge-info"> Rp.
									<?= number_format($dt->harga * $jmlh, 0, ',', '.')  ?> </button></td>
							<?php } else { ?>
							<button class="badge-pill badge-info"> Rp.
								<?= number_format(($dt->harga / 1) * $jmlh, 0, ',', '.')  ?> </button></td>
							<?php } ?>
						<tr>
							<td></td>
							<td></td>
							<td> <a href="<?= base_url('customer/transaksi/print_invoice/' . $dt->id_booking) ?>"
									class="btn btn-info mt-3">Print Invoice</a> </td>
						</tr>

					</table>
				</div>

				<?php endforeach; ?>
			</div>
		</div>
		<div class="col-md-4 " style="margin-top: 117px;">
			<div class="card border-secondary">
				<div class="card-header alert alert-secondary p-1 text-center">
					<p>Pembayaran</p>
				</div>
				<div class="card-body p-3">
					<p>Silahkan melakukan pembayaran ke rekening dibawah ini. Kemudian, jangan lupa upload bukti
						pembayaran anda</p>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"> Bank BCA 11411411311331331</li>
						<li class="list-group-item"> Bank BRI 11411413188311811</li>
						<li class="list-group-item"> Bank BNI 11411413188311811</li>
					</ul>

					<?php if (empty($dt->bukti_pembayaran)) { ?>
					<button type="submit" class="btn btn-sm btn-outline-info mt-2" data-toggle="modal"
						data-target="#exampleModal" style=" color: blue;"> Upload Bukti Pembayaran </button>
					<form action="<?= base_url('customer/transaksi/pembayaran_aksi') ?>" method="POST"
						enctype="multipart/form-data">
						<input type="hidden" name="id_booking" class="form-control" value="<?= $dt->id_booking ?>">
						<input type="file" name="bukti_pembayaran" class="form-control">
						<button type="submit" class="btn btn-warning text text-light">Submit</button>
						<?php } elseif ($dt->status_pembayaran == '0') { ?>
						<button type="submit" class="btn btn-sm btn-outline-info mt-2" style=" color: blue;"> Menunggu
							Konfirmasi </button>
						<?php } elseif ($dt->status_pembayaran == '1') { ?>
						<button type="submit" class="btn btn-sm btn-outline-info mt-2" style=" color: blue;">Transaksi
							Sukses </button>
						<?php } ?>


				</div>

			</div>
		</div>
	</div>
</div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="#exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Masukan Bukti Pembayaran</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>


		</div>
		</form>
	</div>
</div>
</div>