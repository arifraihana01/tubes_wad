<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/56a57c6a1e.js" crossorigin="anonymous"></script>
    <title>Akun</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://drive.google.com/uc?export=view&id=1su9inODwIyw9md6PO7rHkQBx2dFPMYd2" alt=""
                    width="30" height="24" class="d-inline-block align-text-top">Puskesmas Betung
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pendaftaran">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/status">Status</a>
                    </li>

                </ul>
                <div class="dropdown" style="padding-right: 30px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hi,
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

    <div class="row">
        <div class="col-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                <span class="fs-4"><i class="far fa-user-circle"></i> Nama Lengkap</span>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/akun" class="nav-link active" aria-current="page">
                            <i class="fas fa-user"></i> Akun Saya
                        </a>
                    </li>
                    <li>
                        <a href="/riwayat" class="nav-link link-dark">
                            <i class="fas fa-file-medical"></i> Riwayat Vaksin
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col-7">
            <h5 class="pt-5">Akun</h5>
            <hr>
            <h6>Nama Lengkap</h6>
            <p>jajan sutisna</p>
            <h6>Tanggal Lahir</h6>
            <p>12/01/2002</p>
            <h6>NIK</h6>
            <p>234262342341342</p>
            <h6>Nomor Ponsel</h6>
            <p>082452342</p>
            <h6>Email</h6>
            <p>jajan@gmail.com</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Update
            </button>
        </div>
    </div>



    <div class="text-center">
        <p class="fixed-bottom">&copy;2021 Puskesmas Betung</p>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perbarui akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/vaccine/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nama" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="nama" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="nama" name="name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>