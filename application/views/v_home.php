<div class="content">
	<input type="text" id="searchInput" placeholder="Cari..." value="">
	<br>

	<div id="map" style="width: 100%; height: 600px;"></div>
</div>


<Script>
	var gruplahan = L.layerGroup();
	var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});


	var peta2 = L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
		attribution: 'google'
	});

	var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});
	const map = L.map('map', {
		center: [-0.061632071848876535, 117.48514419278024],
		zoom: 16,
		layers: [peta2, gruplahan]
	});

	const baseLayers = {
		'Grayscale': peta1,
		'Satelite': peta2,
		'Streets': peta3
	};

	const overlays = {
		"lahan": gruplahan
	};

	const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

	const searchInput = document.getElementById('searchInput');

function updateMap(keyword) {
    gruplahan.clearLayers();

    <?php foreach ($lahan as $key => $value) { ?>
        if ("<?= strtolower($value->pemilik_lahan) ?>".includes(keyword)) {
            var lahan = L.geoJSON(<?= $value->denah_geojson; ?>, {
                style: {
                    color: 'white',
                    fillColor: '<?= $value->warna ?>',
                    fillOpacity: 1.0,
                }
            }).addTo(gruplahan);

            lahan.eachLayer(function(layer) {
                layer.bindPopup("<p></p><img src='<?= base_url('gambar/' . $value->gambar) ?>' width= '200px'><br><br>" +
                    "Nama Lahan : <?= $value->nama_lahan ?></br>" +
                    "Luas Lahan : <?= $value->luas_lahan ?></br>" +
                    "Pemilik Lahan : <?= $value->pemilik_lahan ?></br>" +
                    "Alamat Pemilik : <?= $value->alamat_pemilik ?></br>" +
                    "Keterangan Lahan : <?= $value->isi_lahan ?></br></br>" +
                    "<a href='<?= base_url('home/detail_lahan/' . $value->id_lahan) ?>'class='btn btn-sm btn-default btn-block'>Detail</a>" +
                    "</p>");
            });
        }
    <?php } ?>
}

searchInput.addEventListener('input', function() {
    const keyword = searchInput.value.toLowerCase();
    updateMap(keyword);
});

// Panggil updateMap tanpa keyword saat halaman pertama kali dimuat
updateMap('');
</script>