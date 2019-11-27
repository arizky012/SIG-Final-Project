<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>/assets/bootstrap.min.css" rel="stylesheet">
  
  <link href="<?=base_url() ?>assets/leaflet/leaflet.css" rel="stylesheet">
  <script src="<?=base_url() ?>assets/leaflet/leaflet.js"></script>


<style type="text/css">
  .user{
    padding:5px;
    margin-bottom: 5px;
  }
  #mapid { 
    height: 70vh;
    width: 80vw;
   }
</style>
</head>
<body>


<main role="main">
        <div class="container-fluid">
            <div class="row bg-primary pt-1 pb-1">
                <div class="col text-center text-light">
                    <h1>WEBGIS PEMETAAN RESTAURANT VEGETARIAN</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        <div class="row  pt-1 pb-1 justify-content-center">
                <div class="row  pt-1 pb-1 justify-content-center">
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
            <div class="container-fluid">
                <div class="row pt-1 pb-1 justify-content-center">
                    <div class="col-10">
                     <div id="mapid"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </main>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?=base_url() ?>assets/js/BootSideMenu.js"></script>

  <script type="text/javascript">
    $('#test').BootSideMenu({side:"left", autoClose:false});
	var map = L.map('mapid').setView([-5.133288, 119.485872], 13);
  var base_url = "<?=base_url()?>";

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

  $.getJSON(base_url+"index.php/home/restoran_json", function(data){
    $.each(data, function(i, field){
//      alert(data[i].bangunan_nama); 
      var v_lat= parseFloat(data[i].rest_lat);
      var v_long= parseFloat(data[i].rest_long);
      var icon_icon = L.icon({
        iconUrl:base_url+'/assets/image/daun.png',iconSize: [40,40]});

      L.marker([v_lat, v_long],{icon:icon_icon}).addTo(map)
        .bindPopup(data[i].rest_nama)
        .openPopup();
    });
  });
  </script>
</body>
</html>  