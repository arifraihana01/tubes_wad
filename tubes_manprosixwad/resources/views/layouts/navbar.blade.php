<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Puskemas Betung | Welcome</title>

</head>

<body>

    <nav class="animate__animated animate__fadeIn navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://drive.google.com/uc?export=view&id=1su9inODwIyw9md6PO7rHkQBx2dFPMYd2" alt=""
                    width="40" height="40" class="d-inline-block align-text-middle">
                Puskesmas Betung
            </a>

            <div class="btn-group">
                <form action="/register" method="get">
                    @csrf
                    <button type="submit" class="btn btn-0 dropdown" style="color: blue">Register</button>
                </form>

                <button type="button" class="btn btn-0 dropdown" data-bs-toggle="dropdown" aria-expanded="false"
                    style="color: blue">
                    Login
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/loginadmin">Admin</a></li>
                    <li><a class="dropdown-item" href="/login">User</a></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>

    @yield('isi')
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{-- footer --}}
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