<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>V-Course | Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
     <!-- Navbar -->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">V-Course</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user-pageLogin') }}">Login</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->mahasiswa_nama}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('user-edit', auth()->id()) }}">Edit Profile</a></li>
              <li><a class="dropdown-item" href="#">Status</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('userLogout') }}">Logout</a></li>
            </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
{{-- END NAVBAR --}}

{{-- Jumbotron --}}
<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Halo !, {{ auth()->user()->mahasiswa_nama}}</h1>
    <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
  </div>
</div>
{{-- card --}}
<section style="background-color: #eee;">
  <div class="container mt-2">
    <br>
    <h1 class="display-6 fw-medium">Course List</h1>

  </div>
  <div class="container py-5">
    @foreach ($kursus as $item)
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
              
          
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img
                    src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-Gunadarma-Universitas-Gunadarma-Original-PNG-1140x1175.png"
                    width="30px"
                    height="200px"
                    class="w-100"
                  />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div
                        class="mask"
                        style="background-color: rgba(253, 253, 253, 0.15);"
                      ></div>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5>{{ $item->kursus_nama}}</h5>
                <div class="d-flex flex-row">
                  <div class="text-danger mb-1 me-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <span></span>
                </div>
                <div class="mt-1 mb-0 text-muted small">
                  <span>Duration Course</span>
                  <span class="text-primary"> - </span>
                  <span>{{$item ->kursus_durasi}}</span>
                  <span class="text-primary">  </span>
                  <span><br /></span>
                </div>
                <div class="mb-2 text-muted small">
                  <span>Sit</span>
                  <span class="text-primary"> • </span>
                  <span>amet</span>
                  <span class="text-primary"> • </span>
                  <span>Casual<br /></span>
                </div>
                <p class="text-truncate mb-4 mb-md-0">
                  {{ $item->kursus_keterangan}}
                </p>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1"></h4>
                  <span class="text-danger"><s></s></span>
                </div>
                <h6 class="text-success"></h6>
                <div class="d-flex flex-column mt-4">
                  <a class="btn btn-primary btn-sm" href="{{ route('main-show', $item->kursus_id) }}" > Info Details</a>
                  <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                    Choose This Course
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @endforeach
  </div>
</section>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>