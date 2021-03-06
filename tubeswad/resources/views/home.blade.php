<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/56a57c6a1e.js" crossorigin="anonymous"></script>
    <title>Home</title>
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
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pendaftaran">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/status">Status</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample">Notifikasi<span class="badge bg-secondary">2</span></a>
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
            <h4 class="text-center pt-5">Layanan Peduli Covid-19 Puskesmas Betung</h4>
            <div class="col-4 pt-5">
                <img src="https://image.freepik.com/free-vector/vaccine-concept-illustration_114360-5361.jpg"
                    height="250px" alt="">
            </div>
            <div class="col-4 pt-5">
                <p>Vaksin merupakan antigen (mikroorganisma) yang diinaktivasi atau dilemahkan yang bila diberikan
                    kepada orang yang sehat untuk menimbulkan antibodi spesifik terhadap mikroorganisma tersebut,
                    sehingga bila kemudian terpapar, akan kebal dan tidak terserang penyakit. Bahan dasar membuat vaksin
                    tentu memerlukan mikroorganisma, baik virus maupun bakteri. Menumbuhkan mikroorganisma memerlukan
                    media tumbuh yang disimpan pada suhu tertentuMikroorganisma yang tumbuh kemudian akan dipanen,
                    diinaktivasi, dimurnikan, diformulasi dan kemudian dikemas.</p>
            </div>
        </div>
    </div>

    <div class="text-center">
        <p class="fixed-bottom">&copy;2021 Copyright</p>
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><i class="fa fa-bell"></i> Notifikasi</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="col">
                    <p>Pendaftaran vaksin anda berhasil</p>
                    <hr>
                </div>
                <div class="col">
                    <p>Sertifikat sudah bisa diunduh</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>