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
	<!-- datatable -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
		if ($_GET['status'] == "sukses") {
			echo '<script language="javascript">Swal.fire("Sukses!","Data Berhasil Disimpan!","success").then(() => { window.location.href="add_user.php"; });</script>';
		}

		if ($_GET['status'] == "hapus") {
			echo '<script language="javascript">Swal.fire("Sukses!","Data Berhasil Dihapus!","success").then(() => { window.location.href="add_user.php"; });</script>';
		}

		if ($_GET['status'] == "gagal") {
			echo '<script language="javascript">Swal.fire("Error!","Data Gagal Dieksekusi!","error").then(() => { window.location.href="add_user.php"; });</script>';
		}
		
		?>


		<div class="wrapper">
			<div class="content">
				<div class="container">

					<div class="card mt-3">
						<div class="card-header">
							<div class="row">
								<div class="col">
									List User
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
										<th>Nama</th>
										<th>Email</th>
										<th style="max-width:50px;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									include '../koneksi.php';
									$no = 1;
									$data = mysqli_query($db,"SELECT * FROM user");
									while ($row = mysqli_fetch_array($data)) {
										?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td class="text-center">
												<button class="btn btn-outline-danger btn-sm btn-ling delete-modal" data-id="<?php echo $row['id']; ?>" data-name="<?php echo $row['name']; ?>">
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
		</div>
		<!-- Modal create data -->
		<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<div class="modal-title" id="exampleModalLabel">
							Tambah User
						</div>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="post" action="tambah.php">
						<div class="modal-body">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" class="form-control form-control-sm" name="nama" required>
							</div>
							<div class="form-group">
								<label>Email Aktif</label>
								<input type="email" class="form-control form-control-sm" name="email" required>
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
		<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>