<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="fixed-top" style="background-color: black;">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/welcome') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/menu') }}">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/pesanananda') }}">Pesanan</a>
            </li>
        </ul>
    </header>

    <main style="padding-top: 70px;">
        <div class="d-flex justify-content-center">
            <h1>Silahkan Pilih Menu</h1>
        </div>

        <form action="{{ url('/prosespesanan') }}" method="POST">
            @csrf
            <section class="d-flex flex-wrap justify-content-center gap-4 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/bubur.jpg') }}" class="card-img-top" alt="Bubur Ayam">
                    <div class="card-body">
                        <p class="card-text">Bubur Ayam jos jis</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/soto.jpg') }}" class="card-img-top" alt="Soto Ayam">
                    <div class="card-body">
                        <p class="card-text">Soto Ayam Seger</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/kupattahu.jpg') }}" class="card-img-top" alt="Kupat tahu">
                    <div class="card-body">
                        <p class="card-text">Kupat Tahu makyusss</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/lotek.jpg') }}" class="card-img-top" alt="Lotek">
                    <div class="card-body">
                        <p class="card-text">Lotek enak makyuss</p>
                    </div>
                </div>
            </section>

            <div class="container my-4" style="max-width:450px;">
                <div class="input-group mb-4">
                    <select class="form-select" id="selectMakanan" name="makanan" required>
                        <option value="" selected disabled>Pilih Makanan...</option>
                        <option value="Soto">Soto</option>
                        <option value="Bubur Ayam">Bubur Ayam</option>
                        <option value="Kupat Tahu">Kupat Tahu</option>
                        <option value="Lotek">Lotek</option>
                    </select>
                </div>
            </div>
            <section class="d-flex flex-wrap justify-content-center gap-4 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/esteh.jpg') }}" class="card-img-top" alt="Es Teh">
                    <div class="card-body">
                        <p class="card-text">Esteh Seger</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/es jeruk.jpg') }}" class="card-img-top" alt="es jeruk">
                    <div class="card-body">
                        <p class="card-text">Es Jeruk josjis</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/tanget.jpg') }}" class="card-img-top" alt="Teh anget">
                    <div class="card-body">
                        <p class="card-text">Teh Anget</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/jeruk.jpg') }}" class="card-img-top" alt="Jeruk Anget">
                    <div class="card-body">
                        <p class="card-text">Jeruk Anget</p>
                    </div>
                </div>
            </section>

            <div class="container my-4" style="max-width:450px;">
                <div class="input-group mb-4">
                    <select class="form-select" id="selectMinuman" name="minuman" required>
                        <option value="" selected disabled>Pilih Minuman...</option>
                        <option value="Es Teh">Es Teh</option>
                        <option value="Es Jeruk">Es Jeruk</option>
                        <option value="Teh Anget">Teh Anget</option>
                        <option value="Jeruk Anget">Jeruk Anget</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center my-4">
                <button type="submit" class="btn btn-primary px-4 py-2">Pesan Sekarang</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
