<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Ibu</h1>
</div>
<!--ini form-->
<div class="container">
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Ibu">
            <div id="nameHelp" class="form-text">Nama Ibu tanpa menggunakan gelar</div>
            <!-- baiknya dibuat gelar depan belakang lalu di join atau dipisah seperti ini?  -->
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Dr. Nama Ibu, MM">
            <div id="nameHelp" class="form-text">Nama Ibu dengan menggunakan gelar</div>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK/No. KITAS (Untuk WNA)</label>
            <input type="text" class="form-control" id="nik" name="nik" aria-describedby="nikHelp" placeholder="33xxxxx">
            <div id="nikHelp" class="form-text">Nomor Induk Kependudukan yang tercantum pada KK / KTP bagi WNA diisi menggunakan nomor Kartu Izin Tinggal Terbatas (KITAS).</div>
        </div>
        <div class="mb-3">
            <label for="nokk" class="form-label">No. KK</label>
            <input type="text" class="form-control" id="nokk" name="nokk" placeholder="09827841231">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Pajangan">
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
            <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="SD / SMP / SMA / S1">
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Karyawan Swasta">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Manager">
        </div>
        <div class="mb-3">
            <label for="instansi" class="form-label">Instansi</label>
            <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Nama Instansi">
        </div>
        <div class="mb-3">
            <label for="gaji" class="form-label">Penghasilan</label>
            <input type="text" class="form-control" id="gaji" name="gaji" placeholder="Rp. 5.0000.0000">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Tempat Tinggal</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Nangka No. 08">
            <div id="alamatHelp" class="form-text">Alamat tinggal Ibu peserta didik diisi secara lengkap.</div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="rt" class="form-label">RT </label>
                <input type="text" class="form-control" id="rt" name="rt" placeholder="07">
            </div>
            <div class="col-3">
                <label for="rw" class="form-label">RW </label>
                <input type="text" class="form-control" id="rw" name="rw" placeholder="17">
            </div>
        </div>
        <div class="mb-3">
            <label for="dusun" class="form-label">Dusun </label>
            <input type="text" class="form-control" id="dusun" name="dusun" placeholder="Nama Dusun">
        </div>
        <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan </label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Nama Kelurahan">
        </div>
        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan </label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Nama Kecamatan">
        </div>
        <div class="mb-3">
            <label for="kota" class="form-label">Kabupaten / Kota </label>
            <input type="text" class="form-control" id="kota" name="kota" placeholder="Nama Kota">
        </div>
        <div class="mb-3">
            <label for="kd_pos" class="form-label">Kode Pos </label>
            <input type="text" class="form-control" id="kd_pos" name="kd_pos" placeholder="0872345">
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telp / WA </label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="081xxx">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!--ini form-->
            <?= $this->endSection() ?>