<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/56a57c6a1e.js" crossorigin="anonymous"></script>
    <title>Status Vaksin</title>
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
                        <a class="nav-link active" href="/status">Status</a>
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

    <div class="container">
        <div class="row justify-content-center">
            <h4 class="text-center pt-3">Status Vaksin</h4>
            <div class="row pt-5">
                <p>Masukan data dibawah ini</p>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="NIK" aria-label="Last name">
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Check Status</button>
                </div>

            </div>
            <br>
            <br>

            <img src="https://image.freepik.com/free-vector/family-home-activities-concept-happy-boy-girl-with-parents-playing-board-games-with-cards-dices-living-room-entertainment-togetherness-having-together-topics_74855-10048.jpg"
                alt="" style="width: 500px;">
            <div class="pb-5">
                <p class="text-center">Dalam menanggulangi pandemi Covid-19, upaya vaksinasi dilakukan tidak hanya
                    menjadi satu-satunya
                    upaya untuk melindungi masyarakat dari penularan Covid-19. Selama belum mencapai kekebalan kelompok
                    (herd immunity), maka pencegahan yang efektif saat ini adalah mematuhi protokol kesehatan 5M yaitu
                    dengan double mask dengan masker medis dilapisi bagian luarnya dengan masker kain agar menutupi
                    rongga dari masker medis tersebut, menjaga jarak, mencuci tangan menggunakan sabun dan air mengalir,
                    menjauhi kerumunan, dan membatasi mobilitas.</p>
            </div>
        </div>
    </div>

    <div class="text-center">
        <p class="fixed-bottom">&copy;2021 Copyright</p>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Status Vaksinasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" value="KELOMPOK 1 MANPROSI"
                            aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NIK</label>
                        <input class="form-control" type="text" value="12345678910" aria-label="Disabled input example"
                            disabled readonly>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <p><i class="fas fa-syringe"></i> Vaksin Pertama</p>
                            </div>
                            <div class="col">

                            </div>
                            <div class="col">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p><i class="fas fa-syringe"></i> Vaksin kedua</p>
                            </div>
                            <div class="col">

                            </div>
                            <div class="col">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color:green; height: 3rem;">
                    <div class="card-body">
                        <p class="text-center" style="color: white;">Sudah Divaksinasi</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-center">Jika hasil tes COVID-19 Anda tidak muncul, pastikan lab yang Anda kunjungi sudah terdaftar di sini dan hubungi lab tersebut kembali.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>