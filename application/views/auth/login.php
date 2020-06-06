
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $title ?></title>
        <link href="<?php echo base_url() ?>assets/admin/dist/css/styles.css" rel="stylesheet" />
        <!-- ICON -->
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/image/logo.png') ?>" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="card shadow-md border-0 rounded-md mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">
                                        <b>Login Admin</b></h3></div>
                                    <div class="card-body">
                                        <div class="alert alert-info" id="success" style="display: none;">
                                            <span>Login Sukses</span>
                                        </div>
                                        <div class="alert alert-danger" id="failed" style="display: none;">
                                            <span id="message"></span>
                                        </div>
                                        <form id="login">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Username</label><input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Enter Username" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input class="btn btn-primary" type="submit" id="login" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Info Corona 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>assets/admin/dist/js/scripts.js"></script>
        <script type="text/javascript">
            // $(document).ready(function(){
                $('#login').on('submit',function(e){
                    e.preventDefault();
                    var username = $('#inputEmailAddress').val();
                    var password = $('#inputPassword').val();

                    var data = 'username='+username+"&password="+password;

                    $.ajax({
                        url: '<?=base_url('login/login_aksi')?>',
                        data: data,
                        dataType: 'json',
                        type: 'POST',
                        beforeSend: function(){
                            $('#failed').hide();
                            $('#success').hide();
                            $('#login').val('Loading.....');
                        },
                        success: function(data){
                            if (data.status == 1) {
                                $('#success').show();
                                setTimeout(function(){
                                    window.location.href = '<?= base_url('admin/dashboard_admin') ?>';
                                }, 3000);
                            } else {
                                $('#failed').show();
                                $('#message').html(data.message);
                                $('#login').val('Login');
                            }
                        }
                    });
                });
            // });
        </script>
    </body>
</html>
