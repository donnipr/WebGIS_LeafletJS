
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Pemkab Gunungkidul</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">

    <!-- Bootstrap core CSS -->
  <link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .btn-orange{
        color: #fff;
        background-color: #FF6519;
        border-color: #FF6519;
      }

      .btn-yellow{
        color: #ffffff;
        background-color: #ffc107;
        border-color: #ffc107;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
   
    <style type="text/css">
      #mapid { height: 90vh; }
    </style>
  </head>
  <body oncontextmenu='return false' onkeydown='return false;' onmousedown= 'return false;' ondragstart='return false;' onselectstart='return false;'>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-1 bg-white border-bottom shadow-sm">
    <img class="shadow-lg" src="{{asset('ui/logo.png')}}" class="rounded float-left left shadow-lg" alt="..." heigt="41px" width="41px">
    <h4 class="my-0 mr-md-auto font-weight-normal">&nbsp;<strong>PEMERINTAH KABUPATEN</strong><br/>&nbsp;<B>GUNUNGKIDUL</B></h4>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="https://corona.gunungkidulkab.go.id/">Home</a>
    <a class="p-2 text-dark" href="https://gunungkidulkab.go.id/L-da178bcd11653c27d698cecd5f36f673-NW-100-0.html">Update Data</a>
    <a class="p-2 text-dark" href="https://corona.gunungkidulkab.go.id/informasi/">Informasi</a>
    <a class="p-2 text-dark" href="https://corona.gunungkidulkab.go.id/data/">Data</a>
  </nav>
</div>
<div class="img-fluid" alt="Responsive image">
<div class="mb-1 shadow-sm" id="mapid"></div>
</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <p class="lead"><strong>ZONASI RISIKO COVID-19 KABUPATEN GUNUNGKIDUL</strong></p>
</div>
<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">ZONA TIDAK TERDAMPAK</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-lg btn-block btn-success"><b>0-1</b></button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">ZONA RISIKO RENDAH</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-lg btn-block btn-yellow"><b>2-3</b></button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">ZONA RISIKO SEDANG</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-lg btn-block btn-orange"><b>4-6</b></button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">ZONA RISIKO TINGGI</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-lg btn-block btn-danger"><b>7-10</b></button>
      </div>
    </div>
  </div>
 <!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <p class="lead"><strong>SKORING RISIKO KENAIKAN KASUS TINGKAT KECAMATAN DI GUNUNGKIDUL</strong></p>
  </div>
  <div class="container">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kecamatan</th>
      <th scope="col">Kasus</th>
      <th scope="col">Zona</th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1; ?>
  @foreach($data as $key)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{$key->kecamatan}}</td>
    <td>{{$key->kasus}}</td>
    <td>{{$key->zona}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div> -->
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="{{asset('ui/logo.png')}}" alt="" width="50" height="58">
        <small class="d-block mb-3 text-muted">&copy; Pemkab Gunungkidul-2020</small>
      </div>
      <div class="col-6 col-md">
<!--        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div> -->
      <div class="col-6 col-md">
        <h5>Support</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Dinas Kesehatan</a></li>
          <li><a class="text-muted" href="#">Dinas Komunikasi dan Informatika</a></li>
          <li><a class="text-muted" href="#">Dinas Pertanahan dan Tata Ruang</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
                         crossorigin=""></script>

                        <script src="{{asset('js/leaflet.ajax.js')}}"></script>
                        <script src="{{asset('js/leaflet-panel-layers-master/src/leaflet-panel-layers.js')}}"></script>

                        <script type="text/javascript">

                            var mymap = L.map('mapid').setView([-7.990550, 110.636490], 11);

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
                                "color": "#F0FF00",
                                "weight": 1,
                                "opacity": 0.65
                            };

                            var orange = {
                                "color": "#FF6519",
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
