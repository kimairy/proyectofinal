<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Mapa de Google Maps</title>
<meta name="Description" content="Mapa elemental de Google Maps para usarlo desde la PC, que se muestra a todo lo ancho y alto del navegador e incluye un cuadro de b&#250;squeda.">
<meta name ="author" content ="Norfi Carrodeguas">
<style type="text/css" media="screen">
<!--
html,body{height:100%;margin:0;padding:0;}
#map{height:96%;}
-->
</style>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=iniciar"></script>
<script type="text/javascript" src="<?php base_url() ?>public/js/gmap.js"></script>

<script>
  $(document).ready(function(){
  map=  new GMaps({
      div: '#map',
      lat: -12.043333,
      lng: -77.028333
    });

    map.addMarker({
      lat: -12.043333,
      lng: -77.028333,
      title: 'Lima',
      click: function(e) {
        alert('You clicked in this marker');
      }
    });


  })
</script>
</head>
<body>

<div id="map"></div>

</body>
</html>
