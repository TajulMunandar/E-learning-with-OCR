<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">    
    <link href="css/signin.css" rel="stylesheet">
    <title>{{$title}}</title>
</head>
<body>
       
<main class="form-signin w-100 m-auto border" >
  
  <form action="/register" method="POST">

    @csrf
    <img class="mb-4 login-logo" src="img/login.png" alt="" >
    <h1 class="h3 mb-3 fw-normal">Daftar Akunmu!</h1>
    <div class="form-floating">
      <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="2020573010031" name="nim" required value="{{ old ('nim') }}">
      <label for="nim">Nomor Induk Mahasiswa </label>
      @error('nim')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" name="nama" required value="{{ old ('nama') }}">
      <label for="nama">Nama</label>
      @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" class="form-control @error('asalkampus') is-invalid @enderror" id="asalkampus" placeholder="asalkampus" name="asalkampus" required value="{{ old ('asalkampus') }}">
      <label for="asalkampus">Asal Kampus</label>
      @error('asalkampus')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" required >
      <label for="password">Kata Sandi</label>
      @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <p>sudah punya akun? <a href="/">Masuk!</a> </p>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
    <p class="mt-5 mb-3 text-center">&copy;  2022</p>
  </form>
</main>


</body>
</html>