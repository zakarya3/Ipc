@extends('layouts.navbar')
@section('content')
    <!-- Hero image -->
    <div class="jarallax d-none d-md-block" data-jarallax data-speed="0.35">
    <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary-translucent"></span>
    <div class="jarallax-img" style="background-image: url({{ asset('assets/img/pics/2.jpg') }});"></div>
    <div class="d-none d-xxl-block" style="height: 700px;"></div>
    <div class="d-none d-md-block d-xxl-none" style="height: 550px;"></div>
    </div>


    <!-- Breadcrumb -->
    <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
        <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">About us</li>
    </ol>
    </nav>
    <!-- About company -->
    <section class="container pb-5 mb-md-2 mb-lg-4">
    <h1 class="border-bottom pb-4">Who We Are</h1>
    <div class="row pt-2 pt-md-3">
        <div class="col-md-6">
        <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">This is the first company, based in Georgia, which exports the pharmaceuticals (over 20 000 branded medicines) to more than 25 countries. Within few years our company has become a leader exporter of pharmaceuticals in Georgia by providing all kinds of medicines. Our permitted pharmaceutical activity is wholesale of pharmaceutical products including Controlled Drugs. Our Team members are highly experienced professionals whose dedication created the successful cooperation with EU countries , countries of Gulf, UK, African countries and Post Soviet Union countries.</p>
        </div>
        <div class="col-md-6">
        <p class="fs-lg ps-lg-4 mb-1 mb-lg-4">Our company's logistics team provides high quality service throughout the world, suitable for the customers' business interests, that is based on employees' teamwork. Our logistics representatives work from office, as well as from the customs terminal. We offer flexible shipping ways (air freight, sea freight, road transportation) of different pharmaceutical products.</p>
        </div>
    </div>
    </section>
@endsection