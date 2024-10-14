@extends('layouts.home')

@section('landing-page')

    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Our <span class="text-primary">Services</span></h1>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <img src="{{asset('assets/img/oil.png')}}" class="mx-auto" alt="Oli" width="50%">
                        </div>
                        <h5 class="mb-3">Ganti Oli Mesin</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                        <a href="pesan-jasa-oli.html" class="btn btn-primary rounded-pill py-2 px-4">Pesan</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <img src="{{asset('assets/img/car.png')}}" class="mx-auto" alt="Derek" width="50%">
                        </div>
                        <h5 class="mb-3">Tambah Angin + Derek</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                        <a href="pesan-derek.html" class="btn btn-primary rounded-pill py-2 px-4">Pesan</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <img src="{{asset('assets/img/settings.png')}}" class="mx-auto" alt="Tambal" width="50%">
                        </div>
                        <h5 class="mb-3">Tambal Ban</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                        <a href="pesan-jasa.html" class="btn btn-primary rounded-pill py-2 px-4">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Product Start -->
    <div class="container-fluid categories pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Our <span class="text-primary">Product</span></h1>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                </p>
            </div>
            <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top p-5">
                            <img src="{{asset('assets/img/curology-j7pKVQrTUsM-unsplash 1.png')}}" class="img-fluid w-60 mx-auto rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>Curology Product Set</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.5 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$99</h4>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top p-5">
                            <img src="{{asset('assets/img/curology-j7pKVQrTUsM-unsplash 1.png')}}" class="img-fluid w-60 mx-auto rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>Curology Product Set</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.5 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$99</h4>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top p-5">
                            <img src="{{asset('assets/img/curology-j7pKVQrTUsM-unsplash 1.png')}}" class="img-fluid w-60 mx-auto rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>Curology Product Set</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.5 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$99</h4>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top p-5">
                            <img src="{{asset('assets/img/curology-j7pKVQrTUsM-unsplash 1.png')}}" class="img-fluid w-60 mx-auto rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>Curology Product Set</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.5 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$99</h4>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top p-5">
                            <img src="{{asset('assets/img/curology-j7pKVQrTUsM-unsplash 1.png')}}" class="img-fluid w-60 mx-auto rounded-top" alt="">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>Curology Product Set</h4>
                            <div class="categories-review mb-4">
                                <div class="me-3">4.5 Review</div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">$99</h4>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    {{-- Product Categories Start --}}
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Product <span class="text-primary">Categories</span></h1>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <img src="{{asset('assets/img/oil.png')}}" class="mx-auto" alt="Oli" width="50%">
                        </div>
                        <h5 class="mb-3">Oli</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Lihat</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <img src="{{asset('assets/img/car.png')}}" class="mx-auto" alt="Derek" width="50%">
                        </div>
                        <h5 class="mb-3">Ban</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Lihat</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="service-icon mb-4">
                            <img src="{{asset('assets/img/settings.png')}}" class="mx-auto" alt="Tambal" width="50%">
                        </div>
                        <h5 class="mb-3">Spare Part</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam quasi quibusdam ipsa perferendis iusto?</p><hr>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Product Categories End --}}

    <!-- Order Steps Start -->
    <div class="container-fluid steps py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize text-white mb-3">Order<span class="text-primary"> Process</span></h1>
                <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="steps-item p-4 mb-4">
                        <h4>Pilih Jasa/Produk</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                        <div class="setps-number">01.</div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="steps-item p-4 mb-4">
                        <h4>Pesan Jasa/Produk</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                        <div class="setps-number">02.</div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="steps-item p-4 mb-4">
                        <h4>Nikmati Pelayanan dan Produk Pesanan Anda</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, dolorem!</p>
                        <div class="setps-number">03.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Order Steps End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Bengkel<span class="text-primary"> Blog & News</span></h1>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('assets/img/blog-1.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">30 Dec 2025</div>
                            <div class="blog-comment my-3">
                                <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Tips Memilih Oli Sesuai Jenis Mobil</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="">Baca Selengkapnya  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('assets/img/blog-2.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">25 Dec 2025</div>
                            <div class="blog-comment my-3">
                                <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Merk Ban Terbaik Dunia</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{asset('assets/img/blog-3.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">27 Dec 2025</div>
                            <div class="blog-comment my-3">
                                <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Cara Rawat Spare Part Agar Tetap Awet</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="">Baca Selengkapnya  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Advantages Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Our<span class="text-primary"> Advantages</span></h1>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                </p>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="{{asset('assets/img/Delivery.png')}}" class="img-fluid rounded w-50" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>FREE AND FAST DELIVERY</h4>
                            <p>Free Delivery For All Orders Over $140</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="{{asset('assets/img/Services.png')}}" class="img-fluid rounded w-50" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>24/7 CUSTOMER SERVICE</h4>
                            <p>Friendly 24/7 Customer Support</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="{{asset('assets/img/Security.png')}}" class="img-fluid rounded w-50" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>We Return Money Within 30 Days</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Advantages End -->

    {{-- Off Canvas Start --}}
    <div id="orderSidebar" class="offcanvas offcanvas-end bg-light shadow-lg" tabindex="-1" style="width: 400px;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">List Pesanan</h5>
            <button type="button" class="btn-close" id="closeSidebar"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-item d-flex align-items-center mb-3">
                <img src="{{asset('assets/img/oil.png')}}" alt="Oil Motor" class="img-fluid me-3" style="width: 50px;">
                <div>
                    <p class="mb-1">Oli Motor Motul 300h</p>
                    <p class="mb-1 text-muted">Rp 220.000</p>
                </div>
                <div class="ms-auto d-flex align-items-center">
                    <button class="btn btn-outline-secondary btn-sm me-2">-</button>
                    <input type="text" class="form-control text-center" value="1" style="width: 40px;">
                    <button class="btn btn-outline-secondary btn-sm ms-2">+</button>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer p-3">
            <a href="/checkout" class="btn btn-primary w-100">Pesan Sekarang</a>
        </div>
    </div>

    <script>
        document.getElementById('cartBtn').addEventListener('click', function() {
            var sidebar = new bootstrap.Offcanvas(document.getElementById('orderSidebar'));
            sidebar.show();
        });

        document.getElementById('closeSidebar').addEventListener('click', function() {
            var sidebar = bootstrap.Offcanvas.getInstance(document.getElementById('orderSidebar'));
            sidebar.hide();
        });
    </script>
    {{-- Off Canvas End --}}

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
@endsection
