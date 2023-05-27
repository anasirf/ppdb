<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Biodata</h1>
</div>
<div class="container">
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name">
            <div id="nameHelp" class="form-text">Nama Peserta Didik sesuai dokumen resmi yang berlaku akte atau ijazah</div>
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="laki-laki" value="jk_laki">
                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="perempuan" value="jk_perempuan">
                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="nisn">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK/No. KITAS (Untuk WNA)</label>
            <input type="text" class="form-control" id="nik" aria-describedby="nikHelp">
            <div id="nikHelp" class="form-text">Nomor Induk Kependudukan yang tercantum pada KK / KTP /KIA bagi WNA diisi menggunakan nomor Kartu Izin Tinggal Terbatas (KITAS).</div>
        </div>
        <div class="mb-3">
            <label for="nokk" class="form-label">No. KK</label>
            <input type="text" class="form-control" id="nokk">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir">
            <div id="tempat_lahirHelp" class="form-text">Tempat Lahir Peserta Didik sesuai dokumen resmi yang berlaku akte atau ijazah</div>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tangal_lahir" class="form-control" name="tanggal_lahir">
        </div>
        <div class="mb-3">
            <label for="no_akta" class="form-label">No Registerasi Akta</label>
            <input type="text" class="form-control" id="no_akta">
            <div id="no_aktaHelp" class="form-text">Nomor Registerasi Akta kelahiran. Nomor yang dimaksud umumnya terletak pada bagian tengah atas lembar kutipan akta kelahiran</div>
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
            <label for="kebutuhan_khusus" class="form-label">Berkebutuhan Khusus</label>
            <input type="text" class="form-control" id="kebutuhan_khusus">
            <div id="kebutuhan_khususHelp" class="form-text">Jika tidak memiliki kebutuhan khusus bisa diisi tidak atau -</div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Tempat Tinggal</label>
            <input type="text" class="form-control" id="alamat">
            <div id="alamatHelp" class="form-text">Alamat tinggal peserta didik diisi secara lengkap.</div>
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
            <label for="kd_pos" class="form-label">Kode Pos </label>
            <input type="text" class="form-control" id="kd_pos">
        </div>
        <div class="mb-3">
            <label for="t_tinggal" class="form-label">Tempat Tinggal</label>
            <select class="form-select" aria-label="Default select example">
                <option></option>
                <option value="1">Bersama Orang Tua</option>
                <option value="2">Bersama Wali</option>
                <option value="3">Kos</option>
                <option value="4">Asrama</option>
                <option value="5">Panti Asuhan</option>
                <option value="6">Apartemen</option>
                <option value="7">Lainnya</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="m_transportasi" class="form-label">Moda Transportasi </label>
            <input type="text" class="form-control" id="m_transportasi">
            <div id="m_transportasiHelp" class="form-text">Jenis transportasi utama atau yang paling sering digunakan peserta didik untuk berangkat ke sekolah contoh sepeda motor.</div>
        </div>
        <div class="mb-3">
            <label for="anak_ke" class="form-label">Anak keberapa</label>
            <input type="text" class="form-control" id="anak_ke">
            <div id="anak_keHelp" class="form-text">Anak keberapa mengacu pada dokumen di KK.</div>
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Apakah punya KIP</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ada_kip" value="ada_kip">
                <label class="form-check-label" for="inlineRadio1">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="tidak_ada_kip" value="tidak_ada_kip">
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="tb" class="form-label">Tinggi Badan</label>
            <input type="text" class="form-control" id="tb">
            <div id="tbHelp" class="form-text">Tinggi Badan Peserta didik</div>
        </div>
        <div class="mb-3">
            <label for="bb" class="form-label">Berat Badan</label>
            <input type="text" class="form-control" id="bb">
            <div id="bbHelp" class="form-text">Berat Badan Peserta didik</div>
        </div>
        <div class="mb-3">
            <label for="lk" class="form-label">Lingkar Kepala</label>
            <input type="text" class="form-control" id="lk">
            <div id="lkHelp" class="form-text">Lingkar Kepala Peserta didik</div>
        </div>
        <div class="mb-3">
            <label for="jarak" class="form-label">Jarak Rumah</label>
            <input type="text" class="form-control" id="jarak">
            <div id="jarakHelp" class="form-text">Jarak Tempat Tinggal Peserta didik ke sekolah</div>
        </div>
        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi atau Kegemaran</label>
            <input type="text" class="form-control" id="hobi">
            <div id="hobiHelp" class="form-text">Hobi/Kegemaran Peserta didik</div>
        </div>
        <div class="mb-3">
            <label for="bahasa" class="form-label">Bahasa</label>
            <input type="text" class="form-control" id="bahasa">
            <div id="bahasaHelp" class="form-text">Bahasa yang digunakan sehari hari oleh peserta didik</div>
        </div>
        
        <br>

        <!--ini form-->
        
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<!--ini form-->
<?= $this->endSection() ?>