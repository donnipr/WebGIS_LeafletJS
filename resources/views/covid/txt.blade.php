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
