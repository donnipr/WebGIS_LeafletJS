<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" src="{{asset('ui/logo.png')}}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Pemkab Gunungkidul</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
   
                       <style type="text/css">
                            #mapid { height: 90vh; }
                        </style>
   
  </head>
  <body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow-sm">
  <div class="">
  <div class="row">
    <div class="col-sm">
    <img class="shadow-lg" src="{{asset('ui/logo.png')}}" class="rounded float-left left shadow-lg" alt="..." heigt="40px" width="40px">
    </div>
    <div class="col-sm-15">
    <h5 class="my-0 mr-md-auto font-weight-normal shadow-sm"><b>KABUPATEN GUNUNGKIDUL</b><br/>DAERAH ISTIMEWA YOGYAKARTA</h5>
    </div>
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
    </div>
    <div class="col-sm-15">

    </div>
  </div>
</div> 


 <nav class="col-6 col-md-4 navbar-right my-2 my-md-0 mr-md-3 ">
    <a class="p-2 text-dark" href="#">Home</a>
    <a class="p-2 text-dark" href="#">Data</a>
    <a class="p-2 text-dark" href="#">Informasi</a>
    <a class="p-2 text-dark" href="#">Cek Lokasi</a>
  </nav> 
</div>

<div class="img-fluid" alt="Responsive image">
<div class="mb-1 shadow-sm" id="mapid"></div>
</div>

<footer class="footer mt-auto py-3 shadow-lg">
  <div class="container">
  <div class="row">
    <div class="col-sm-8">
    <h6>&copy; Copyright <strong>Pemkab Gunungkidul</strong>. All Rights Reserved</h6>
    </div>
    <div class="col-sm-4">
    <h6>Web Developed <strong>IT Dispertaru</strong></h6>
    </div>
  </div>
</div>
    
  </div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
                         crossorigin=""></script>

                        <script src="{{asset('js/leaflet.ajax.js')}}"></script>
                        <script src="{{asset('js/leaflet-panel-layers-master/src/leaflet-panel-layers.js')}}"></script>

                        <script type="text/javascript">

                            var mymap = L.map('mapid').setView([-7.985383,110.690393], 10);

                            var LayerKita=L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	                            maxZoom: 18,
	                            id: 'mapbox.dark',
	                            accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'

                                });
                                mymap.addLayer(LayerKita);

                            var merah = {
                                "color": "#FF0000",
                                "weight": 1,
                                "opacity": 0.65
                            };

                            var hijau = {
                                "color": "#00FF00",
                                "weight": 1,
                                "opacity": 0.65
                            };

                            var kuning = {
                                "color": "#FFFF00",
                                "weight": 1,
                                "opacity": 0.65
                            };

                            var orange = {
                                "color": "#FFA500",
                                "weight": 1,
                                "opacity": 0.65
                            };

                            function popUp(f,l){
                                var out = [];
                                if (f.properties){
                               // for(key in f.properties){
                                //out.push(key+": "+f.properties[key]);
                            //}
                                out.push("Kecamatan: "+f.properties['NAMA_KEC']);
                                 l.bindPopup(out.join("<br />"));
                            }
                            }

                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/gedangsari.geojson')}}"],{onEachFeature:popUp,style: myStyle1}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/girisubo.geojson')}}"],{onEachFeature:popUp,style: myStyle}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/karangmojo.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/ngawen.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/nglipar.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/paliyan.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/panggang.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/patuk.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/playen.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/ponjong.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/purwosari.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/rongkop.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/saptosari.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/semanu.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/semin.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/tanjungsari.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/tepus.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);
                            //var jsonTest = new L.GeoJSON.AJAX(["{{asset('covid/wonosari.geojson')}}"],{onEachFeature:popUp}).addTo(mymap);

        //Legend    
     



                            function iconByName(name) {
	                            return '<i class="icon icon-'+name+'"></i>';
                            }

                            function featureToMarker(feature, latlng) {
	                                return L.marker(latlng, {
		                            icon: L.divIcon({
			                        className: 'marker-'+feature.properties.amenity,
			                        html: iconByName(feature.properties.amenity),
			                        iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
			                        iconSize: [25, 41],
			                        iconAnchor: [12, 41],
			                        popupAnchor: [1, -34],
			                        shadowSize: [41, 41]
		                        })
	                         });
                            }

                            var baseLayers = [
	                            {
		                            name: "Mapbox Dark",
		                            layer: LayerKita
	                            },
	                            {
		                            name: "OpenStreetMap",
		                            layer: L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
	                            },
	                            {
		                            name: "Esri Gray",
		                            layer: L.tileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
                			        attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ',
                			        maxZoom: 16
                		            })
	                            }
                            ];

                            var overLayers = [
	                            {
		                            name: "Wonosari",
		                            icon: iconByName('bar'),
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/wonosari.geojson')}}"],{onEachFeature:popUp,style:merah,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
	                            {
		                            name: "Girisubo",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/girisubo.geojson')}}"],{onEachFeature:popUp,style:hijau,pointToLayer:featureToMarker}).addTo(mymap)
	                                },
                                {
		                            name: "Patuk",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/patuk.geojson')}}"],{onEachFeature:popUp,style:kuning,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Playen",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/playen.geojson')}}"],{onEachFeature:popUp,style:orange,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Nglipar",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/nglipar.geojson')}}"],{onEachFeature:popUp,style:merah,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Gedangsari",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/gedangsari.geojson')}}"],{onEachFeature:popUp,style:kuning,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Ngawen",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/ngawen.geojson')}}"],{onEachFeature:popUp,style:hijau,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Semin",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/semin.geojson')}}"],{onEachFeature:popUp,style:kuning,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Karangmojo",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/karangmojo.geojson')}}"],{onEachFeature:popUp,style:merah,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Ponjong",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/ponjong.geojson')}}"],{onEachFeature:popUp,style:orange,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Semanu",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/semanu.geojson')}}"],{onEachFeature:popUp,style:merah,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Tepus",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/tepus.geojson')}}"],{onEachFeature:popUp,style:kuning,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Rongkop",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/rongkop.geojson')}}"],{onEachFeature:popUp,style:hijau,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Saptosari",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/saptosari.geojson')}}"],{onEachFeature:popUp,style:hijau,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Tanjungsari",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/tanjungsari.geojson')}}"],{onEachFeature:popUp,style:orange,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Panggang",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/panggang.geojson')}}"],{onEachFeature:popUp,style:hijau,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Paliyan",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/paliyan.geojson')}}"],{onEachFeature:popUp,style:orange,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                                {
		                            name: "Purwosari",
		                            icon: iconByName('drinking_water'), 
		                            layer: new L.GeoJSON.AJAX(["{{asset('covid/purwosari.geojson')}}"],{onEachFeature:popUp,style:hijau,pointToLayer:featureToMarker}).addTo(mymap)
	                            },
                            ];

                            var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers);

                            mymap.addControl(panelLayers);
                        </script> 
</html>