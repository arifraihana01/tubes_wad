<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Puskesmas Betung | Register</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="https://drive.google.com/uc?export=view&id=1su9inODwIyw9md6PO7rHkQBx2dFPMYd2" alt=""
                    width="40" height="40" class="d-inline-block align-text-middle">
                Puskesmas Betung
            </a>
            <div class="d-flex">
                <a class="nav-link" href="/login">Login</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="animate__animated animate__backInLeft col-5 pt-3">
                <h3 class="pt-5">Register</h3>
                <form class="pt-5" action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="role" name="role" value="USER" hidden>
                        <label for="NIK" class="form-label ">NIK</label>
                        <input type="text" class="form-control @error ('NIK') is-invalid @enderror" id="NIK" name="NIK"
                            required>
                        @error('NIK')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label ">Nama Lengkap</label>
                        <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name"
                            name="name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error ('tanggallahir') is-invalid @enderror"
                            id="tanggallahir" name="tanggallahir" required value="{{ old('tanggallahir') }}">
                        @error('tanggallahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="form-label">Nomor Ponsel</label>
                        <input type="text" class="form-control @error ('hp') is-invalid @enderror" id="hp" name="hp"
                            required value="{{ old('hp') }}">
                        @error('hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control @error ('alamat') is-invalid @enderror" id="alamat"
                            name="alamat" required value="{{ old('alamat') }}">
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email"
                            name="email" aria-describedby="emailHelp" required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error ('password') is-invalid @enderror"
                            id="password" name="password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <p>Sudah Punya Akun? <a class="link-primary" href="/login">Login</a></p>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="animate__animated animate__backInRight col-4 pt-10">
                <br>
                <br>
                <br>
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