<h4>Catatan Medis</h4>
<?= Message::showFlash();?>
<div class="">
    <a href="javascript:history.go(-1)" class="btn btn-secondary float-start">Kembali</a>
    <a href="<?= BASEURL."?p=catatan_medis&a=form";?>" class="btn btn-success float-end">Tambah Data</a>
</div>
<table class="table table-responsive bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Dokter</th>
            <th>Pasien</th>
            <th>Penyakit</th>
            <th>Tanggal</th>
            <th>Resep</th>
            <th class="aksi">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            $query = $db->query("SELECT * FROM catatan_medis");
            $result = $db->resultSet();
            foreach($result as $r):
        ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $r['dokter_id'];?></td>
                <td><?= $r['pasien_id'];?></td>
                <td><?= $r['penyakit_id'];?></td>
                <td><?= $r['tanggal'];?></td>
                <td><?= $r['resep'];?></td>
                <td class="aksi">
                    <a href="<?= BASEURL."?p=catatan_medis&a=form&id=".$r['id'];?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="<?= BASEURL."catatan_medis/action.php?a=delete&id=".$r['id'];?>" class="btn btn-danger btn-sm delete-button" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
