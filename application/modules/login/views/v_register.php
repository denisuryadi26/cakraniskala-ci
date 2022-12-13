<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="row justify-content-center">
	<div class="col-lg-7">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">

					<div class="col-lg">
						<div class="p-5">
							<div class="card">
								<div class="card-header bg-info">
									<h4>Formulir Pendaftaran</h4>
								</div>
								<?= $this->session->flashdata('message'); ?>
								<form action="<?php echo base_url('login/regkom'); ?>" method="POST" enctype="multipart/form-data">
									<div class="card-body">
										<input type="date" name="tgl_daftar" class="form-control datepicker" value="" hidden >

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama">NAMA LENGKAP*</label>
												<!-- <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required> -->
												<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama" autofocus>
												<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group col-md-6">
												<label for="nohp">NO HANDPHONE</label>
												<input type="text" class="form-control form-control-user" id="nohp" name="nohp" placeholder="Nomor Handphone ...">
												<?= form_error('nohp', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>

										<div class="form-group">
											<label for="inputPassword4">ALAMAT</label>
											<input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat...">
											<?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="unlat">EMAIL</label>
												<input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email ...">
												<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
											</div>
											<!-- <input type="hidden" class="form-control datepicker" name="tgl_daftar" required> -->
											<div class="form-group col-md-6">
												<label for="agama">JABATAN</label>
												<select class="form-control " name="category" id="category">
													<option value="">Pilih Jabatan</option>
													<?php foreach ($role1 as $row) : ?>
														<option value="<?php echo $row['id']; ?>"> <?php echo $row['keterangan']; ?></option>
													<?php endforeach; ?>
												</select>
												<?= form_error('category', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="unlat">UNLAT</label>
												<select class="form-control" name="unlat" id="unlat">
													<option value="">No Selected</option>
													<?php foreach ($unlat as $row) : ?>
														<option value="<?php echo $row['id']; ?>"><?php echo $row['keterangan']; ?>
														</option>
													<?php endforeach; ?>
												</select>
												<?= form_error('category', '<small class="text-danger">', '</small>'); ?>
											</div>
											<!-- <input type="hidden" class="form-control datepicker" name="tgl_daftar" required> -->
											<div class="form-group col-md-6">
												<label for="agama">AGAMA</label>
												<select class="form-control " name="agama" id="agama">
													<option value="">Pilih Agama</option>
													<?php foreach ($agama as $row) : ?>
														<option value="<?php echo $row['id']; ?>"><?php echo $row['keterangan']; ?>
														</option>
													<?php endforeach; ?>
												</select>
												<?= form_error('category', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="tempat">TEMPAT LAHIR</label>
												<input type="text" class="form-control form-control-user" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir">
												<?= form_error('organisasi', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group col-md-6">
												<label for="tgl_lahir">TANGGAL LAHIR</label>
												<input type="date" class="form-control datepicker" id="tgl_lahir" name="tgl_lahir">
											</div>

										</div>

										<div class="form-group">
											<label for="inputPassword4">PROGRAM</label>
											<select class="form-control " name="program" id="program">
												<option value="">Pilih Program</option>
												<?php foreach ($program as $row) : ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['keterangan']; ?>
													</option>
												<?php endforeach; ?>
												<?= form_error('program', '<small class="text-danger">', '</small>'); ?>
											</select>
										</div>

										<div class="form-group">
											<label for="username">USERNAME</label>
											<input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username ...">
											<?= form_error('username', '<small class="text-danger">', '</small>'); ?>
										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="password">PASSWORD</label>
												<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
												<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
											</div>
											<div class="form-group col-md-6">
												<label for="password">MASUKAN KEMBALI</label>
												<input type="password" class="form-control form-control-user" id="repassword" name="repassword" placeholder="Repeat Password">
												<?= form_error('repassword', '<small class="text-danger">', '</small>'); ?>
											</div>

										</div>

										<div class="form-group">
											<label for="password" class="control-label">FOTO</label>
											<!-- <div class="col-md-9 col-sm-9"> -->
												<input type="file" class="form-control" required name="image">
											<!-- </div> -->
										</div>
									<div class="card-header bg-white">
										<!-- <button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">DAFTAR</button> -->
										<button type="submit" class="btn btn-primary btn-user btn-block"> DAFTAR</button>
									</div>
								</form>
								<br>
								<div class="text-center">
									<a href="<?= base_url(); ?>">Back to Dashboard</a>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-sm-6">

						<p align="center">
							<img src="assets/alur.png" align="center" width="600" style="max-width: 100%" />
						</p>

					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
