    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">Copyright &copy; Info Corona <?=date("Y")?></div>
          <div>
            <a href="#">Privacy Policy</a>
            &middot;
            <a href="#">Terms &amp; Conditions</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/assets/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<!--  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
  CKEDITOR.replace( 'content' );
</script>
<?php if(isset($statistic)){ ?>
  <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#292b2c';

            // Pie Chart Example
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
              type: 'pie',
              data: {
                labels: ["Positif", "Sembuh", "Meninggal"],
                datasets: [{
                  data: [<?=str_replace(',','',$statistic['positif'])?>,<?=str_replace(',','',$statistic['sembuh'])?>,<?=str_replace(',','',$statistic['meninggal'])?>],
                  backgroundColor: ['#007bff', '#dc3545', '#ffc107'],
                }],
              },
            });

            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#292b2c';

            // Pie Chart Example
            var ctx = document.getElementById("myPieChart1");
            var myPieChart = new Chart(ctx, {
              type: 'pie',
              data: {
                labels: ["Positif", "Sembuh", "Meninggal", "ODP", "PDP"],
                datasets: [{
                  data: [<?=$indonesia->pos?>,<?=$indonesia->sem?>,<?=$indonesia->men?>,<?=$indonesia->do?>,<?=$indonesia->pd?>],
                  backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)'
                  ],
                }],
              },
            });

          </script>
        <?php } ?>
        <script>
          $(document).ready(function(){
            let table = $('#dataTable').DataTable({

            });
            $('#form-kabupaten').on('submit', function(e){
              e.preventDefault();
              let data = $('#form-kabupaten').serialize();
              $.ajax({
                url : BASE_URL + 'admin/Dashboard_admin/addstatistickab',
                data : data,
                type : 'POST',
                dataType : 'JSON',
                success: function(hasil){
                  $('#tambah-statistic').modal('hide');
                  if(hasil.insert == true){
                    Swal.fire({
                      icon: 'success',
                      title: 'Berhasil...',
                      text: 'Selamat Data Berhasil Di masukan!',
                    })
                  }else{
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Data Gagal Di masukan!',
                    })
                  }
                  setTimeout(function(){
                    location.reload(); 
                  },1000);
                }
              })
            })

            $('#dataTable').on('click','#tombol-hapuskab', function(){
              let id = $(this).data('id');
              Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.value) {
                  $.ajax({
                    url : BASE_URL + 'admin/Dashboard_admin/deletestatistickab/' + id,
                    type : 'delete',
                    dataType : 'JSON',
                    success: function(hasil){
                      if(hasil.delete == true){
                        Swal.fire(
                          'Terhapus',
                          'Data Berhasil Di hapus',
                          'success'
                          )
                      }else{
                        Swal.fire(
                          'Oops!',
                          'Data gagal Di Hapus.',
                          'error'
                          )
                      }
                      setTimeout(function(){
                        location.reload(); 
                      },1000);
                    }

                  })

                }
              })

            })
            $('#dataTable').on('click','#tombol-editkab', function(e){
              let id = $(this).data('id');

              $.ajax({
                url : BASE_URL + 'admin/Dashboard_admin/editstatistickab/' + id,
                type : 'edit',
                dataType : 'json',
                success: function(hasil){
                  $('.penampung-edit').html(
                    `<form id="form-edit-kab">
                    <div class="modal-body">
                    <div class="form-group">
                    <label for="nama_provinsi">Nama Kabupaten</label>
                    <input required="" hidden="" type="text" name="id_kab" class="form-control" value="${hasil.id_kab}">
                    <input required="" type="text" name="nama_kab" class="form-control" value="${hasil.nama_kab}">
                    </div>
                    <div class="form-group">
                    <label for="positif">Positif</label>
                    <input required="" id="positif" type="text" name="positif" class="form-control" value="${hasil.positif}">
                    </div>
                    <div class="form-group">
                    <label for="pdp">ODP</label>
                    <input required="" type="text" name="odp" class="form-control" value="${hasil.odp}">
                    </div>
                    <div class="form-group">
                    <label for="positif">PDP</label>
                    <input required="" type="text" name="pdp" class="form-control" value="${hasil.pdp}">
                    </div>
                    <div class="form-group">
                    <label for="positif">Meninggal</label>
                    <input required="" type="text" name="meninggal" class="form-control" value="${hasil.meninggal}"
                    </div>
                    <div class="form-group">
                    <label for="positif">Sembuh</label>
                    <input required="" type="text" name="sembuh" class="form-control" value="${hasil.sembuh}">
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" id="tombol-edit-kab" class="btn btn-primary">Edit</button>
                    </div>
                    </form>`
                    );
                  $('#edit-statistic').modal('show');
                }
              })
            })
            $('.penampung-edit').on('click','#tombol-edit-kab',function(e){
              e.preventDefault();
              let data = $('#form-edit-kab').serialize();
              $.ajax({
                url : BASE_URL + 'admin/Dashboard_admin/editdatakab/',
                data : data,
                type : 'post',
                dataType : 'json',
                success: function(hasil){
                  $('#edit-statistic').modal('hide');

                  if(hasil.edit == true){
                    Swal.fire({
                      icon: 'success',
                      title: 'Berhasil...',
                      text: 'Selamat Data Berhasil Di edit!',
                    })
                  }else{
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Data Gagal Di edit!',
                    })
                  }
                  setTimeout(function(){
                    location.reload(); 
                  },1000);
                }
              })
            })
            $('#dataTable').on('click','#tombol-editprov', function(){
              let id = $(this).data('id');

              $.ajax({
                url : BASE_URL + 'admin/Dashboard_admin/editdataprov/' + id,
                type : 'edit',
                dataType : 'json',
                success: function(hasil){
                  $('#penampung-edit-prov').html(`
                    <form id="form-provinsi">
                    <div class="modal-body">
                    <div class="form-group">
                    <label for="nama_provinsi">Nama Provinsi</label>
                    <input required="" type="text" name="nama_prov" class="form-control" value="${hasil.provinsi_name}">
                    <input required="" hidden="" type="text" name="id_provinsi" class="form-control" value="${hasil.id_provinsi}">
                    </div>
                    <div class="form-group">
                    <label for="kode_provinsi">Kode Provinsi</label>
                    <input required="" id="kode_provinsi" type="text" name="kode_provinsi" class="form-control" value="${hasil.kode_provinsi}">
                    </div>
                    <div class="form-group">
                    <label for="pdp">ODP</label>
                    <input required="" type="text" name="odp" class="form-control" value="${hasil.odp}">
                    </div>
                    <div class="form-group">
                    <label for="positif">PDP</label>
                    <input required="" type="text" name="pdp" class="form-control" value="${hasil.pdp}">
                    </div>
                    <div class="form-group">
                    <label for="nama_provinsi">Positif</label>
                    <input required="" type="text" name="positif" class="form-control" value="${hasil.positif}">
                    </div>
                    <div class="form-group">
                    <label for="positif">Meninggal</label>
                    <input required="" type="text" name="meninggal" class="form-control" value="${hasil.meninggal}">
                    </div>
                    <div class="form-group">
                    <label for="positif">Sembuh</label>
                    <input required="" type="text" name="sembuh" class="form-control" value="${hasil.sembuh}">
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="tombol-edit-prov">Edit</button>
                    </div>
                    </form>
                    `);
                  $('#modal-prov').modal('show');
                }
              })

            })
            $('#penampung-edit-prov').on('click','#tombol-edit-prov',function(e){
              e.preventDefault();

              let data = $('#form-provinsi').serialize();

              $.ajax({
                url : BASE_URL + 'admin/Dashboard_admin/editprovinsi',
                data : data,
                type : 'POST',
                dataType : 'JSON',
                success: function(hasil){
                  if(hasil.edit == true){
                    Swal.fire({
                      icon: 'success',
                      title: 'Berhasil...',
                      text: 'Selamat Data Berhasil Di edit!',
                    })
                  }else{
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Data Gagal Di edit!',
                    })
                  }
                  setTimeout(function(){
                    location.reload(); 
                  },1000);
                }
              })
            })
            $('#form-media').on('submit', function(e){
              e.preventDefault();
              let data = new FormData(document.forms['form-media']);
              let tampil = $('#tampil-media').val();

              if(tampil === null){
                $('#tampil-kosong').html('Tolong Di isi');
                return false;
              }else{
                $.ajax({
                  url : BASE_URL + 'admin/Dashboard_admin/tambah_media',
                  data : data,
                  contentType : false,
                  cache : false,
                  async : true,
                  processData : false,
                  dataType : 'json',
                  type : 'post',
                  success: function(hasil){
                    if(hasil.insert == true){
                      Swal.fire({
                        icon: 'success',
                        title: 'Berhasil...',
                        text: 'Selamat Data Berhasil Di edit!',
                      })
                    }else{
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Data Gagal Di edit!',
                      })
                    }
                    setTimeout(function(){
                      location.reload(); 
                    },800);

                  }
                })
              }
            })
            $('#dataTable').on('click','#tombol-hapusmedia', function(){
              let id = $(this).data('id');
              let file = $(this).data('file');

              Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.value) {

                 $.ajax({
                  url : BASE_URL + 'admin/Dashboard_admin/hapus_media/' + id + '/' + file, 
                  type : 'get',
                  dataType : 'json',
                  success: function(hasil){
                   if(hasil.delete == true){
                    Swal.fire(
                      'Terhapus',
                      'Data Berhasil Di hapus',
                      'success'
                      )
                  }else{
                    Swal.fire(
                      'Oops!',
                      'Data gagal Di Hapus.',
                      'error'
                      )
                  }
                  setTimeout(function(){
                    location.reload(); 
                  },1000);
                }
              })

               }
             })
            })
            $('#dataTable').on('click','#tombol-tampiledit-media', function(){
              let id = $(this).data('id');

              $.ajax({
                url : BASE_URL + 'admin/Dashboard_admin/tampil_form_editmedia/' + id,
                type : 'get',
                dataType : 'json',
                success: function(hasil){
                  $('.penampug-formedit-media').html(
                    `<form id="form-media" name="form-media-edit">
                    <div class="modal-body">
                    <div class="form-group">
                    <label for="url">URL</label>
                    <input required="" id="url" type="text" name="url" class="form-control" value="${hasil.url}">
                    <input hidden=""  type="text" name="id_media" class="form-control" value="${hasil.id_media}">
                    </div>
                    <div class="form-group">
                    <label for="pdp">Tampil</label>
                    <select required="" class="form-control" name="tampil" id="tampil-media-edit">
                    <option disabled="disabled" selected="" >Pilih Tampilan</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    </select>
                    <div id="tampil-kosong-edit" style="color: red"></div>
                    </div>
                    <img width="100"  src="<?php echo base_url('media/') ?>${hasil.file_name}">
                    <div class="form-group">
                    <label for="nama_file">File Name</label>
                    <input  type="file" name="nama_file" class="form-control" >
                    <input hidden=""  type="text" name="file_lama" class="form-control" value="${hasil.file_name}" >
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" id="edit-data-media" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>`
                    )
                  $('#modal-edit-media').modal('show');
                }
              })
            })
            $('.penampug-formedit-media').on('click','#edit-data-media', function(e){
              e.preventDefault();
              let validasi = $('#tampil-media-edit').val();
              let data = new FormData(document.forms['form-media-edit']);
              console.log(data)
              if(validasi == null){
                $('#tampil-kosong-edit').html('Harus Di Isi');
              }else{
                $.ajax({
                  url : BASE_URL + 'admin/Dashboard_admin/edit_media/',
                  data : data,
                  contentType : false,
                  async : true,
                  processData : false,
                  cache : false,
                  type : 'post',
                  dataType : 'json',
                  success: function(hasil){
                    $('#modal-edit-media').modal('hide');
                    if(hasil.edit == true){
                      Swal.fire({
                        icon: 'success',
                        title: 'Berhasil...',
                        text: 'Selamat Data Berhasil Di edit!',
                      })
                    }else{
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Data Gagal Di edit!',
                      })
                    }
                    setTimeout(function(){
                      location.reload(); 
                    },1000);
                  }
                })
              }
            })
          })
        </script>
      </body>
      </html>



