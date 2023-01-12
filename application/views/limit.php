<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <title>Error kUTh Apps | Limit</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/UT.png">

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/> -->
    
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
    <style>
    
    body{

        }
        /*     General overwrite     */
        a{
            color: #2C93FF;
        }
        a:hover, a:focus {
            color: #1084FF;
        }
        a:focus, a:active,
        button::-moz-focus-inner,
        input[type="reset"]::-moz-focus-inner,
        input[type="button"]::-moz-focus-inner,
        input[type="submit"]::-moz-focus-inner,
        select::-moz-focus-inner,
        input[type="file"] > input[type="button"]::-moz-focus-inner {
            outline : 0;
        }

        /*           Typography          */

        p{
            font-size: 16px;
            line-height: 1.6180em;
        }

        .main{
            /* background-image: url('<?php echo base_url() ?>assets/dist/img/unitedtractors.jpg'); */
            background-image: url('<?php echo base_url() ?>assets/dist/img/yellow.jpg');
            background-position: center center;
            background-size: cover;
            height: auto;
            left: 0;
            min-height: 100%;
            min-width: 100%;
            position: absolute;
            top: 0;
            width: auto;
        }
        .cover{
            position: fixed;
            opacity: 1;
            background-color: rgba(0,0,0,.6);
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .cover.black{
            background-color: rgba(0,0,0,.3);
        }

        .logo-container .logo{
            overflow: hidden;
            border-radius: 50%;
            border: 1px solid #333333;
            width: 60px;
            float: left;
        }

        .main .logo{
            color: #FFFFFF;
            font-size: 56px;
            font-weight: 300;
            position: relative;
            text-align: center;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.33);
            margin-top: 150px;
            z-index: 3;
        }
        .main .logo.cursive{
            font-family: 'Grand Hotel',cursive;
            font-size: 82px;

        }
        .main .content{
            position: relative;
            z-index: 4;
        }
        .main .motto{
            min-height: 140px;
        }
        .main .motto, .main .subscribe .info-text{
            font-size: 25px;
            color: #FFFFFF;
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.33);
            text-align: center;
            margin-top: 20px;

        }
        .main .subscribe .info-text{
            font-size: 18px;
            margin-bottom: 30px;
        }

        .footer{
            position: relative;
            bottom: 20px;
            right: 0;
            width: 100%;
            color: #AAAAAA;
            z-index: 4;
            text-align: right;
            margin-top: 50px;
        }
        .footer a{
            color: #FFFFFF;
        }

        @media (min-width:991px){
            .footer{
                position: fixed;
                bottom: 20px;
            }
        }
    </style>

    <!--     Fonts     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
<div class="main">
    <div class="cover black" data-color="black"></div>
    <div class="container">
        <h1 class="logo cursive">
            Peringatan !!
        </h1><br>

        <div class="content">
            <h4 class="motto">Telah mencapai Batas Peggunaan<br>Silahkan Hubungi Pihak Developers!!</h4>
            <center>
                <a href="<?php echo base_url() ?>dashboard/index" class="btn btn-primary btn-sl justify-content-center"><b>Go To Dashboard</b></a>
            </center>
        </div>
    </div> <br> <br>

</div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
