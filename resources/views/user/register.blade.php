<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Virtual Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar -->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid" >
      <a class="navbar-brand" href="#">V-Course</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li> 
        </ul>
        
      </div> --}}
    </div>
  </nav>
  {{-- END NAVBAR --}}

  {{-- Form Registrasi --}}
  <div class="row ">
    <div class="col-7 m-auto">
        <div class="p-5 mb-4 bg-light rounded-3 ">
            <div class="container-fluid py-5 ">
                <h3>Register Student</h3>
                <br>
                <br>
                <form action="{{ route('user-register') }}" method = "POST">
                    @csrf
                    <div class="mb-3 col-7">
                      <label for="mahasiswa_nama" class="form-label" >Student Name</label>
                      <input type="text" class="form-control" id="mahasiswa_nama" name="mahasiswa_nama" required autofocus>
                    </div>
                    <div class="mb-3 col-7">
                        <label for="mahasiswa_npm" class="form-label" >NPM Student</label>
                        <input type="text" class="form-control" id="mahasiswa_npm" name="mahasiswa_npm" required>
                    </div>
                    <div class="mb-3 col-7">
                        <label for="mahasiswa_kelas" class="form-label" >Class Student</label>
                        <input type="text" class="form-control" id="mahasiswa_kelas" name="mahasiswa_kelas" required>
                    </div>
                    <div class="mb-3 col-7">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelpBlock">
                      <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                  </form>
            </div>
          </div>
    </div>
    <div class="col-3 m-auto">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
        class="img-fluid" alt="Sample image">
    </div>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>