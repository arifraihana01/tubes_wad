<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Puskesmas Betung | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/56a57c6a1e.js" crossorigin="anonymous"></script>
  </head>
  
  <body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Puskesmas Betung</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100" type="text" style="pointer-events: none;">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          
          <form action="/logout" method="post">
            @csrf
            <button class="nav-link px-3 bg-dark border-0" type="submit">Logout</button>
          </form>
        </div>
      </div>
    </header>
    

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Pendaftar Vaksinasi
              </a>
            </li>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h4">Pendaftar Program Vaksinasi Puskesmas Betung</h1>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @php
            $x1 = 0;
            $x2 = 0;
            $x3 = 0;
            $x4 = 0;
            $x5 = 0;
        @endphp
        <div class="table-responsive">
          <h2>Menunggu Konfirmasi</h2>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Vaksin</th>
                <th scope="col">Waktu Vaksin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              @if ($user->status == 'konfirmasi')
              <tr>
                <td>{{ ++$x1 }}</td>
                <td>{{ $user->NIK }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->tanggal}}</td>
                <td>{{ $user->time }}</td>
                <td>
                  <a class="badge bg-success border-0" type="button" href="/konfirmasi/{{ $user->id }}"><i class="far fa-check-square"></i></a>
                  <form class="col d-inline-block" action="/canceladmin" method="post">
                    @csrf
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $user->id }}" readonly>
                    <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Batalkan Pendaftaran Vaksin?')"><i class="fas fa-user-minus"></i></button>
                  </form>
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
          <h2><span style="color: rgb(146, 146, 37);">Jadwal Vaksin 1</span></h2>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Vaksin</th>
                <th scope="col">Waktu Vaksin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              @if ($user->status == 'terkonfirmasi')
              <tr>
                <td>{{ ++$x2 }}</td>
                <td>{{ $user->NIK }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->tanggal}}</td>
                <td>{{ $user->time }}</td>
                <td>
                  <a class="badge bg-success border-0" type="button" href="/terkonfirmasi/{{ $user->id }}"><i class="far fa-check-square"></i></a>
                  <form class="col d-inline-block" action="/canceladmin" method="post">
                    @csrf
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $user->id }}" readonly>
                    <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Batalkan Jadwal Vaksin 1 ?')"><i class="fas fa-user-minus"></i></button>
                  </form>
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
          <h2><span style="color:rgb(146, 146, 37);">Jadwal Vaksin 2</span></h2>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Vaksin</th>
                <th scope="col">Waktu Vaksin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              @if ($user->status == 'vaccinated1')
              <tr>
                <td>{{ ++$x3 }}</td>
                <td>{{ $user->NIK }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->tanggal}}</td>
                <td>{{ $user->time }}</td>
                <td>
                  <a class="badge bg-success border-0" type="button" href="/vaccinated1/{{ $user->id }}"><i class="far fa-check-square"></i></a>
                  <form class="col d-inline-block" action="/canceladmin1" method="post">
                    @csrf
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $user->id }}" readonly>
                    <button class="badge bg-danger border-0" type="submit" onclick="return confirm('Batalkan Jadwal Vaksin 2 ?')"><i class="fas fa-user-minus"></i></button>
                  </form>
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
          <h2><span style="color: green;">Sudah Vaksin</span></h2>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Vaksin</th>
                <th scope="col">Waktu Vaksin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              @if ($user->status == 'vaccinated2')
              <tr>
                <td>{{ ++$x4 }}</td>
                <td>{{ $user->NIK }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->tanggal}}</td>
                <td>{{ $user->time }}</td>
                <td>
                  <a class="badge bg-primary border-0" type="button" href="/vaccinated2/{{ $user->id }}"><i class="far fa-eye"></i></a>
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
          <h2><span style="color: red;">Cancel Vaksin</span></h2>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Vaksin</th>
                <th scope="col">Waktu Vaksin</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              @if ($user->status == 'cancel')
              <tr>
                <td>{{ ++$x5 }}</td>
                <td>{{ $user->NIK }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->tanggal}}</td>
                <td>{{ $user->time }}</td>
                <td>
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      
        {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> --}}
        
        <script src="/js/dashboard.js"></script>

        <div class="text-center">
          <p class="fixed-bottom">&copy;2021 Puskesmas Betung</p>
      </div>
      
    </body>
  </html>
