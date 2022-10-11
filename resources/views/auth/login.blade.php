<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">    
    <link href="css/signin.css" rel="stylesheet">
    <title>{{ $title }}</title>
</head>
<body>
       
<main class="form-signin w-100 m-auto border">
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(session()->has('LoginErorr'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('LoginErorr') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <form action="/login" method="POST">
    @csrf
    <img class="mb-4 login-logo" src="img/login.png" alt="" >
    <h1 class="h3 mb-3 fw-normal">Login!</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="nim" name="nim" placeholder="20205730100***" autofocus required>
      <label for="nim">Nim</label>
    
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      <label for="password">Kata Sandi</label>
  
    </div>

    <div class="checkbox mb-3">
      <label>
        <p>belum punya akun? <a href="/register">Daftar!</a> </p>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
    <p class="mt-5 mb-3 text-center">&copy; 2022</p>
  </form>
</main>


</body>
</html>