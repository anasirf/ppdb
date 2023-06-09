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
  <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form action="<?= site_url('/auth/login') ?>" method="POST">
      <img class="mb-4" src="/assets/brand/sma-8-yogyakarta.png" alt="" width="272" height="auto">
      <h1 class="h3 mb-3 fw-normal">Login</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <a href="<?= base_url('login/register')?>" class="succes btn" type="submit">Register</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
  </main>



</body>

</html>