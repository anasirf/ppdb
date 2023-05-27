<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Pendukung</h1>
</div>
<!--ini form-->
<div class="container">
    <form>
        <div class="mb-3">
            <label for="formFile" class="form-label">Scan KK</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Scan Akte</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileDisabled" class="form-label">Disabled file input example</label>
            <input class="form-control" type="file" id="formFileDisabled" disabled>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Small file input example</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file">
        </div>
        <div>
            <label for="formFileLg" class="form-label">Large file input example</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
        </div>
    </form>
</div>
<!--ini form-->
<?= $this->endSection() ?>