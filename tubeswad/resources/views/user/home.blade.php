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
    <title>Puskesmas Betung | Home</title>
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
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
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

    <div class="container">
        <div class="row justify-content-center">
            <h4 class="animate__animated animate__fadeInDown text-center pt-5">Layanan Peduli Covid-19 Puskesmas Betung</h4>
            <div class="animate__animated animate__fadeInLeftBig col-4 pt-5">
                <img src="https://image.freepik.com/free-vector/vaccine-concept-illustration_114360-5361.jpg"
                    height="250px" alt="">
            </div>

            <div class="animate__animated animate__fadeInRightBig col-4 pt-5 border-bottom" style="text-align: justify">
                <p>Vaksin merupakan antigen (mikroorganisma) yang diinaktivasi atau dilemahkan yang bila diberikan
                    kepada orang yang sehat untuk menimbulkan antibodi spesifik terhadap mikroorganisma tersebut,
                    sehingga bila kemudian terpapar, akan kebal dan tidak terserang penyakit. Bahan dasar membuat vaksin
                    tentu memerlukan mikroorganisma, baik virus maupun bakteri. Menumbuhkan mikroorganisma memerlukan
                    media tumbuh yang disimpan pada suhu tertentuMikroorganisma yang tumbuh kemudian akan dipanen,
                    diinaktivasi, dimurnikan, diformulasi dan kemudian dikemas.</p>
            </div>
            {{-- {!! $chart->container() !!}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
            {!! $chart->script() !!} --}}
            <div class="container mt-5 mb-5 pb-2 pt-2 border-bottom" style="text-align: justify">
                <div style="text-align: center">
                    <h3>Mengapa Harus <span style="color: forestgreen">Vaksin</span> ?</h3>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-2 mt-4 mb-2">
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://image.freepik.com/free-vector/man-face-mask-stop-warning-corona-virus-covid-19_10045-675.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Mencegah Penularan</h5>
                          <p class="card-text">Vaksin COVID-19 sudah terbukti efektif untuk mencegah seseorang terinfeksi virus Corona.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://image.freepik.com/free-vector/cartoon-coronavirus-vaccine-illustration_23-2148849132.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Kekebalan Kelompok</h5>
                          <p class="card-text">Mempercepat kekebalan kelompok <a href="https://id.wikipedia.org/wiki/Kekebalan_kelompok">(herd immunity)</a>.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="https://image.freepik.com/free-vector/group-young-people-posing-photo_52683-18823.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Melindungi Sekitar</h5>
                          <p class="card-text">Dengan mengikuti vaksinasi Covid-19, kita tak hanya menyelamatkan diri sendiri, namun juga melindungi mereka yang rentan</p>
                        </div>
                      </div>
                    </div>
                  </div>
                <div style="text-align: center">
                    <p style="color: brown">Satu hal yang perlu diingat, vaksin bukanlah obat pandemi, melainkan upaya kita untuk membentengi diri dari efek virus penyebab Covid-19.</p>
                </div>
            </div>
            <div class="container mt-2 mb-5 pb-2 pt-2" style="text-align: justify">
                <h3 style="color: rgb(93, 116, 50);font-weight:bolder">Total Kasus <span style="color: red">COVID-19</span> di {{ $data[0] }}</h3>
                <h5>Total positif : {{ $data[1] }}</h5>
                <h5>Total sembuh : {{ $data[2] }}</h5>
                <h5>Total meninggal : {{ $data[3] }}</h5>
                <h5>Total yang sedang dirawat : {{ $data[4] }}</h5>
            </div>
        </div>
    </div>

    <div class="text-center">
        <p class="fixed-bottom">&copy;2021 Puskesmas Betung</p>
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
