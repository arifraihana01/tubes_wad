<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/56a57c6a1e.js" crossorigin="anonymous"></script>
    <title>Puskesmas Betung | Daftar Vaksin</title>
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
                        <li><form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Keluar</button>
                        </form></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <h4 class="text-center pt-3">Pendaftaran Vaksin Kamu Berhasil!</h4>
            <div class="col-5 pt-5">

                <div class="container" style="width:750px; margin-left:-100px; ">
                    @foreach ($pendaftarans as $pendaftaran)
                    <h6 style="padding-bottom:5px;">NIK</h6>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $pendaftaran->NIK }}" readonly>
                    <h6 style="padding-bottom:5px;padding-top:5px;">Nama Lengkap</h6>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $pendaftaran->name }}" readonly>
                    <h6 style="padding-bottom:5px;padding-top:5px;">Alamat</h6>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $pendaftaran->alamat }}" readonly>
                    <h6 style="padding-bottom:5px;padding-top:5px;">Tanggal Vaksin</h6>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $pendaftaran->tanggal }}" readonly>
                    <h6 style="padding-bottom:5px;padding-top:5px;">Waktu Vaksin</h6>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $pendaftaran->time }}" readonly style="margin-bottom:25px;">
                    @endforeach
                </div>
                
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