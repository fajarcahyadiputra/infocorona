 <style>
 	.wraper{
 		margin: 20px;
 	}
 </style>

 <div id="layoutSidenav_content">
 	<main>
 		<div class="container-fluid">
 			<div class="wraper">
 				<a style="" type="button" class="btn btn-outline-warning mb-4"  data-toggle="modal" data-target="#tambah-statistic"><i class="fas fa-user-plus"></i>Tambah Kabupaten</a>
 				<table class="table table-hover table-bordered table-striped" id="dataTable">	
 					<thead>
 						<tr>
 							<th>No</th>
 							<th>Nama Kabupaten</th>
 							<th>Positif</th>
 							<th>ODP</th>
 							<th>PDP</th>
 							<th>Meninggal</th>
 							<th>Sembuh</th>
 							<th>Action</th>
 						</tr>
 					</thead>
 					<?php $no=1; foreach ($kabupaten as $pr) { ?>
 						<tbody>
 							<tr>	
 								<td><?php echo 	$no++ ?></td>
 								<td><?php echo 	$pr->nama_kab ?></td>
 								<td><?php echo 	$pr->positif ?></td>
 								<td><?php echo 	$pr->odp ?></td>
 								<td><?php echo 	$pr->pdp ?></td>
 								<td><?php echo  $pr->meninggal?></td>
 								<td><?php echo  $pr->sembuh ?></td>
 								<td>
 									<button class="btn btn-danger" type="button" id="tombol-hapuskab" data-id="<?php echo $pr->id_kab ?>"><i class="fa fa-trash"></i></button>
 									<button class="btn btn-primary" type="button" id="tombol-editkab" data-id="<?php echo $pr->id_kab ?>"><i class="fa fa-edit"></i></button>
 								</td>
 							</tr>
 						</tbody>
 					<?php 	} ?>
 				</table>
 			</div>
 		</div>
 	</main>		



 	<!-- Modal tambah -->
 	<div class="modal fade" id="tambah-statistic" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
 		<div class="modal-dialog modal-dialog-scrollable" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Statistic Provinsi</h5>
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 				</div>
 				<form id="form-kabupaten">
 					<div class="modal-body">
 						<div class="form-group">
 							<label for="nama_provinsi">Nama Kabupaten</label>
 							<input required="" type="text" name="nama_kab" class="form-control">
 						</div>
 						<div class="form-group">
 							<label for="positif">Positif</label>
 							<input required="" id="positif" type="text" name="positif" class="form-control">
 						</div>
 						<div class="form-group">
 							<label for="pdp">ODP</label>
 							<input required="" type="text" name="odp" class="form-control">
 						</div>
 						<div class="form-group">
 							<label for="positif">PDP</label>
 							<input required="" type="text" name="pdp" class="form-control">
 						</div>
 						<div class="form-group">
 							<label for="positif">Meninggal</label>
 							<input required="" type="text" name="meninggal" class="form-control">
 						</div>
 						<div class="form-group">
 							<label for="positif">Sembuh</label>
 							<input required="" type="text" name="sembuh" class="form-control">
 						</div>
 					</div>
 					<div class="modal-footer">
 						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
 						<button type="submit" class="btn btn-primary">Tambah</button>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>


 	<!-- Modal edit -->
 	<div class="modal fade" id="edit-statistic" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
 		<div class="modal-dialog modal-dialog-scrollable" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Statistic Kabupaten</h5>
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 				</div>
 				<div class="penampung-edit">
 					
 				</div>
 			</div>
 		</div>
 	</div>