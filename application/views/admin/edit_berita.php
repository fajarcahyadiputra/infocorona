 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit Berita</h1>
            <ol class="breadcrumb mb-4">
            	<li class="breadcrumb-item">Berita</li>
                <li class="breadcrumb-item active"><?=$berita->judul?></li>
            </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-newspaper mr-1"></i>Edit Berita</div>
            <div class="card-body">
            <?php
            if (!empty($this->session->flashdata('success'))) {
            	echo '<div class="alert alert-success"><span>'.$this->session->flashdata('success').'</span></div>';
            }

            if (!empty($this->session->flashdata('error'))) {
            	echo '<div class="alert alert-danger"><span>'.$this->session->flashdata('error').'</span></div>';
            }
            ?>	
        	<?=form_open('admin/dashboard_admin/saveBerita', 'class="form-horizontal" enctype="multipart/form-data"')?>
            <input type="hidden" name="id_berita" value="<?=$berita->id_berita?>">
        		<div class="form-group">
        			<label for="judul">Judul</label>
        			<input type="text" name="judul" id="judul" class="form-control" placeholder="Judul" value="<?=$berita->judul?>" required>
        		</div>
        		<div class="form-group">
        			<label for="type">Kategori</label>
        			<select name="type" id="type" class="form-control" required>
        				<option value="berita" <?php echo ($berita->type == "berita") ? 'selected' : '';?>>Berita</option>
        				<option value="galeri" <?php echo ($berita->type == "galeri") ? 'selected' : '';?>>Galeri</option>
        			</select>
        		</div>
        		<div class="form-group">
        			<label for="content">Content</label>
        			<textarea type="text" name="content" id="content" class="form-control" placeholder="Content" required><?=$berita->content?></textarea>
        		</div>
        		<div class="form-group">
        			<label for="gambar">Gambar</label>
        			<input type="file" name="gambar" id="gambar" class="form-control" required>
        		</div>
        		<input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
        	<?=form_close();?>
	        </div>
        </div>
        </div>
    </main>