<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Berita</h1>
            <ol class="breadcrumb mb-4">
            	<li class="breadcrumb-item">Berita</li>
                <li class="breadcrumb-item active">Daftar Berita</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-newspaper mr-1"></i>Berita</div>
                <div class="card-body">
                    <div class="table-responsive">
                    	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                	<th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Oleh</th>
                                    <th>Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            	$i=1;
                            	foreach ($berita as $key) {
                            	?>
                            	<tr>
                            		<td><?=$i?></td>
                            		<td><?=$key->judul?></td>
                            		<td><?=$key->type?></td>
                            		<td><?=$key->dibuat_oleh?></td>
                            		<td><?=$key->dibuat_tanggal?></td>
                            		<td>
                            			<a class="btn btn-primary" href="<?=base_url("admin/dashboard_admin/editBerita/{$key->slug}")?>"><i class="fa fa-edit"></i> </a>&nbsp;
                            			<a class="btn btn-danger" href="<?=base_url("admin/dashboard_admin/hapusBerita/{$key->slug}")?>"><i class="fa fa-trash-alt"></i> </a>
                            		</td>
                            	</tr>
                            	<?php
                            	$i++;
                            	}
                            	?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>