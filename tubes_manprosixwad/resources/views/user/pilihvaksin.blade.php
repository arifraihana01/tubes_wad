<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/56a57c6a1e.js" crossorigin="anonymous"></script>
    <title>Puskesmas Betung | Pilih Vaksin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img src="https://drive.google.com/uc?export=view&id=1su9inODwIyw9md6PO7rHkQBx2dFPMYd2" alt="" width="40" height="40" class="d-inline-block align-text-middle">
                 Puskesmas Betung
              </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/pendaftaran">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/status">Status</a>
                    </li>

                </ul>
                <div class="dropdown" style="padding-right: 30px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/akun"><i class="fas fa-user"></i> Akun</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <h4 class="text-center pt-3">Daftar Vaksin</h4>
            <div class="col-5 pt-5">
                <form action="/vaccine/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="NIK" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="NIK" name="NIK" value="{{ auth()->user()->NIK }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal dan Waktu</label>
                        <input type="datetime-local" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <label for="ktp" class="form-label">Foto KTP</label>
                    <div class="mb-3">
                        <input type="file" id="ktp" name="ktp">
                    </div>
                    <label for="kk" class="form-label">Foto Kartu keluarga</label>
                    <div class="mb-3">
                        <input type="file" id="kk" name="kk">
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
            <div class="col-4 pt-5">
                <img src="https://image.freepik.com/free-vector/doctor-health-worker-help-inject-covid-corona-vaccine-syringe-patient_10045-645.jpg"
                    alt="">
            </div>
        </div>
        <footer>
            <div class="text-center">
                <p>&copy;2021 Puskesmas Betung</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>