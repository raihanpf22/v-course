<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Course | V-Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Edit Data Course</h2>

              <form action="{{ url('edit/'.$kursus->kursus_id)  }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-outline mb-4">
                  <input type="text" id="kursus_nama" name="kursus_nama" class="form-control form-control-lg" value="{{ $kursus->kursus_nama }}" />
                  <label class="form-label" for="kursus_nama">Course Name</label>
                </div>

                <div class="form-outline mb-4">
                  <textarea type="text" id="kursus_keterangan" name ="kursus_keterangan" class="form-control form-control-lg" >{{ $kursus->kursus_keterangan }}</textarea>
                  <label class="form-label" for="kursus_keterangan">Description</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="kursus_durasi" name="kursus_durasi" class="form-control form-control-lg" value="{{ $kursus->kursus_durasi }}" />
                  <label class="form-label" for="kursus_durasi">Duration</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success">Add Course</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>