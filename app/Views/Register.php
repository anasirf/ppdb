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

    <main class="form-signin">
        <form action="<?= site_url('/auth/register') ?>" method="POST">
            <img class="mb-4" src="/assets/brand/sma-8-yogyakarta.png" alt="" width="272" height="auto">
            <h1 class="h3 mb-3 fw-normal">Daftar</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="no_ppdb" name="no_ppdb" placeholder="No PPDB">
                <label for="floatingPassword">No PPDB</label>
            </div>
            <hr>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re-password">
                <label for="floatingPassword">Re-password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <!--<a href="<?= base_url('login/register') ?>" class="succes btn" type="submit">Register</a>-->
            <p class="mt-5 mb-3 text-muted">Silahkan cek email setelah selesai klik register</p>
            <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
        </form>
    </main>



</body>

</html>