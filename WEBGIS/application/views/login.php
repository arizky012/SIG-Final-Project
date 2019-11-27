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

    <title>Login</title>

    <link href="./assets/bootstrap.min.css" rel="stylesheet">

    <link href="./assets/custom.css" rel="stylesheet">
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
        <div class="container-fluid  mt-5  p-3 text-light" style="font-size: large;">
            <div class="row  justify-content-center">
                <div class="col-auto bg-danger p-5">
                    <form>
                        <div class="row">
                            <div class="col">
                                USERNAME
                            </div>
                            <div class="col-auto">
                                <input placeholder="YOUR USERNAME">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                PASSWORD
                            </div>
                            <div class="col-auto">
                                <input placeholder="********">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button>LOGIN</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
        <!--container-->

    </main>
</body>