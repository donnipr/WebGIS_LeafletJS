@extends('master.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard GEOJSON_DPTRK-GK</div>

                <div class="card-body">
                <!--    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  

                    You are logged in!  -->
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
   
                        <style type="text/css">
                            #mapid { height: 80vh; }
                        </style>

                    </head>
                    <body>

 	                    <div id="mapid"></div>
                    </body>
  
                         <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
                         crossorigin=""></script>

                        <script src="{{asset('js/leaflet.ajax.js')}}"></script>
                        <script src="{{asset('js/leaflet-panel-layers-master/src/leaflet-panel-layers.js')}}"></script>

                        <script type="text/javascript">

                            var map = L.map('mapid').setView([-7.985383,110.690393], 10);

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

                            @foreach($data as $key)
                            
                            var myStyle {{$key->id}}= {
                                "color": "{{$key->zona}}",
                                "weight": 1,
                                "opacity": 0.65
                            };

                           
			name: "{{$key->kecamatan}}",
			icon: iconByName{{$key->zona}},
			layer: new L.GeoJSON.AJAX(["assets/giscovid/'.$key->upload.'"],{onEachFeature:popUp,style: myStyle'.$key->id.',pointToLayer: featureToMarker }).addTo(map)
			}';



                            @endforeach

                            


                            
                            var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers);

                            map.addControl(panelLayers);
                        </script> 

                    </html>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
