<div class="content">
    <div class="row">

        <div class="col-sm-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lahan</h3>
                </div>
                <div class="card-body">
                    <div id="map" style="width: 100%; height: 400px;"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Lahan</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th width="150px">Nama Lahan</th>
                            <th width="50px">:</th>
                            <td><?= $lahan->nama_lahan?></td>
                        </tr>
                        <tr>
                            <th>Luas Lahan</th>
                            <th>:</th>
                            <td><?= $lahan->luas_lahan?></td>
                        </tr>
                        <tr>
                            <th>Keterangan Lahan</th>
                            <th>:</th>
                            <td><?= $lahan->isi_lahan?></td>
                        </tr>
                        <tr>
                            <th>Pemilik Lahan</th>
                            <th>:</th>
                            <td><?= $lahan->pemilik_lahan?></td>
                        </tr>
                        <tr>
                            <th>Alamat Pemilik</th>
                            <th>:</th>
                            <td><?= $lahan->alamat_pemilik?></td>
                        </tr>
                        <tr>
                            <th>Gambar</th>
                            <th>:</th>
                            <td><img src="<?= base_url('gambar/'.$lahan->gambar)?>" width="200px"></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
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
		center: [-0.051471, 117.493654],
		zoom: 15,
		layers: [peta2, gruplahan]
	});

	const baseLayers = {
		'Grayscale': peta1,
        'Satelite':peta2,
		'Streets': peta3
	};

	const overlays = {
		"lahan" : gruplahan
	};

	const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

    var lahan = L.geoJSON(<?= $lahan->denah_geojson; ?>,{
			style: {
				color : 'white',
				fillColor : '<?= $lahan->warna?>',
				fillOpacity : 1.0,
			}
		}).addTo(gruplahan);
		lahan.eachLayer(function(layer){
			layer.bindPopup("<p></p><img src='<?= base_url('gambar/'.$lahan->gambar)?>' width= '200px'><br><br>"+
			"Nama Lahan : <?= $lahan->nama_lahan ?></br>" +
			"Luas Lahan : <?= $lahan->luas_lahan ?></br>" +
			"Pemilik Lahan : <?= $lahan->pemilik_lahan ?></br>" +
			"Alamat Pemilik : <?= $lahan->alamat_pemilik ?></br>" +
			"Keterangan Lahan : <?= $lahan->isi_lahan ?></br></br>" +
			"<a href='<?= base_url('home/detail_lahan/' .$lahan->id_lahan)?>'class='btn btn-sm btn-default btn-block'>Detail</a>"+
			"</p>");
		});

        map.fitBounds(lahan.getBounds());


</script>