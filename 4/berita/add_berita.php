<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- bostrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- fontawesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	<!-- fancybox -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	<!-- datatable -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- sweetalert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script language='Javascript'>
		(
			function(window, location) {
				history.replaceState(null, document.title, location.pathname+"#!/history");
				history.pushState(null, document.title, location.pathname);
				window.addEventListener("popstate", function() {
					if(location.hash === "#!/history") {
						history.replaceState(null, document.title, location.pathname);
						setTimeout(function(){
							location.replace("../index.php");
						},0);
					}
				}, false);
			}
			(window, location));
		</script>
	</head>
	<body>
		<?php 
		include '../koneksi.php';
		if ($_GET['status'] == "sukses") {
			echo '<script language="javascript">Swal.fire("Sukses!","Data Berhasil Disimpan!","success").then(() => { window.location.href="add_berita.php"; });</script>';
		}

		if ($_GET['status'] == "hapus") {
			echo '<script language="javascript">Swal.fire("Sukses!","Data Berhasil Dihapus!","success").then(() => { window.location.href="add_berita.php"; });</script>';
		}

		if ($_GET['status'] == "gagal") {
			echo '<script language="javascript">Swal.fire("Error!","Data Gagal Dieksekusi!","error").then(() => { window.location.href="add_berita.php"; });</script>';
		}
		
		?>


		<div class="wrapper">
			<div class="content">

				<div class="card mt-3">
					<div class="card-header">
						<div class="row">
							<div class="col">
								List Berita
							</div>
							<div class="col text-center">
								<a href="../index.php" style="font-size: 15px;" type="button" class="btn btn-primary btn-sm"><i class="fas fa-home"></i> Beranda</a>
							</div>
							<div class="col text-right">
								<button style="font-size: 15px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</button>
							</div>
						</div>
					</div>
					<div class="card-body card-font">
						<table id="example" class="table table-striped table-bordered table-hover" style="width: 100%;">
							<thead>
								<tr>
									<th style="max-width:35px;">No.</th>
									<th>Judul</th>
									<th  style="max-width:150px;">Isi</th>
									<th>Author</th>
									<th style="max-width:90px;" >Gambar</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$nom = 1;
								$kode = mysqli_query($db,"SELECT * FROM news");
								while ($dat = mysqli_fetch_array($kode)) {
									$a = mysqli_query($db,"SELECT * FROM user WHERE id = '".$dat['user_id']."'");
									$user = mysqli_fetch_assoc($a);
									?>
									<tr>
										<td><?php echo $nom++; ?></td>
										<td><?php echo $dat['tittle']; ?></td>
										<td><button style="width: 150px;" class="deskripsi-modal btn btn-info btn-sm" data-toggle="modal" data-isi="<?php echo $dat['deskripsi']; ?>" data-target="#deskripsi">Cek Disini</button></td>
										<td><?php echo $user['name']; ?></td>
										<td style="text-align: center;">
											<div class="crop">
												<a data-fancybox href="../foto/<?php echo $dat['image'];?>">
													<button class="btn btn-outline-primary btn-sm btn-ling">
														<i class="fas fa-image"></i>
													</button>
												</a>
											</div>
										</td>
										<td class="text-center">
											<button class="btn btn-outline-danger btn-sm btn-ling delete-modal" data-id="<?php echo $dat['id_news']; ?>" data-name="<?php echo $dat['tittle']; ?>">
												<i class="fas fa-trash-alt"></i>
											</button>
										</td>
									</tr>

								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
		</div>
		<!-- modal deskripsi -->
		<div class="modal fade" id="deskripsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="modal-title" id="exampleModalLabel">
							Deskripsi
						</div>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body deskrip"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal create data -->
		<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="modal-title" id="exampleModalLabel">
							Tambah Berita
						</div>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="post" action="tambah.php" enctype="multipart/form-data">
						<div class="modal-body">
							
							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control form-control-sm" name="judul" required>
							</div>
							
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea name="isi" class="form-control form-control-sm" rows="3"></textarea>
							</div>

							<div class="form-group">
								<label>Author/User</label>
								<select name="user_id" class="form-control form-control-sm">
									<option></option>
									<?php 
									$no = 1;
									$data = mysqli_query($db,"SELECT * FROM user");
									while ($row = mysqli_fetch_array($data)) {
										?>
										<option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>

									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label>Foto Barang</label>
								<input class="form-control-sm" type="file" id="file" name="foto" onchange="return fileValidation()"/>
								<!-- Image preview -->
								<div id="imagePreview" class="mt-2"></div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="submit" id="m" class="btn btn-primary btn-sm">Tambah</button>
							<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- end modal create -->

		<!-- modal delete -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="modal-title" id="exampleModalLabel">
							Hapus Data
						</div>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="hapus.php" method="post">
						<div class="modal-body">
							Anda Yakin Untuk Menghapus Data <span class="dname"></span> ??
							<input type="hidden" class="did" name="id">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
							<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- end modal delete -->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
		
		<script type="text/javascript" src="../js/custom.js"></script>
	</body>
	</html>