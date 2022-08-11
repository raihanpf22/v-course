<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info Details Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="card mb-3 m-auto mt-5" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img
              src="https://rekreartive.com/wp-content/uploads/2018/10/Logo-Gunadarma-Universitas-Gunadarma-Original-PNG-1140x1175.png"
              alt="Trendy Pants and Shoes"
              class="img-fluid rounded-start"
            />
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$kursus->kursus_nama}}</h5>
              <p class="card-text">
                {{$kursus->kursus_keterangan}}
              </p>
              <p class="card-text">
                <small class="text-muted">Duration {{$kursus->kursus_durasi}}</small>
              </p>
              <br>
              <a href="{{ route('main') }}" class="btn btn-primary" style="float: right">Back</a>
            </div>
          </div>
        </div>
      </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>