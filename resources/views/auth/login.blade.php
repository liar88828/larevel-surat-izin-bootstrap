<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="row justify-content-center mt-5">




        <div class="col-lg-4">



            <div class="d-flex justify-content-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhcuMdNdqvLtJHGan35ZrEk8QUh4B7DZ_THg&usqp=CAU"
                    alt="tvku" style="width:30%;height: auto;">
            </div>



            <div class="card">


                <div class="card-header">
                    <h1 class="card-tittle">Login</h1>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="card-body"></div>
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                        <div class="card-body"></div>
                        <div class="alert alert-warning " role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label class="font-weight-bold mb-3">Email</label>
                            <input type="email" class="form-control @error('nama') is-invalid @enderror"
                                name="email" placeholder="Masukkan Email" />

                            <!-- error message untuk nama -->
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>




                        <div class="form-group mb-3">
                            <label class="font-weight-bold mb-3">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Masukkan Password" />

                            <!-- error message untuk nama -->
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex  flex-row-reverse ">
                            <div class="d-flex flex-row">
                                <div class="d-flex flex-col " >
                                    <div class="f-flex flex-row">

                                        <a href="{{ route('lupa') }}" >
                                                <p style="font-size: .7rem"> Lupa Password </p>
                                        </a>


                                        <a href="{{ route('register') }}" method="GET">
                                                <p style="font-size: .7rem">Buat Akun</p>
                                        </a>
                                    </div>

                                    <button class="btn btn-primary ">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
