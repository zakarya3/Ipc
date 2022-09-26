@extends('layouts.navbar')
@section('content')
<section class="bg-size-cover bg-position-bottom-center bg-repeat-0 py-5" style="padding-top: 0 !important">
    <div class="container pt-5 pb-lg-4 pb-xl-5" style="padding-top: 0 !important;padding-bottom: 0 !important;">

      <!-- Breadcrumb -->
      <nav class="pt-lg-4" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Contacts us</li>
        </ol>
      </nav>

      <div class="row pt-md-2 pt-lg-5 pb-2 pb-md-4">
        <div class="col-xxl-4 col-xl-5 col-lg-6 pt-3 mt-3">
          <h1 class="h3 mb-2">Want to work with us?</h1>
          <h2 class="display-1 text-gradient-primary pb-sm-2 pb-md-3 mb-3">Let's talk!</h2>
          <div class="nav d-block lead pt-lg-5" style="display: block !important">
            <a href="#" class="nav-link fw-normal text-decoration-underline p-0 mb-4">contact@ipc.com</a>
            <div class="text-nav">+1 406 555-0120</div>
          </div>
        </div>
        <div class="col-lg-6 offset-xl-1 offset-xxl-2 pt-3 pt-md-4 pt-lg-3 mt-3">
          <form class="needs-validation" novalidate>
            <div class="row g-4">
              <div class="col-sm-6">
                <label for="fn" class="form-label fs-base">Full name</label>
                <input type="text" class="form-control form-control-lg" id="fn" required>
                <div class="invalid-feedback">Please enter your full name!</div>
              </div>
              <div class="col-sm-6">
                <label for="email" class="form-label fs-base">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" required>
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-12 pb-2">
                <label for="message" class="form-label fs-base">Message</label>
                <textarea class="form-control form-control-lg" id="message" rows="3" required></textarea>
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-lg btn-primary w-100 w-sm-auto">Contact Us</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
       <!-- Branches -->
       <section class="container py-2 py-lg-4 py-xl-5 mb-2 mb-md-3">
        <div class="row py-5">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="d-flex flex-column h-100 shadow-sm rounded-3 overflow-hidden">
              <iframe class="d-block h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5020.057277316842!2d-122.40737351959179!3d37.73986147046842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5ce6be90058bc85!2sOur%20Planet%20Recycling%20S.F.!5e0!3m2!1sen!2sua!4v1653946944869!5m2!1sen!2sua" style="border: 0; min-height: 300px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <h2 class="h4 mb-4">Medical Center 1</h2>
            <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
              <li class="d-flex pb-1 mb-2">
                <i class="bx bx-map text-primary fs-xl me-2" style="margin-top: .125rem;"></i>
                445 Bayshor Blvd, San Francisco, CA 94124
              </li>
              <li class="d-flex pb-1 mb-2">
                <i class="bx bx-phone-call text-primary fs-xl me-2" style="margin-top: .125rem;"></i>
                (406) 555-0120
              </li>
              <li class="d-flex">
                <i class="bx bx-time-five text-primary fs-xl me-2" style="margin-top: .125rem;"></i>
                <div>
                  <strong class="text-nav">Mon - Fri</strong>: 9:00 am - 22:00 am
                  <br>
                  <strong class="text-nav">Sat - Sun:</strong>: 9:00 am - 20:00 am
                </div>
              </li>
            </ul>
            <h2 class="h4 mb-4">Medical Center 2</h2>
            <ul class="list-unstyled pb-2 pb-lg-0 mb-4 mb-lg-5">
              <li class="d-flex pb-1 mb-2">
                <i class="bx bx-map text-primary fs-xl me-2" style="margin-top: .125rem;"></i>
                2464 Royal Ln. Mesa, New Jersey 45463
              </li>
              <li class="d-flex pb-1 mb-2">
                <i class="bx bx-phone-call text-primary fs-xl me-2" style="margin-top: .125rem;"></i>
                (406) 544-0123
              </li>
              <li class="d-flex">
                <i class="bx bx-time-five text-primary fs-xl me-2" style="margin-top: .125rem;"></i>
                <div>
                  <strong class="text-nav">Mon - Fri</strong>: 9:00 am - 22:00 am
                  <br>
                  <strong class="text-nav">Sat - Sun:</strong>: 9:00 am - 20:00 am
                </div>
              </li>
            </ul>
            <div class="d-flex pt-1 pt-md-3 pt-xl-4">
              <a href="#" class="btn btn-icon btn-secondary btn-facebook me-3">
                <i class="bx bxl-facebook"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-instagram me-3">
                <i class="bx bxl-instagram"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-twitter me-3">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-youtube">
                <i class="bx bxl-youtube"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
@endsection