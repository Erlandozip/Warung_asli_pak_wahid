<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
            <h1>Silahkan Pilih Menu</h1>
        </div>
        <section class="d-flex flex-wrap justify-content-center gap-4 my-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/bubur.jpg') }}" class="card-img-top" alt="Bubur Ayam">
                <div class="card-body">
                    <p class="card-text">Bubur Ayam jos jis</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/soto.jpg')}}" class="card-img-top" alt="Soto Ayam">
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
        <div class="container my-4" sytle="max-width:450px;">
            <div class="input-group">
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Pilihan</option>
                    <option value="1">Soto</option>
                    <option value="2">Bubur Ayam</option>
                    <option value="3">Kupat Tahu</option>
                    <option value="3">Lotek</option>
                </select>
            </div>
            <section class="d-flex flex-wrap justify-content-center gap-4 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/esteh.jpg') }}" class="card-img-top" alt="Es Teh">
                    <div class="card-body">
                        <p class="card-text">Esteh Seger</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset ('img/es jeruk.jpg') }}" class="card-img-top" alt="es jeruk">
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
                    <img src="{{ asset ('img/jeruk.jpg') }}" class="card-img-top" alt="Lotek">
                    <div class="card-body">
                        <p class="card-text">Jeruk Anget</p>
                    </div>
                </div>
            </section>
            <div class="container my-4" sytle="max-width:450px;">
                <div class="input-group">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>Pilihan</option>
                        <option value="1">Es Teh </option>
                        <option value="2">Es jeruk</option>
                        <option value="3">Teh Anget</option>
                        <option value="3">Jeruk Anget</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center my-4">
                <a href="{{ url('/pesanananda') }}" type="button" class="btn btn-primary"
                    style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Pesan</a>
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>