<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHqhgVQmhdp3XAJ91LHRdXJ3YOjP1V2Gs" async defer></script> -->
<script src="<?=base_url('assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js')?>"></script>
<script src="<?=base_url('assets/js/leaflet.ajax.js')?>"></script>
<script src="<?=base_url('assets/js/leaflet-compass-master/src/leaflet-compass.js')?>"></script>
<script src="<?=base_url('assets/js/Leaflet.GoogleMutant.js')?>"></script>

<style>
    .info { padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
.legend { text-align: left; line-height: 18px; color: #555; } .legend i { width: 18px; height: 18px; float: left; margin-right: 8px; opacity: 0.7; }
</style>

<script>
var mymap = L.map('map').setView([1.3523149, 109.2868825], 10);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);



// <?php foreach ($kecamatan as $kcm) : ?>
//     var myStyle = {
//         "color": "<?= $kcm['warna_kecamatan'] ?>",
//         "weight": 1,
//         "opacity": 0.9
//     };
// <?php endforeach; ?>

// control that shows state info on hover
var info = L.control();

info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info');
    this.update();
    return this._div;
};

info.update = function (props) {
    this._div.innerHTML = '<h4>Daerah Rawan Kekerasan</h4>' +  (props ?
        '<b>' + props.KECAMATAN + '</b><br />' + props.DESA + '  / m<sup>2</sup>'
        : 'Tingkat Kekerasan');
};

info.addTo(mymap);


// get color depending on population density value
function getColor(d) {
    return d > 1000 ? '#800026' :
            d > 500  ? '#BD0026' :
            d > 200  ? '#E31A1C' :
            d > 100  ? '#FC4E2A' :
            d > 50   ? '#FD8D3C' :
            d > 20   ? '#FEB24C' :
            d > 10   ? '#FED976' :
                        '#FFEDA0';
}

function style(feature) {
    return {
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7,
        fillColor: getColor(feature.properties.KECAMATAN)
    };
}

function highlightFeature(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 3,
        color: '#00FF00',
        dashArray: '',
        fillOpacity: 0.7
    });

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }

    info.update(layer.feature.properties);
}

// var geojson;

function resetHighlight(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7,
    });
}

function zoomToFeature(e) {
    mymap.fitBounds(e.target.getBounds());
}

function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeature
    });
}

// Memanggil GeoJSON (pop Up)
<?php foreach ($kecamatan as $kcm) : ?>
    function popUp(f,l){
        var html= '';
        if (f.properties){
            html+='<table class="">';
            html+='<thead>';
                html+='<tr>'
                    html+='<div  class="p-3 mb-2 bg-primary text-white">Kasus Kekerasan</div>';  
                html+='</tr>';
            html+='</thead>';
            html+='<tr>';
                html+='<td colspan="3"><img src="<?=base_url('assets/images/graduate-icon-png-28-2.png') ?>" width="50px"></td>';
            html+='</tr>';
            html+='<tr>'
                html+='<td class="">Kecamatan</td>';
                html+='<td>:</td>';
                html+='<td class="text-center">'+f.properties['KECAMATAN']+'</td>';
            html+='</tr>';
            html+='<tr>'
                html+='<td class="">Desa</td>';
                html+='<td>:</td>';
                html+='<td class="text-center">'+f.properties['DESA']+'</td>';
            html+='</tr>';
            html+='<tr>'
                html+='<td class="">Jumlah Kasus</td>';
                html+='<td>:</td>';
                html+='<td class="text-center">2</td>';
            html+='</tr>';
            html+='<tr>'
                html+='<td class="">Jenis Kasus</td>';
                html+='<td>:</td>';
                html+='<td class="text-center">Kdrt dan Non Kdrt</td>';
            html+='</tr>';
            html+='</table>';
            html+='<button class="btn btn-info"><i class="fa fa-info"></i>Info</button>';
            l.bindPopup(html);
        
        // var out = [];
        // if (f.properties){
        //     out.push("Desa : "+f.properties['DESA'])
        //     out.push("Kec : "+f.properties['KECAMATAN'])
        //     l.bindPopup(out.join("<br />"));
        }
    }


        var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/geojson/<?= $kcm['geojson_kecamatan'] ?>"],
            {
                style: style,
                onEachFeature: onEachFeature,
                // onEachFeature: popUp,
            }).addTo(mymap);
<?php endforeach; ?>


var legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {

		var div = L.DomUtil.create('div', 'info legend'),
			grades = [0, 10, 20, 50, 100, 200, 500, 1000],
			labels = [],
			from, to;

		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(
				'<i style="background:' + getColor(from + 1) + '"></i> ' +
				from + (to ? '&ndash;' + to : '+'));
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	legend.addTo(mymap);

</script>
