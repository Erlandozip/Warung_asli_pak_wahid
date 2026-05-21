<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Anda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="fixed-top" style="background-color: black;">
        <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link text-white" href="{{ url('/welcome') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ url('/menu') }}">Menu</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ url('/pesanananda') }}">Pesanan</a></li>
        </ul>
    </header>

    <main class="container" style="padding-top: 100px; max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h3>Detail Pesanan (Dari Database)</h3>
            </div>
            <div class="card-body">
                <!-- Jika data $order ditemukan di database -->
                @if(isset($order) && $order)
                    @if(session('success_id'))
                        <div class="alert alert-success text-center" role="alert">
                            ✓ Pesanan baru berhasil disimpan dengan Invoice ID: #{{ $order->id }}
                        </div>
                    @endif

                    <ul class="list-group list-group-flush fs-5">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Makanan:</strong></span>
                            <span class="badge bg-secondary text-wrap">{{ $order->makanan }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><strong>Minuman:</strong></span>
                            <span class="badge bg-secondary text-wrap">{{ $order->minuman }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span><small class="text-muted">Waktu Transaksi:</small></span>
                            <span><small class="text-muted">{{ $order->created_at->format('d M Y, H:i') }} WIB</small></span>
                        </li>
                    </ul>
                    
                    <div class="text-center mt-4">
                        <a href="{{ url('/menu') }}" class="btn btn-outline-primary btn-sm">Buat Pesanan Baru</a>
                    </div>
                @else
                    <!-- Jika tabel database masih kosong -->
                    <div class="text-center my-4">
                        <p class="text-muted">Belum ada riwayat pesanan di database.</p>
                        <a href="{{ url('/menu') }}" class="btn btn-primary btn-sm">Pilih Menu Terlebih Dahulu</a>
                    </div>
                @endif
            </div>
        </div>
    </main>
</body>
</html>