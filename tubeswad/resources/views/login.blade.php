<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://drive.google.com/uc?export=view&id=1su9inODwIyw9md6PO7rHkQBx2dFPMYd2" alt=""
                    width="30" height="24" class="d-inline-block align-text-top">
                Puskesmas Betung
            </a>
            <div class="d-flex">
                <a class="nav-link" href="/register">Register</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 pt-3">
                <h3 class="pt-5">Login</h3>
                <form class="pt-5">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang
                            lain.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <p>Belum Punya Akun? <a class="link-primary" href="/register">Register</a></p>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-4 pt-6">
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
            <p class="fixed-bottom">&copy;2021 Copyright</p>
        </div>
</body>

</html>