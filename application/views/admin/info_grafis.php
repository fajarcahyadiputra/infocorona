 <style>
 	.wraper{
 		margin: 20px;
 	}
 </style>

 <div id="layoutSidenav_content">
 	<main>
 		<div class="container-fluid">
 			<div class="wraper">
 				<a style="" type="button" class="btn btn-outline-warning mb-4"  data-toggle="modal" data-target="#tambah-media"><i class="fas fa-user-plus"></i>Tambah Media</a>
 				<table class="table table-hover table-bordered table-striped" id="dataTable">	
 					<thead>
 						<tr>
 							<th>No</th>
 							<th>Foto</th>
 							<th>URL</th>
 							<th>Tampil</th>
 							<th>Action</th>
 						</tr>
 					</thead>
 					<tbody>
 					<?php $no = 1; foreach($media as $md) :?>
 					
 						<tr>	
 							<td><?php echo $no++ ?></td>
 							<td><img width="100" src="<?php echo base_url('media/'.$md->file_name) ?>" alt=""></td>
 							<td><?php echo $md->url ?></td>
 							<td><?php echo $md->tampil ?></td>
 							<td>
 								<button type="button" class="btn btn-danger" data-file="<?php echo $md->file_name  ?>" data-id="<?php echo $md->id_media ?>" id="tombol-hapusmedia"><i class="fa fa-trash"></i></button>
 								<button type="button" id="tombol-tampiledit-media" class="btn btn-info" data-id="<?php echo $md->id_media ?>"><i class="fa fa-edit"></i></button>
 							</td>
 						</tr>
 					
 				<?php endforeach ?>
 				</tbody>
 			</table>
 		</div>
 	</div>
 </main>		


 <!-- Modal tambah -->
 <div class="modal fade" id="tambah-media" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
 	<div class="modal-dialog " role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Media</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<form id="form-media" name="form-media">
 				<div class="modal-body">
 					<div class="form-group">
 						<label for="nama_file">File Name</label>
 						<input required="" type="file" name="nama_file" class="form-control">
 					</div>
 					<div class="form-group">
 						<label for="url">URL</label>
 						<input required="" id="url" type="text" name="url" class="form-control">
 					</div>
 					<div class="form-group">
 						<label for="pdp">Tampil</label>
 						<select required="" class="form-control" name="tampil" id="tampil-media">
 							<option disabled="disabled" selected="">Pilih Tampilan</option>
 							<option value="0">0</option>
 							<option value="1">1</option>
 						</select>
 						<div id="tampil-kosong" style="color: red"></div>
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

  <!-- Modal tambah -->
 <div class="modal fade" id="modal-edit-media" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
 	<div class="modal-dialog " role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalScrollableTitle">edit Media</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="penampug-formedit-media">
 				
 			</div>
 		</div>
 	</div>
 </div>