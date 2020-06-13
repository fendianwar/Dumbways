<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- fancybox -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background: black !important;">
	<div class="wrapper">
		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<h3><font color="white">Me-</font><font color="orange">dumb</font></h3>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<a href="berita/add_berita.php" class="btn btn-primary btn-sm mr-2">Add News</a>
						<a href="user/add_user.php" class="btn btn-primary btn-sm" type="button">Add User</a>
					</form>
				</div>
			</nav>

			<div class="container mt-4">

				<?php
				function limit_words($string, $word_limit){
					$words = explode(" ",$string);
					return implode(" ",array_splice($words,0,$word_limit));

				}

				include 'koneksi.php';
				$no = 1;
				$kode = mysqli_query($db,"SELECT * FROM news ORDER BY user_id ASC");
				while ($dat = mysqli_fetch_array($kode)) {
					$no++;
					$a = mysqli_query($db,"SELECT * FROM user WHERE id = '".$dat['user_id']."'");
					$user = mysqli_fetch_assoc($a);
					?>

					<div class="item bg-dark p-4 mb-5">
						<p class="item__image">
							<a class="crop" data-fancybox href="foto/<?php echo $dat['image']; ?>">
								<img src="foto/<?php echo $dat['image']; ?>" alt="Card image cap">
							</a>
						</p>
						<div class="item__text">
							<h3 class="item__heading">
								<a class="text-white"><?php echo $dat['tittle']; ?></a>
							</h3>
							<p class="author text-white-50">
								Author : <?php echo $user['name']; ?>
							</p>
							<p class="item__perex text-white-50">
								<?php
								$long_string[$no-1] = $dat['deskripsi'];
								echo limit_words($long_string[$no-1], 48).' ...';
								?>
							</p>

						</div>
						<div style=" width: 100%; margin-top: -20px; ">
							<a href='detail.php?id=<?php echo $dat[id_news]?>' style=" float: right; width: 150px;" type="button" class="btn btn-primary btn-sm">Detail</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
</body>
</html>