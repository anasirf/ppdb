<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- <table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Nama</th>
            <th>No Pendaftaran</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($data as $key => $value) :
        ?>
        <tr>
            <th><?=$value['nama']?></th>
            <th><?=$value['no_ppdb']?></th>
            <th><?=$value['alamat_tinggal']?></th>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table> -->
<?= $this->endSection() ?>