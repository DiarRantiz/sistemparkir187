<!doctype html>
<html lang-"en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <title>Parkir187</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Pegawai</h1>

    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                <div class="card-body">
                    <form action="/updatedata/{{ $data->id }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                          value="{{ $data->Username }}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                          value="{{ $data->Password }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                            value="{{ $data->Nama }}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                          value="{{ $data->Alamat }}">
                      </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No_telp</label>
                            <input type="number" name="no_telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                            value="{{ $data->No_telp }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Bagian</label>
                            <select class="form-select" name="bagian" aria-label="Default select example">
                                <option selected>{{ $data->Bagian }}</option>
                                <option value="Petugas Ruang Masuk">Petugas Ruang Masuk</option>
                                <option value="Petugas Ruang Keluar">Petugas Ruang Keluar</option>
                              </select>
                          </div>

                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    -->
  </body>
</html>