<section class="content">
	<div class="container-fluid">
		<!-- Basic Examples -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							<?php
                                            if($stat == 'new'){
                                                echo "Add Kos";
                                            }
                                            else {
                                                echo "Edit Kos";
                                            }
                                        ?>
						</h2>

					</div>
					<div class="body">
						<!-- Horizontal Layout -->
						<form action="<?php echo site_url('User/save_kos')?>" method="POST" class="form-horizontal"
							role="form" enctype="multipart/form-data">
							<input type="hidden" name="id_kos" value="<?=$id_kos ?>" class="form-control">
							<input type="hidden" name="stat" value="<?=$stat ?>" class="form-control">
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="nama">Nama</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" name="nama" id="nama" class="form-control"
												placeholder="Masukan Nama Kosan" required>
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="jenis">Jenis Kos</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<select class="form-control show-tick" name="tipe" required>
											<option value="Putra">Putra</option>
											<option value="Putri">Putri</option>
											<option value="Campur">Campur</option>
										</select>
									</div>
								</div>
							</div>

							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="image">Upload Gambar</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<input type="file" name="image_header" required>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="deskripsi">Deskripsi</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<textarea rows="4" name="deskripsi" class="form-control no-resize"
												placeholder="Deskripsikan kosanmu dengan jelas..." required></textarea>
										</div>
									</div>
								</div>
							</div>

							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="alamat">Alamat</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<textarea rows="4" name="alamat" class="form-control no-resize"
												placeholder="Deskripsikan alamat kosanmu dengan jelas..."
												required></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="kota">kota</label>
								</div>

								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
											<select class="form-control show-tick" name="kota" required>
												<option value="Banda Aceh">Banda Aceh</option>
												<option value="Langsa">Langsa</option>
												<option value="Lhokseumawe">Lhokseumawe</option>
												<option value="Sabang">Sabang</option>
												<option value="Subulussalam">Subulussalam</option>
												<option value="Denpasar">Denpasar</option>
												<option value="Pangkalpinang">Pangkalpinang</option>
												<option value="Cilegon">Cilegon</option>
												<option value="Serang">Serang</option>
												<option value="Tangerang Selatan">Tangerang Selatan</option>
												<option value="Tangerang">Tangerang</option>
												<option value="Bengkulu">Bengkulu</option>
												<option value="Yogyakarta">Yogyakarta</option>
												<option value="Gorontalo">Gorontalo</option>
												<option value="Kota Administrasi Jakarta Barat">Kota Administrasi
													Jakarta Barat</option>
												<option value="Kota Administrasi Jakarta Pusat">Kota Administrasi
													Jakarta Pusat</option>
												<option value="Kota Administrasi Jakarta Selatan">Kota Administrasi
													Jakarta Selatan</option>
												<option value="Kota Administrasi Jakarta Timur">Kota Administrasi
													Jakarta Timur</option>
												<option value="Kota Administrasi Jakarta Utara">Kota Administrasi
													Jakarta Utara</option>
												<option value="Sungai Penuh">Sungai Penuh</option>
												<option value="Jambi">Jambi</option>
												<option value="Bandung">Bandung</option>
												<option value="Bekasi">Bekasi</option>
												<option value="Bogor">Bogor</option>
												<option value="Cimahi">Cimahi</option>
												<option value="Cirebon">Cirebon</option>
												<option value="Depok">Depok</option>
												<option value="Sukabumi">Sukabumi</option>
												<option value="Tasikmalaya">Tasikmalaya</option>
												<option value="Banjar">Banjar</option>
												<option value="Magelang">Magelang</option>
												<option value="Pekalongan">Pekalongan</option>
												<option value="Salatiga">Salatiga</option>
												<option value="Semarang">Semarang</option>
												<option value="Surakarta">Surakarta</option>
												<option value="Tegal">Tegal</option>
												<option value="Batu">Batu</option>
												<option value="Blitar">Blitar</option>
												<option value="Kediri">Kediri</option>
												<option value="Madiun">Madiun</option>
												<option value="Malang">Malang</option>
												<option value="Mojokerto">Mojokerto</option>
												<option value="Pasuruan">Pasuruan</option>
												<option value="Probolinggo">Probolinggo</option>
												<option value="Surabaya">Surabaya</option>
												<option value="Pontianak">Pontianak</option>
												<option value="Singkawang">Singkawang</option>
												<option value="Banjarbaru">Banjarbaru</option>
												<option value="Banjarmasin">Banjarmasin</option>
												<option value="Palangka Raya">Palangka Raya</option>
												<option value="Balikpapan">Balikpapan</option>
												<option value="Bontang">Bontang</option>
												<option value="Samarinda">Samarinda</option>
												<option value="Tarakan">Tarakan</option>
												<option value="Batam">Batam</option>
												<option value="Tanjungpinang">Tanjungpinang</option>
												<option value="Bandar Lampung">Bandar Lampung</option>
												<option value="Metro">Metro</option>
												<option value="Ternate">Ternate</option>
												<option value="Tidore Kepulauan">Tidore Kepulauan</option>
												<option value="Ambon">Ambon</option>
												<option value="Tual">Tual</option>
												<option value="Bima">Bima</option>
												<option value="Mataram">Mataram</option>
												<option value="Kupang">Kupang</option>
												<option value="Sorong">Sorong</option>
												<option value="Jayapura">Jayapura</option>
												<option value="Dumai">Dumai</option>
												<option value="Pekanbaru">Pekanbaru</option>
												<option value="Makassar">Makassar</option>
												<option value="Palopo">Palopo</option>
												<option value="Parepare">Parepare</option>
												<option value="Palu">Palu</option>
												<option value="Baubau">Baubau</option>
												<option value="Kendari">Kendari</option>
												<option value="Bitung">Bitung</option>
												<option value="Kotamobagu">Kotamobagu</option>
												<option value="Manado">Manado</option>
												<option value="Tomohon">Tomohon</option>
												<option value="Bukittinggi">Bukittinggi</option>
												<option value="Padang">Padang</option>
												<option value="Padang Panjang">Padang Panjang</option>
												<option value="Pariaman">Pariaman</option>
												<option value="Payakumbuh">Payakumbuh</option>
												<option value="Sawahlunto">Sawahlunto</option>
												<option value="Solok">Solok</option>
												<option value="Lubuklinggau">Lubuklinggau</option>
												<option value="Pagar Alam">Pagar Alam</option>
												<option value="Palembang">Palembang</option>
												<option value="Prabumulih">Prabumulih</option>
												<option value="Binjai">Binjai</option>
												<option value="Gunungsitoli">Gunungsitoli</option>
												<option value="Medan">Medan</option>
												<option value="Padangsidimpuan">Padangsidimpuan</option>
												<option value="Pematangsiantar">Pematangsiantar</option>
												<option value="Sibolga">Sibolga</option>
												<option value="Tanjungbalai">Tanjungbalai</option>
												<option value="Tebing Tinggi">Tebing Tinggi</option>

											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="harga">Harga</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="harga" class="form-control" name="harga"
												placeholder="Masukan Harga" required>
										</div>
									</div>
								</div>
							</div>


							<div class="row clearfix">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
									<label for="jenis">Status</label>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
									<div class="form-group">
										<select class="form-control show-tick" name="status" required>
											<option value="1">Publish</option>
											<option value="0">Draft</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
									<input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit">
								</div>

								<br>
								<div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
									<a
										href="<?php echo base_url('User/data_kos/'.$this->session->userdata('id_user'))?>">
										<button type="button" class="btn btn-danger waves-effect">Cancel</button>
									</a>
									<div>
									</div>
						</form>
						<!-- #END# Horizontal Layout -->

					</div>
				</div>
			</div>
		</div>
		<!-- #END# Basic Examples -->
	</div>
</section>
