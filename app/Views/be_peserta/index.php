<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>No Pendaftaran</th>
            <th>Nama</th>
            <th>E-mail</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $key => $value) :
        ?>
            <tr>
                <td><?= $value['no_ppdb'] ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['email'] ?></td>
                <td>
                    <button class="btn btn-success">detail</button>
                    <button class="btn btn-danger">hapus</button>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>