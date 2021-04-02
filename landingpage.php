<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<title>HIMFEST</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- google font -->
	<link
		href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
		rel="stylesheet">
	<!-- custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/index.css">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
/*carousel*/
.top-content .carousel-control-prev {
    left: -110px;
    border-bottom: 0;
    font-size: 40px;
    color: #c593d8;
}
 
.top-content .carousel-control-next {
    right: -110px;
    border-bottom: 0;
    font-size: 40px;
    color: #c593d8;
}
.top-content .carousel-indicators li {
    width: 16px;
    height: 16px;
    margin-left: 5px;
    margin-right: 5px;
    background-color: #c593d8;
    border-radius: 50%;
}

</style>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light pt-3 pb-3">
			<div class="container">
				<a class="navbar-brand" href="<?= site_url()?>"><img src="<?= base_url()?>images/himfest-logo.png" alt="logo"
						class="w-25"><span class="m-0 ml-2">Himfest</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
					aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto ml-5 mt-2 mt-lg-0">
						<li class="nav-item mr-1 ml-1 active">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item mr-1 ml-1">
							<a class="nav-link" href="#prize">Prize</a>
						</li>
						<li class="nav-item mr-1 ml-1">
							<a class="nav-link" href="#timeline">Timeline</a>
						</li>
						<li class="nav-item mr-1 ml-1">
							<a class="nav-link" href="#guidelines">Guidelines</a>
						</li>
					</ul>
					<div class="form-inline my-2 my-lg-0">
						<a href="#"><button class="btn btn-primary my-2 my-sm-0">Sign Up <i
									class="fas fa-arrow-right"></i></button></a>
					</div>
					<div class="form-inline my-2 my-lg-0">
						<a href="#"><button class="btn btn-primary my-2 my-sm-0">Login <i
									class="fas fa-arrow-right"></i></button></a>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<section id="home">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<img src="<?= base_url()?>/images/Layer-1.png" alt="home section" class="w-100 mt-3 ml-3">
					</div>
					<div class="col-md-4 pt-5 d-flex flex-column justify-content-center">
						<h1>
							Test your programming skill
						</h1>
						<p>
							Upgrade skill membuat website/aplikasi mobile mu sekarang!
						</p>
						<div class="actions-container d-flex align-items-center">
							<a href="#"><button class="btn btn-primary">Sign Up <i
										class="fas fa-arrow-right"></i></button></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="about">
				<div class="top-content">
					<div class="container">
					<div class="row">
					<div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
					<h1 class="text-center">ABOUT HIMFEST</h1>
					<div id="mycarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
					
					<ol class="carousel-indicators">
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
						<li data-target="#mycarousel" data-slide-to="3"></li>
					 </ol>
			  
				  <div class="carousel-inner">
					<div class="carousel-item active">
					<div class="container-fluid bg-light text-black">
					<div class="row">
					<div class="col-md-6 pt-5 d-flex flex-column justify-content-center">
						<div class="p-3 mb-2 bg-secondary text-white"><h1>THEME</h1></div>
						<p>Improving Society with Code</p>
					</div>
					<div class="col-md-6">
					  <img src="<?= base_url()?>/images/draft.png" alt="home section" width="700" height="500">
					  </div>
					  </div>
					 </div>
					</div>
					<div class="carousel-item">
					  <div class="container-fluid bg-light text-black">
					<div class="row">
					<div class="col-md-6 pt-5 d-flex flex-column justify-content-center">
						<div class="p-3 mb-2 bg-secondary text-white"><h1>TYPE & CATEGORY</h1></div>
						<p>SMA/SMK: UI/UX</p>
						<p>Mahasiswa: Web/Mobile App</p>
					</div>
					<div class="col-md-6">
					  <img src="<?= base_url()?>/images/draft.png" alt="home section" width="700" height="500">
					  </div>
					  </div>
					 </div>
					</div>
					<div class="carousel-item">
					  <<div class="container-fluid bg-light text-black">
					<div class="row">
					<div class="col-md-6 pt-5 d-flex flex-column justify-content-center">
						<div class="p-3 mb-2 bg-secondary text-white"><h1>SEMINAR</h1></div>
						<p>Theme: Improving Society with Code</p>
						<p>Date: 21 Juni 2021</p>
						<p>Speaker: </p>
					</div>
					<div class="col-md-6">
					  <img src="<?= base_url()?>/images/draft.png" alt="home section" width="700" height="500">
					  </div>
					  </div>
					 </div>
					</div>
					<div class="carousel-item">
					  <div class="container-fluid bg-light text-black">
					<div class="row">
					<div class="col-md-6 pt-5 d-flex flex-column justify-content-center">
						<div class="p-3 mb-2 bg-secondary text-white"><h1>WORKSHOP</h1></div>
						<p>SMA/SMK: 22-23 Juni 2021</p>
						<p>Speaker: </p>
						<p>Mahasiswa: 24-25 Juni 2021</p>
						<p>Speaker: </p>
					</div>
					<div class="col-md-6">
					  <img src="<?= base_url()?>/images/draft.png" alt="home section" width="700" height="500">
					  </div>
					  </div>
					 </div>
					</div>
				  </div>
				  
			  <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
				<i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#mycarousel" data-slide="next">
				<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			</div>
			</div>
		</div>
		</section>
		
		<section id="prize" class="d-block">
			<div class="container">
				<div class="row">
					<div class="col-md-10 pt-5 text-center offset-md-1">
						<h1 class="mb-5 mt-3">Prize</h1>
						<h3 class="mb-5 mt-3">SMA/SMK</h3>
						<div class="row">
							<div class="col-md-4 mt-3 mt-sm-5">
								<div class="prize-card">
									<img src="<?= base_url()?>/images/second.png" class="medal w-25">
									<span class="text">
										Rp 300 ribu
									</span>
								</div>
							</div>
							<div class="col-md-4 mt-3 mt-sm-0 mb-sm-5">
								<div class="prize-card prize-active">
									<img src="<?= base_url()?>/images/first.png" class="medal w-25">
									<span class="text">
										Rp 400 ribu
									</span>
								</div>
							</div>
							<div class="col-md-4 mt-3 mt-sm-5">
								<div class="prize-card">
									<img src="<?= base_url()?>/images/third.png" class="medal w-25">
									<span class="text">
										Rp 150 ribu
									</span>
								</div>
							</div>
						</div>

						<p class="mt-2">Terdapat hadiah tambahan bagi juara 1 - 3, yaitu beasiswa 100% untuk biaya DP3 di Binus University @Malang*.</p>

						<p class="sk mt-5">*) Syarat dan ketentuan berlaku</p>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 pt-5 text-center offset-md-1">
						<h3 class="mb-5 mt-3">Mahasiswa</h3>
						<div class="row">
							<div class="col-md-4 mt-3 mt-sm-5">
								<div class="prize-card">
									<img src="<?= base_url()?>/images/second.png" class="medal w-25">
									<span class="text">
										Rp 500 ribu
									</span>
								</div>
							</div>
							<div class="col-md-4 mt-3 mt-sm-0 mb-sm-5">
								<div class="prize-card prize-active">
									<img src="<?= base_url()?>/images/first.png" class="medal w-25">
									<span class="text">
										Rp 750 ribu
									</span>
								</div>
							</div>
							<div class="col-md-4 mt-3 mt-sm-5">
								<div class="prize-card">
									<img src="<?= base_url()?>/images/third.png" class="medal w-25">
									<span class="text">
										Rp 250 ribu
									</span>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<section id="timeline">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center">Timeline</h1>
						<ul class="timeline timeline-horizontal">
							<li class="timeline-item col">
								<div class="timeline-date">
									<p>21 JUNI 2021: Seminar</p>
									<p>22-25 JUNI 2021: Workshop</p>
								</div>
								<div class="timeline-badge primary">
								</div>
								<div class="timeline-name">
								</div>
							</li>
							
							<li class="timeline-item col">
								<div class="timeline-date">
									<p>1-8 JULI 2021</p>
									<p>Pengumpulan karya</p>
								</div>
								<div class="timeline-badge primary">
								</div>
								<div class="timeline-name">
								</div>
							</li>
							<li class="timeline-item col">
								<div class="timeline-date">
									<p style="font-size: 20px; font-weight: bold;">15 JULI 2021: Presentasi Finalis</p>
									<p style="font-size: 20px; font-weight: bold;">16 JULI 2021: Pengumuman Juara</p>
								</div>
								<div class="timeline-badge primary">
								</div>
								<div class="timeline-name">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section id="guidelines">
			<div class="container">
				<div class="row">
					<div class="guidelines-container text-center col-md-10 offset-md-1" style="width:100%">
						<h1>Guidelines</h1>
						<!-- <nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="nav-ui/ux-tab" data-toggle="tab"
									href="#nav-ui/ux" role="tab" aria-controls="nav-ui/ux"
									aria-selected="true">UI/UX</a>
							</div>
						</nav> -->
						<div class="tab-content py-3 px-3 px-sm-0 text-left" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-ui/ux" role="tabpanel"
								aria-labelledby="nav-ui/ux-tab">
								<ol type="number">
									<li>Peserta wajib merupakan siswa aktif SMA IPA/MA IPA, SMK jurusan IT/RPL/TKL sederajat dan mahasiswa aktif jurusan IT.
									</li>
									<li>Peserta harus mendaftar sesuai yang ada pada kartu pelajar.
									</li>
									<li>
										Peserta menyetujui apabila sewaktu-waktu di hubungi oleh panitia HIMFEST 2021.
									</li>
									<li>
										Pengumpulan karya dapat dimulai dari tanggal 1 Juli 2021 pukul 10.00 WIB - 8 Juli 2021 pukul 23.59 WIB. Peserta harus mengumpulkan pada waktu yang telah ditentukan, jika terlambat maka karya yang dikumpulkan tidak dapat dinilai.
									</li>
								</ol>
							</div>
						</div>
						<a href="#">
							<button type="button" name="btn-signup" class="btn btn-secondary">
								<div class="d-flex justify-content-center align-items-center">
									<a href="<?= base_url()?>/storage/guidebook.pdf" class="download-btn btn">
										<span class="mr-3">Download Guidebook</span>
										<i class="fas fa-download"></i>
									</a>
								</div>
							</button>
						</a>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-4 d-flex justify-content-center align-items-center">
							<img src="<?= base_url()?>images/himfest-logo.png" alt="logo" class="w-25">
							<h6 class="m-0 ml-2">Himfest</h6>
						</div>
						<div class="col-4 d-flex flex-column justify-content-center">
							<h5>PHONE</h5>
							<p class="mt-2">0815-5320-5808</p>
						</div>
						<div class="col-4 d-flex flex-column justify-content-center">
							<h5>EMAIL</h5>
							<p class="mt-2">it.himfo@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="social">
						<a href="https://www.instagram.com/himfo.binusmlg/" class="d-inline-block mx-3"><i class="fab fa-instagram fa-2x"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<!-- popper js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<!-- bootstrap scripts -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<!-- fontawesome  -->
	<script src="https://kit.fontawesome.com/435e55727b.js" crossorigin="anonymous"></script>
</body>

</html>
