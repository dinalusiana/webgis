<div class="col-sm-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Lokasi Rumah Sakit
        </div>
        <div class="panel-body">
        <div id="mapid" style="height: 500px;"></div>
        
        </div>
    </div>
</div>


<div class="col-sm-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Input Data
        </div>
        <div class="panel-body">
            <?php 
            echo validation_errors('<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>',
            '</div>');

            //notifikasi berhasil disimpan
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            echo form_open('rumahsakit/edit/'.$rumah_sakit->id_rs);
            ?>
            
            <div class="form-group">
                <label>Nama Rumah Sakit</label>
                <input name="nama_rs" placeholder="Nama Rumah Sakit" value="<?= $rumah_sakit->nama_rs ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" placeholder="Alamat" value="<?= $rumah_sakit->alamat ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label>Kecamatan</label>
                <input name="kecamatan" placeholder="Kecamatan" value="<?= $rumah_sakit->kecamatan ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label>Latitude</label>
                <input id="Latitude" name="latitude" placeholder="Latitude" value="<?= $rumah_sakit->latitude ?>" class="form-control" readonly/>
            </div>
            <div class="form-group">
                <label>Longitude</label>
                <input id="Longitude" name="longitude" placeholder="Longitude" value="<?= $rumah_sakit->longitude ?>" class="form-control" readonly/>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input name="keterangan" placeholder="Keterangan" value="<?= $rumah_sakit->keterangan ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label></label>
                <button type="submit" class="btn bts-sm btn-primary">Simpan</button>
                <button type="reset" class="btn bts-sm btn-danger">Reset</button>
            </div>
            
            <?php echo form_close(); ?>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/leaflet/leaflet.js"></script>
<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[<?= $rumah_sakit->latitude ?>, <?= $rumah_sakit->longitude ?>];	
}

var mymap = L.map('mapid').setView([<?= $rumah_sakit->latitude ?>, <?= $rumah_sakit->longitude ?>], 16);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11'
}).addTo(mymap);

mymap.attributionControl.setPrefix(false);
var marker = new L.marker(curLocation, {
	draggable:'true'
});

marker.on('dragend', function(event) {
var position = marker.getLatLng();
marker.setLatLng(position,{
	draggable : 'true'
	}).bindPopup(position).update();
	$("#Latitude").val(position.lat);
	$("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function(){
	var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
	marker.setLatLng(position, {
	draggable : 'true'
	}).bindPopup(position).update();
	mymap.panTo(position);
});
mymap.addLayer(marker);

</script>