<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Ayah</h1>
</div>
<!--ini form-->
<div class="container">
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name">
            <div id="nameHelp" class="form-text">Nama Ayah tanpa menggunakan gelar</div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name">
            <div id="nameHelp" class="form-text">Nama Ayah dengan menggunakan gelar</div>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK/No. KITAS (Untuk WNA)</label>
            <input type="text" class="form-control" id="nik" aria-describedby="nikHelp">
            <div id="nikHelp" class="form-text">Nomor Induk Kependudukan yang tercantum pada KK / KTP bagi WNA diisi menggunakan nomor Kartu Izin Tinggal Terbatas (KITAS).</div>
        </div>
        <div class="mb-3">
            <label for="nokk" class="form-label">No. KK</label>
            <input type="text" class="form-control" id="nokk">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir">
            <div id="tempat_lahirHelp" class="form-text">Tempat Lahir sesuai dokumen resmi yang berlaku akte atau ijazah</div>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tangal_lahir" class="form-control" name="tanggal_lahir">
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" aria-label="Default select example">
                <option></option>
                <option value="1">Islam</option>
                <option value="2">Kristen Protestan</option>
                <option value="3">Katholik</option>
                <option value="4">Hindu</option>
                <option value="5">Budha</option>
                <option value="6">Konghuchu</option>
                <option value="7">Kepercayaan Kepada Tuhan YME</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pendidikan" class="form-label">Pendidikan</label>
            <input type="text" class="form-control" id="pendidikan">
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan">
        </div>
        <div class="mb-3">
            <label for="instansi" class="form-label">Instansi</label>
            <input type="text" class="form-control" id="instansi">
        </div>
        <div class="mb-3">
            <label for="gaji" class="form-label">Penghasilan</label>
            <input type="text" class="form-control" id="gaji">
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Tempat Tinggal</label>
            <input type="text" class="form-control" id="alamat">
            <div id="alamatHelp" class="form-text">Alamat tinggal Ayah peserta didik diisi secara lengkap.</div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="rt" class="form-label">RT </label>
                <input type="text" class="form-control" id="rt">
            </div>
            <div class="col-3">
                <label for="rw" class="form-label">RW </label>
                <input type="text" class="form-control" id="rw">
            </div>
        </div>
        <div class="mb-3">
            <label for="dusun" class="form-label">Dusun </label>
            <input type="text" class="form-control" id="dusun">
        </div>
        <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan </label>
            <input type="text" class="form-control" id="kelurahan">
        </div>
        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan </label>
            <input type="text" class="form-control" id="kecamatan">
        </div>
        <div class="mb-3">
            <label for="kota" class="form-label">Kabupaten / Kota </label>
            <input type="text" class="form-control" id="kota">
        </div>
        <div class="mb-3">
            <label for="kd_pos" class="form-label">Kode Pos </label>
            <input type="text" class="form-control" id="kd_pos">
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telp / WA </label>
            <input type="text" class="form-control" id="no_telp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!--ini form-->
<?= $this->endSection() ?>