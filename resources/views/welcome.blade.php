<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung makan asli pak wahid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
            <h1>SELAMAT DATANG</h1>
        </div>
        <div class="d-flex justify-content-center">
            <h2>Di Warung Makan Asli Pak Wahid</h2>
        </div>
        <section class="d-flex flex-wrap justify-content-center gap-4 my-4" id="Menu">
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
                <img src="{{ asset('img/kupattahu.jpg')}}" class="card-img-top" alt="Kupat tahu">
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
        <section class="d-flex flex-wrap justify-content-center gap-4 my-4" id="Menu">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/esteh.jpg') }}" class="card-img-top" alt="Bubur Ayam">
                <div class="card-body">
                    <p class="card-text">Esteh seger</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/es jeruk.jpg') }}" class="card-img-top" alt="Soto Ayam">
                <div class="card-body">
                    <p class="card-text">Es jeruk jos jis</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/tanget.jpg') }}" class="card-img-top" alt="Kupat tahu">
                <div class="card-body">
                    <p class="card-text">Teh anget nikmat</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/jeruk.jpg') }}" class="card-img-top" alt="Lotek">
                <div class="card-body">
                    <p class="card-text">Wedang jeruk</p>
                </div>
            </div>
        </section>
        <div class="d-flex justify-content-center my-4">
            <a href="{{ url('/menu') }}" type="button" class="btn btn-primary"
                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Pesan</a>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>