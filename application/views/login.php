    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TIKET KONSER | Login</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets1/img/x.png">

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-maroon">
                <div class="card-header text-center"><br>
                    <img src="<?php echo base_url() ?>assets1/img/x.png" alt="" class="brand-image elevation-0" width="70px" height="70px" >
                <br>
                    <p href="#" class="h2"><b>TIKET KONSER</b></p>
                    <p href="#" class="h6 text-maroon"><b>Event by Agen X</b></p>
                </div>
                <div class="card-body">
                    <p class="login-box-msg"><strong>Silahkan Login</strong></p>

                <form action="<?php echo site_url() ?>/login/validasi" method="post">
                    <div class="input-group mb-4">
                        <input type="username" name="username" class="form-control" placeholder="Username. . ." autofocus autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text bg-maroon">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password. . .">
                        <div class="input-group-append">
                            <div class="input-group-text bg-maroon">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div> <br>

                    <div class="row justify-content-center">
                        <div class="col-5">
                            <button type="submit" class="btn bg-maroon btn-block"><b>Masuk</b></button>
                        </div>
                    </div><br>
                    <?php echo $this->session->flashdata('message'); ?>
                </form>

                <center>
                    <p>Belum jadi Member ?<a href="<?php echo base_url('registration/index') ?>" class="text-center"> Silahkan Daftar</a></p>
                </center>

            </div>
        </div>
    </div><br>


    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
    <!-- Bootstrap 4 -->
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
        <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
        <script src="<?php echo base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
        <script src="<?php echo base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
        <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
        <script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
        <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
</body>
</html>
