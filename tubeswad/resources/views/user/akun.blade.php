<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/56a57c6a1e.js" crossorigin="anonymous"></script>
    <title>Puskesmas Betung | Akun</title>
</head>

<body>
    <nav class="animate__animated animate__fadeIn navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img src="https://drive.google.com/uc?export=view&id=1su9inODwIyw9md6PO7rHkQBx2dFPMYd2" alt=""
                    width="40" height="40" class="d-inline-block align-text-middle">
                Puskesmas Betung
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
                        Hi, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/akun"><i class="fas fa-user"></i> Akun</a></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                                    Keluar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <div class="row">
        <div class="animate__animated animate__fadeInLeft col-3">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                <span class="fs-4"><i class="far fa-user-circle"></i> {{ auth()->user()->name }}</span>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/akun" class="nav-link active" aria-current="page">
                            <i class="fas fa-user"></i> Akun Saya
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="animate__animated animate__fadeInUp col-7">
            <h5 class="pt-5">Akun</h5>
            <hr>
            <h6>Nama Lengkap</h6>
            <p>{{ auth()->user()->name }}</p>
            <h6>NIK</h6>
            <p>{{ auth()->user()->NIK }}</p>
            <h6>Tanggal Lahir</h6>
            <p>{{ auth()->user()->tanggallahir }}</p>
            <h6>Nomor Ponsel</h6>
            <p>{{ auth()->user()->hp }}</p>
            <h6>Alamat</h6>
            <p>{{ auth()->user()->alamat }}</p>
            <h6>Email</h6>
            <p>{{ auth()->user()->email }}</p>
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
                <form class="pt-5" action="/updateakun" method="post">
                    @csrf
                    <div class="modal-body">

                        <input type="hidden" class="form-control" id="id" name="id" value="{{ auth()->user()->id }}"
                            readonly>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="role" name="role" value="USER" hidden>
                            <label for="NIK" class="form-label ">NIK</label>
                            <input type="text" class="form-control @error ('NIK') is-invalid @enderror" id="NIK"
                                name="NIK" required readonly value="{{ auth()->user()->NIK }}">
                            @error('NIK')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label ">Nama Lengkap</label>
                            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name"
                                name="name" required readonly value="{{ auth()->user()->name }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error ('tanggallahir') is-invalid @enderror"
                                id="tanggallahir" name="tanggallahir" required readonly
                                value="{{ auth()->user()->tanggallahir }}">
                            @error('tanggallahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="hp" class="form-label">Nomor Ponsel</label>
                            <input type="text" class="form-control @error ('hp') is-invalid @enderror" id="hp" name="hp"
                                required value="{{ auth()->user()->hp }}">
                            @error('hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error ('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" required value="{{ auth()->user()->alamat }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email"
                                name="email" aria-describedby="emailHelp" required value="{{ auth()->user()->email }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
