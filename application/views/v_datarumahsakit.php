<div class="col-sm-12">
<?php
    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
        echo $this->session->flashdata('pesan');
        echo '</div>';
    }
?>
    <table class="table table-responsive table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Rumah Sakit</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Keterangan</th>
                <?php if($this->session->userdata('username')<>""){ ?>
                <th>Action</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($rumahsakit as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->nama_rs ?></td>
                <td><?= $value->alamat ?></td>
                <td><?= $value->kecamatan ?></td>
                <td><?= $value->keterangan ?></td>
                <?php if($this->session->userdata('username')<>""){ ?>
                <td>
                    <a href="<?= base_url('rumahsakit/edit/'.$value->id_rs) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= base_url('rumahsakit/hapus/'.$value->id_rs) ?>" class="btn btn-sm btn-danger" 
                    onclick="return confirm('Apakah Data Ingin Dihapus...? ')">Hapus</a>
                </td>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>