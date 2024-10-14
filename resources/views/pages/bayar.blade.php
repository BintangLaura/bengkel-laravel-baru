@extends('layouts.main')

@section('bayar')
<section class="d-flex flex-column align-items-center justify-content-center p-4" style="height: 80vh;">
    <h3 class="text-primary mb-3">Pembayaran Sukses</h3>
    <div class="rounded-circle bg-light d-flex justify-content-center align-items-center mb-4"
        style="width: 150px; height: 150px;">
        <i class="bi bi-check-circle-fill text-primary" style="font-size: 5rem;"></i>
    </div>
    <p class="text-muted mb-4">Terimakasih Telah Mempercayai Pintu Keluar!</p>
    <a href="/" class="btn btn-primary px-5">Continue</a>
</section>
@endsection
