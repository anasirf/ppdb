<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>PPDB SMAN 8 Yogyakarta</title>


    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('/assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url('signin.css') ?>" rel="stylesheet">
</head>

<body class="text-center">
    <?php $validation = \Config\Services::validation(); ?>
    <main class="form-signin">
            <p>Pendaftaran Berhasil</p><p></p>
            <p>Silahkan Login</p>
            <a href="<?= base_url('auth/login') ?>"><button class="w-100 btn btn-lg btn-primary" type="submit">login</button></a>
            
            <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
        </form>
    </main>



</body>

</html>