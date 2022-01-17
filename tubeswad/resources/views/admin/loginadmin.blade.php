<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Puskesmas Betung | Login Admin</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="https://drive.google.com/uc?export=view&id=1su9inODwIyw9md6PO7rHkQBx2dFPMYd2" alt=""
                    width="40" height="40" class="d-inline-block align-text-middle">
                Puskesmas Betung
            </a>
    </nav>

    <div class="container">
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="animate__animated animate__backInLeft col-5 pt-3">
                <h3 class="pt-5">Login Admin</h3>
                <form class="pt-5" action="/loginadmin" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email"
                            aria-describedby="emailHelp" name="email" autofocus required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang
                            lain.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

            <div class="animate__animated animate__backInRight col-4 pt-6">
                <br>
                <br>
                <br>
                <br>
                <br>
                <img src="https://image.freepik.com/free-vector/doctors-concept-illustration_114360-1515.jpg"
                    height="250px" alt="">
            </div>
        </div>

        <div class="text-center">
            <p class="fixed-bottom">&copy;2021 Puskesmas Betung</p>
        </div>

</body>

</html>
