<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/user/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

	<!-- CSS Sendiri -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/user/css/style.css">

	
	<!-- ICON -->
	<link rel="icon" type="image/png" href="<?=base_url()?>assets/user/img/logo.png">
	<title>Informasi Corona - Selamat Datang</title>
	<style>
		/* Text Font Link */
		@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap');

		.img-logo-index{
			margin: 10px;
			margin-left: 130px;

		}
		.icon1{
			background-color: lime;
		}
		.icon2{
			background-color: blue;
		}
		.icon3{
			background-color: salmon;
		}

	</style>
</head>

<body>

	<!-- header -->
	<header>
		<!--Menu-->

		<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top nav-s">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="https://coronainfo.langkatkab.go.id/assets/media/logos/langkat.png" alt="Responsive image" height="42px">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?=base_url()?>" style="margin-right: 22px; text-transform: uppercase;">Beranda<span class="sr-only">(current)</span></a>
						</li>

					</ul>

				</div>
			</nav>

		</div>
	</div>

</header>

<!-- Awal Jumbotron -->
<section class="jumbotron-bg">
	<div class="jumbotron warna-bg text-white">
		<div class="container">
			<h1 class="display-3"><b>Selamat Datang,</b></h1>
			<h3>Info Corona merupakan situs yang menyediakan berbagai Informasi Corona terupdate</h3>
			<hr>
			<h5>Kita Berjuang Melawan Corona !</h5>
			<br>
			<div class="my-5">
				<!-- untuk jarak -->
			</div>
		</div>  
	</div>
</section>
<!-- Akhir Jumbotron -->

<!-- Container -->
<div class="container">

	<!-- Info Panel -->
	<div class="row justify-content-center">
		<div class="col-11 info-panel">
			<div class="row">
				<div class="col-lg">
					<img src="https://img.icons8.com/cotton/64/000000/phone-message.png" alt="call" class="float-left">
					<h5>119</h5>
					<p>Call Center KEMENKES RI</p>
				</div>
				<div class="col-lg">
					<img src="https://img.icons8.com/cute-clipart/64/000000/cell-phone.png" alt="phone" class="float-left">
					<h5>0813 9603 2994</h5>
					<p>Posko Covid-19 Dinkes Langkat</p>
				</div>

				<div class="col-lg">
					<img src="https://img.icons8.com/cute-clipart/64/000000/upload-mail.png" alt="email" class="float-left">
					<h5>Corona@info corona.com</h5>
					<p>E-Mail</p>
				</div>
				<div class="col-lg">
					<img src="https://img.icons8.com/officel/64/000000/worldwide-location.png" alt="location" class="float-left">
					<h5>Posko Covid-19: Dinas Kesehatan Kab. Langkat</h5>
					<p>Lokasi</p>
				</div>

			</div>
			
		</div>
		
	</div>

</div>
<!-- Akhir Container -->

<!-- mulai trafik indonesia -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 container2">
			<h1>INDONEISA</h1>
			<div class="row">
				<div class="col s12 m4 icon1">
					<div class="card-panel">
						<span class="white-text">
							<img class="img-logo-index left" src="https://kawalcorona.com/uploads/sad-u6e.png" width="30%" height="30%" alt="Logo Daerah">
							<p class="text-center">TOTAL POSITIF</p>
							<h5 class="text-center"><span id='terjangkit'></span></h5>
						</span>
					</div>
				</div>
				<div class="col s12 m4 icon2">
					<div class="card-panel">
						<span class="white-text">
							<img class="img-logo-index left" src="https://kawalcorona.com/uploads/happy-ipM.png" width="30%" height="30%" alt="Logo Daerah">
							<p class="text-center">TOTAL SEMBUH</p>
							<h5 class="text-center"><span id='sembuh'></span></h5>
						</span>
					</div>
				</div>
				<div class="col s12 m4 icon3">
					<div class="card-panel">
						<span class="white-text">
							<img class="img-logo-index left" src="https://kawalcorona.com/uploads/emoji-LWx.png" width="30%" height="30%" alt="Logo Daerah">
							<p class="text-center">TOTAL MENINGGAL</p>
							<h5 class="white-text text-center"><span id='meninggal'></span></h5>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end trafik -->

<!-- Container 2 -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 container2">
			<h1>Situasi Terkini</h1>
			<hr>
			<div class="card-header"><i class="fas fa-table mr-1"></i>Statistic COVID-19 (Indonesia)</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>#</th>
								<th>Provinsi</th>
								<th>Positif</th>
								<th>Meninggal</th>
								<th>Sembuh</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$i = 1;
							foreach ($indonesia as $key) {
								?>  
								<tr>
									<td><?=$i?></td>
									<td><?=$key['provinsi_name']?></td>
									<td><?=$key['positif']?></td>
									<td><?=$key['meninggal']?></td>
									<td><?=$key['sembuh']?></td>
								</tr>
								<?php
								$i++;
							}
							?>
						</tbody>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Negara</th>
								<th>Positif</th>
								<th>Meninggal</th>
								<th>Sembuh</th>
							</tr>
						</tfoot>

					</table>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- Akhir Container 2 -->

<?php 
$data_positif = file_get_contents('https://api.kawalcorona.com/positif');
$data_positif_dua = json_decode($data_positif);
$positif_corona = $data_positif_dua->value;

$data_sembuh = file_get_contents('https://api.kawalcorona.com/sembuh');
$data_sembuh_dua = json_decode($data_sembuh);
$sembuh_corona = $data_sembuh_dua->value;

$data_ninggal = file_get_contents('https://api.kawalcorona.com/meninggal');
$data_ninggal_dua = json_decode($data_ninggal);
$ninggal_corona = $data_ninggal_dua->value;    

?>

<!-- mulai trafik indonesia -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 container2">
			<h1>DUNIA</h1>
			<div class="row">
				<div class="col s12 m4 icon1">
					<div class="card-panel">
						<span class="white-text">
							<img class="img-logo-index left" src="https://kawalcorona.com/uploads/sad-u6e.png" width="30%" height="30%" alt="Logo Daerah">
							<p class="text-center">TOTAL POSITIF</p>
							<h5 class="text-center"><span><?php echo $positif_corona ?> Orang</span></h5>
						</span>
					</div>
				</div>
				<div class="col s12 m4 icon2">
					<div class="card-panel">
						<span class="white-text">
							<img class="img-logo-index left" src="https://kawalcorona.com/uploads/happy-ipM.png" width="30%" height="30%" alt="Logo Daerah">
							<p class="text-center">TOTAL SEMBUH</p>
							<h5 class="text-center"><span><?php echo $sembuh_corona ?> Orang</span></h5>
						</span>
					</div>
				</div>
				<div class="col s12 m4 icon3">
					<div class="card-panel">
						<span class="white-text">
							<img class="img-logo-index left" src="https://kawalcorona.com/uploads/emoji-LWx.png" width="30%" height="30%" alt="Logo Daerah">
							<p class="text-center">TOTAL MENINGGAL</p>
							<h5 class="text-center"><span><?php echo $ninggal_corona ?> Orang</span></h5>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end trafik -->

<!-- data tabel duania -->
<?php 
$data = file_get_contents('https://api.kawalcorona.com/');
$data_dua = json_decode($data, true)
?>
<!-- Start Table -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 container2">
			<h1>Situasi Terkini</h1>
			<hr>
			<div class="card-header"><i class="fas fa-table mr-1"></i>Statistic COVID-19 (Dunia)</div>
			<hr>
			<table class="table table-striped table-bordered table-hover"  id="dataTable2" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>NEGARA</th>
						<th>POSITIF</th>
						<th>SEMBUH</th>
						<th>MENINGGAL</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; ?>
					<?php foreach ( $data_dua as $dtd ) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $dtd['attributes']['Country_Region']; ?></td>
							<td><?= $dtd['attributes']['Confirmed']; ?></td>
							<td><?= $dtd['attributes']['Recovered']; ?></td>
							<td><?= $dtd['attributes']['Deaths']; ?></td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>

				<tfoot>
					<tr>
						<th>No.</th>
						<th>NEGARA</th>
						<th>POSITIF</th>
						<th>SEMBUH</th>
						<th>MENINGGAL</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<!-- end data tabel dunia -->


<!-- apa itu covid -->
<section class="jumbotron back">
	<div class="jumbotron warna-cover text-white">
		<div class="row ">


			<div class="col-lg-4">
				<h1 style="margin-right: 30px; margin-left: 30px;">Apa itu COVID-19</h1>
				<p style="margin-right: 30px; margin-left: 30px;" class="text-justify">Pneumonia Coronavirus Disease 2019 atau COVID-19 adalah penyakit peradangan paru yang disebabkan oleh Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2). Gejala klinis yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis).</p>
			</div>
			<div class="col-lg-8">
				<h1 style="margin-right: 30px; margin-left: 30px;">Bagaimana COVID-19 Menular?</h1>
				<p style="margin-right: 30px; margin-left: 30px;" class="text-justify">Cara penularan SARS-CoV-2 penyebab COVID-19 ialah melalui kontak dengan droplet saluran napas penderita. Droplet merupakan partikel kecil dari mulut penderita yang mengandung kuman penyakit, yang dihasilkan pada saat batuk, bersin, atau berbicara. Droplet dapat melewati sampai jarak tertentu (biasanya 1 meter).
				Droplet bisa menempel di pakaian atau benda di sekitar penderita pada saat batuk atau bersin. Namun, partikel droplet cukup besar sehingga tidak akan bertahan atau mengendap di udara dalam waktu yang lama. Oleh karena itu, orang yang sedang sakit, diwajibkan untuk menggunakan masker untuk mencegah penyebaran droplet. Untuk penularan melalui makanan, sampai saat ini belum ada bukti ilmiahnya.</p>
			</div>


		</div>
	</div>
</section>
<!-- akhir apa itu covid -->

<!-- rumah sakit rujukan -->
<section class="jumbotron back-2">
	<div class="jumbotron warna-cover-2 text-white">
		<div class="row ">

			<div class="col">
				<img src="https://img.icons8.com/dusk/64/000000/hospital.png" alt="call" class="float-left" style="margin-left: 10px; margin-top: -20px;">
				<h4 style="margin-left: 10px; margin-top: 5px;">Rumah Sakit Rujukan terdekat</h4>
				<p class="text-justify" style="margin-top: 20px; font-size: 20px; margin-left: 30px; margin-right: 30px;">Berikut ini adalah rumah sakit yang menjadi rujukan untuk pasien dengan status Pasien dalam Pengawasan. Anda harus mengunjungi fasilitas kesehatan terdekat terlebih dahulu seperti klinik/rumah sakit umum sebelum akhirnya dapat dirujuk ke rumah sakit khusus di bawah ini.</p>
				<hr>	
			</div>

			<div class="col-11 container3">
				<div class="row">

					<div class="col-lg" style="padding: 20px;">
						<h5>RSU. PUTRI BIDADARI</h5>
						<p>Jl. Stabat - Tanjung Pura, Kec. Wampu</p>
						<p>0822 7692 0000</p>
					</div>
					<div class="col-lg" style="padding: 20px;">
						<h5>RSU. PUTRI BIDADARI</h5>
						<p>Jl. Stabat - Tanjung Pura, Kec. Wampu</p>
						<p>0822 7692 0000</p>
					</div>
					<div class="col-lg" style="padding: 20px;">
						<h5>RSU. PUTRI BIDADARI</h5>
						<p>Jl. Stabat - Tanjung Pura, Kec. Wampu</p>
						<p>0822 7692 0000</p>
					</div>
					<div class="col-lg" style="padding: 20px;">
						<h5>RSU. PUTRI BIDADARI</h5>
						<p>Jl. Stabat - Tanjung Pura, Kec. Wampu</p>
						<p>0822 7692 0000</p>
					</div>
					<div class="col-lg" style="padding: 20px;">
						<h5>RSU. PUTRI BIDADARI</h5>
						<p>Jl. Stabat - Tanjung Pura, Kec. Wampu</p>
						<p>0822 7692 0000</p>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>

<!-- akhir rumah sakit -->

<!-- news -->
<div class="page-content page-container kontainer" id="page-content">
	<div class="padding" style="background: linear-gradient(to right, rgba(73,165,191,1) 0%, rgba(117,189,209,1) 59%, rgba(147,206,222,1) 100%);">
		<div class="row container-fluid">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Info Grafis</h4>
						<div class="owl-carousel">
							<!-- CONTOH PAKE MODAL UNTUK ZOOM GAMBAR-->
							<!-- <div class="item"> <img src="https://coronainfo.langkatkab.go.id/assets/media/bg/corona8.jpg" alt="image" type="button" data-toggle="modal" data-target="#exampleModal" /></div> -->
							<!-- CONTOH PAKE MODAL UNTUK ZOOM GAMBAR-->
							<?php foreach ($media as $grafis) { ?>
								<div class="item"> <a href="<?=$grafis->url?>"><img src="<?=$grafis->file_name?>" alt="image" /></a> </div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- akhir news -->
<!-- embed youtube -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col" style=" background: linear-gradient(to right, rgba(109,0,25,1) 0%, rgba(143,2,34,1) 56%, rgba(169,3,41,1) 100%); border-radius: 12px; margin-top: 50px; box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);">

			<div class="embed-responsive embed-responsive-16by9 mt-3 mb-3">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>

			</div>
		</div>
	</div>
</div>

<!-- list berita -->
<section class="jumbotron back">
	<div class="jumbotron warna-cover text-white">
		<h3>List Berita</h3>
		<div class="list-group overflow-auto" style="height:500px">
			<?php foreach($berita as $news): ?>		
				<a href="<?=base_url('welcome/detail_berita/'.$news->slug)?>" class="list-group-item list-group-item-action">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1"><?=$news->judul?></h5>
						<small><?=$news->dibuat_tanggal?></small>
					</div>
					<p class="mb-1"><?= substr($news->content, 0, 150)?>...</p>
					<small><?=$news->dibuat_oleh?></small>
				</a>
			<?php endforeach ?>
		</div>
	</div>
</section>
<!-- end list berita -->



<!-- Button trigger modal -->

<!-- Modal UNTUK ZOOM GAMBAR -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
					Tutup
				</button>
			</div>
			<div class="modal-body">
				<img src="https://coronainfo.langkatkab.go.id/assets/media/bg/corona8.jpg" alt="" style="display: block; width: 100%; height: auto">
			</div>
		</div>
	</div>
</div>

<!-- Button trigger modal -->

<!-- Footer -->
<footer>

	<!-- Copyright -->
	<div class="footer-copyright text-center text-white py-3" style="background: linear-gradient(to right, rgba(29,95,156,1) 0%, rgba(9,77,150,1) 100%); margin-top: 50px;">© 2020 
		<a href="https://mdbootstrap.com/" class="text-white" target="_blank">INFO CORONA</a>
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=base_url()?>assets/user/js/jquery-3.4.1.slim.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/user/js/popper.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/user/js/bootstrap.min.js" type="text/javascript"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<!-- OWL CAROUSEL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		let table = $('#dataTable').DataTable({});
		let table2 = $('#dataTable2').DataTable({});
		$(".owl-carousel").owlCarousel({

			autoPlay: 3000,
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			center: true,
			nav:true,
			loop:true,
			responsive: {
				600: {
					items: 4
				}
			}

		});

		$.ajax({url: "https://api.kawalcorona.com/indonesia/", 
			success: function(result){
				$("#terjangkit").html(result[0].positif + " Orang");
				$("#sembuh").html(result[0].sembuh + " Orang");
				$("#meninggal").html(result[0].meninggal + " Orang");
			}});

	});


</script>

</body>
</html>