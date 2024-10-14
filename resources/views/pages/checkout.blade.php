@extends('layouts.main')

@section('checkout')
    <!-- Shipping Address Section -->
    <section class="p-4">
        <div class="card">
            <div class="card-body d-flex align-items-center">
                <div>
                    <i class="fa fa-map-pin fs-1"></i>
                </div>
                <div class="ms-3">
                    <h5 class="card-title">Alamat Penerima</h5>
                    <p class="card-text">Lorem ipsum lorem ipsum lorem ipsum</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Details Section -->
    <section class="p-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Produk Dipesan</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Subtotal Produk</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="img/oil.png" alt="Oli Motor" class="img-fluid" style="width: 50px;">
                            <span class="ms-3">Oli Motor Motul 300h</span>
                        </div>
                    </td>
                    <td>Rp. 220.000</td>
                    <td>1</td>
                    <td>Rp. 220.000</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Delivery & Payment Options -->
    <section class="p-4">
        <div class="row">
            <!-- Delivery Option -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h6>Opsi Pengiriman: <span class="text-muted">Reguler | Rp.20.000</span></h6>
                    <p class="text-muted">Akan tiba dalam 1-2 hari</p>
                </div>
            </div>
            <!-- Payment Method -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h6>Metode Pembayaran</h6>
                    <div>
                        <input type="radio" name="paymentMethod" id="bankTransfer" checked>
                        <label for="bankTransfer">Transfer Bank</label>
                    </div>
                    <div>
                        <input type="radio" name="paymentMethod" id="eWallet">
                        <label for="eWallet">E-Wallet</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Summary Section -->
    <section class="p-4">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Total Pesanan :</span>
                    <span>Rp. 240.000</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <div class="d-flex justify-content-between">
                        <span>Subtotal Produk :</span>
                        <span>Rp. 220.000</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Ongkos Kirim :</span>
                        <span>Rp. 20.000</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Biaya Layanan :</span>
                        <span>Rp. 1.000</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Total Pembayaran :</span>
                        <span>Rp. 241.000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Button -->
    <section class="p-4 text-center">
        <a href="/bayar/sukses" class="btn btn-primary w-100">Pesan Sekarang</a>
    </section>
@endsection
