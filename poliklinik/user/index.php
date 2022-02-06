<h4>User</h4>
<div class="">
    <a href="<?= BASEURL;?>" class="btn btn-secondary float-start">Kembali</a>
    <a href="<?= BASEURL."?p=user&a=form";?>" class="btn btn-success float-end">Tambah Data</a>
</div>
<table class="table table-responsive bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kontak</th>
            <th>Alamat</th>
            <th class="aksi">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            $query = $db->query("SELECT * FROM user");
            $result = $db->resultSet();
            foreach($result as $r):
        ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $r['nama'];?></td>
                <td><?= $r['jenis_kelamin'];?></td>
                <td><?= $r['kontak'];?></td>
                <td><?= $r['alamat'];?></td>
                <td class="aksi">
                    <a href="<?= BASEURL."?p=user&a=form&id=".$r['id'];?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>