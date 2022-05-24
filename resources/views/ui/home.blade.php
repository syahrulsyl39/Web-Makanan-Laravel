<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Hello, world!</title>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/2.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Pizza</a>
                    <a class="nav-item nav-link" href="#">Burger</a>
                    <a class="nav-item nav-link" href="#">Pasta</a>

                </div>
            </div>
            <span class="navbar-text">
                <a href=""><i class="bi bi-box-arrow-in-right mr-2"></i>Login</a>
            </span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col">
                <h1 class="font-weight-bold">All Menu</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach ($menu as $item)
                <div class="col-md4 mx-2 my-2">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold">{{ $item->nama_makanan }}</h3>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                            <h5 class="card-text">{{ $item->harga }}</h5>
                            <a href="#" class="btn btn-danger">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
