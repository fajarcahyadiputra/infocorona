            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        
                        <div class="row">
                           <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-pie mr-1"></i>Chart COVID-19 (Global Data)</div>
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-pie mr-1"></i>Chart COVID-19 (Indonesia)</div>
                                    <div class="card-body"><canvas id="myPieChart1" width="100%" height="50"></canvas></div>
                                    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Statistic COVID-19 (Indonesia)</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Provinsi</th>
                                                <th>Positif</th>
                                                <th>Meninggal</th>
                                                <th>Sembuh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach ($indonesia as $key) {
                                            ?>  
                                            <tr>
                                                <td><?=$key['provinsi_name']?></td>
                                                <td><?=$key['positif']?></td>
                                                <td><?=$key['meninggal']?></td>
                                                <td><?=$key['sembuh']?></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
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
                </main>

          