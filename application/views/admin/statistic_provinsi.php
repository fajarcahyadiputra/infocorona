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
              <th>Nama Provinsi</th>
              <th>Kode Provinsi</th>
              <th>ODP</th>
              <th>PDP</th>
              <th>Posistif</th>
              <th>Meninggal</th>
              <th>Sembuh</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php $no=1; foreach ($provinsi as $pr) { ?>
            <tbody>
              <tr>  
                <td><?php echo  $no++ ?></td>
                <td><?php echo  $pr->provinsi_name ?></td>
                <td><?php echo  $pr->kode_provinsi ?></td>
                <td><?php echo  $pr->odp ?></td>
                <td><?php echo  $pr->pdp ?></td>
                <td><?php echo  $pr->positif ?></td>
                <td><?php echo  $pr->meninggal?></td>
                <td><?php echo  $pr->sembuh ?></td>
                <td>
                  <button class="btn btn-primary" type="button" id="tombol-editprov" data-id="<?php echo $pr->id_provinsi ?>"><i class="fa fa-edit"></i></button>
                </td>
              </tr>
            </tbody>
          <?php   } ?>
        </table>
      </div>
    </div>
  </main>   



  <!-- Modal edit -->

<!-- Modal -->
<div class="modal fade" id="modal-prov" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Provinsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="penampung-edit-prov">
        
      </div>
    </div>
  </div>
</div>