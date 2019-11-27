<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME - Restaurant Vegetarian</title>
    <link href="<?php echo base_url() ?>/assets/bootstrap.min.css" rel="stylesheet">
</head>


<body class="custom-body" style="font-family: arial">

    <main role="main">
        <div class="container-fluid">
            <div class="row bg-primary pt-5 pb-5 mt-5">
                <div class="col text-center text-light">
                    <h1>WEBGIS PEMETAAN RESTAURANT VEGETARIAN</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row  mt-3 pt-1 pb-1 justify-content-center">
                <div class="row  mt-3 pt-1 pb-1 justify-content-center">
                    <div class="col-auto text-center">
                        <h1><button><a href="<?php echo base_url() ?>index.php/home/index">HOME</a></button></h1>
                    </div>
                    <div class="col-auto text-center">
                        <h1><button><a  href="<?php echo base_url() ?>index.php/home/maps">MAPS</a></button></h1>
                    </div>
                    <div class="col-auto text-center">
                        <h1><button><a href="<?php echo base_url() ?>index.php/home/toko">DAFTAR TOKO</a></button></h1>
                    </div>
                    <div class="col-auto text-center">
                        <h1><button><a href="<?php echo base_url() ?>index.php/home/login">LOGIN</a></button></h1>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
        <div class="container text-light" style="font-size: 20pt; text-align: center;">
            <div class="row">
                <div class="col bg-info">
                    <p>
                        selamat datang di web kami, kami harap web ini dapat membantu pengunjung untuk menemukan restoran vegetarian favorit
                    </p>

                </div>

            </div>
        </div>

    </main>
</body>