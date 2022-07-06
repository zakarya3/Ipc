@extends('layouts.navbar')
@section('content')
      <!-- Hero -->
      <section class="position-relative pt-md-3 pt-lg-5 mb-md-3 mb-lg-5">
        <div class="container position-relative zindex-5 pt-5">
          <div class="row mt-4 pt-5">
            <div class="col-xl-4 col-lg-5 text-center text-lg-start pb-3 pb-md-4 pb-lg-0">
              <h1 class="fs-xl text-uppercase">International Pharmaceutical Company</h1>
              <h3 class="display-4 pb-md-2 pb-lg-4">We Take Care of Your Health</h3>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 position-relative zindex-5 mb-5 mb-lg-0">
              <div class="card bg-primary border-0 shadow-primary py-2 p-sm-4 p-lg-5" data-jarallax-element="40" data-disable-parallax-down="lg">
                <div class="card-body p-lg-3">
                  <h2 class="text-light pb-1 pb-md-3">International Pharmaceutical Company</h2>
                  <p class="fs-lg text-light pb-2 pb-md-0 mb-4 mb-md-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, cum autem. Cupiditate quisquam soluta iste nisi ullam rem cum dolorem.</p>
                  <a href="#" class="btn btn-light btn-lg">
                    About us
                    <i class="bx bx-right-arrow-alt lh-1 fs-4 ms-2 me-n2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-lg-block" style="margin-top: -165px;"></div>
          <div class="row align-items-end">
            <div class="col-lg-6 d-none d-lg-block">
              <img src="{{ asset('assets/img/pics/3.jpg') }}" class="rounded-3" alt="Image" data-jarallax-element="-40" data-disable-parallax-down="md">
            </div>
            <div class="col-lg-6 d-flex flex-column flex-md-row align-items-center justify-content-between">
              <div class="d-flex align-items-center ps-xl-5 mb-4 mb-md-0">
                <div class="btn btn-icon btn-secondary btn-lg pe-none rounded d-lg-none d-xl-inline-flex">
                  <i class="bx bx-time text-primary fs-3"></i>
                </div>
                <ul class="list-unstyled ps-3 ps-lg-0 ps-xl-3 mb-0">
                  <li><strong class="text-dark">Mon – Fri:</strong> 9:00 am – 22:00 pm</li>
                  <li><strong class="text-dark">Sat – Sun:</strong> 9:00 am – 20:00 pm</li>
                </ul>
              </div>
              <a href="#" class="btn btn-primary btn-lg shadow-primary">Make an appointment</a>
            </div>
          </div>
        </div>
        <div class="d-none d-lg-block position-absolute top-0 end-0 w-50 d-flex flex-column ps-3" style="height: calc(100% - 108px);">
          <div class="w-100 h-100 overflow-hidden bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url({{ asset('assets/img/pics/7.jpg') }}); border-bottom-left-radius: .5rem; border-top-left-radius: .5rem;"></div>
        </div>
      </section>


      <!-- Icon boxes (Features) -->
      <section class="container py-5 mb-2 mb-md-4 mb-lg-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 pt-2 pt-md-4 pb-lg-2">

          <!-- Item -->
          <div class="col">
            <div class="card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
              <img src="{{ asset('assets/img/icons/find.png') }}" width="80" alt="Doctor icon">
              <div class="card-body text-center text-sm-start text-md-center text-xxl-start pb-3 pb-sm-2 pb-md-3 pb-xxl-2">
                <h3 class="h5 mb-2 mt-n4 mt-sm-0 mt-md-n4 mt-xxl-0">Find us</h3>
                <p class="fs-sm mb-1">Rue 701, N°16 bis، Agadir 80000.</p>
                <a href="#" class="btn btn-link stretched-link px-0">
                  Contact us
                  <i class="bx bx-right-arrow-alt fs-xl ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
              <img src="{{ asset('assets/img/icons/email.png') }}" width="80" alt="Ambulance icon">
              <div class="card-body text-center text-sm-start text-md-center text-xxl-start pb-3 pb-sm-2 pb-md-3 pb-xxl-2">
                <h3 class="h5 mb-3 mt-n4 mt-sm-0 mt-md-n4 mt-xxl-0">Our Email</h3>
                <p class="fs-sm mb-1">
                  contact@ipc.com
                </p>
                <a href="#" class="btn btn-link stretched-link px-0">
                  Contact us
                  <i class="bx bx-right-arrow-alt fs-xl ms-1"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card flex-column flex-sm-row flex-md-column flex-xxl-row align-items-center card-hover border-primary">
              <img src="{{ asset('assets/img/icons/phone-call (2).png') }}" width="80" alt="Virus icon">
              <div class="card-body text-center text-sm-start text-md-center text-xxl-start pb-3 pb-sm-2 pb-md-3 pb-xxl-2">
                <h3 class="h5 mb-2 mt-n4 mt-sm-0 mt-md-n4 mt-xxl-0">Our number</h3>
                <p class="fs-sm mb-1">(+212) 555 555 555</p>
                <a href="#" class="btn btn-link stretched-link px-0">
                  Call us
                  <i class="bx bx-right-arrow-alt fs-xl ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Services -->
      <section class="container pb-5 mb-md-2 mb-lg-5">
        <div class="row">
          <div class="col-lg-4 text-center text-lg-start pb-3 pb-lg-0 mb-4 mb-lg-0">
            <h2 class="h1 mb-lg-4">Our Services</h2>
            <p class="pb-4 mb-0 mb-lg-3">We appreciate your trust greatly. Our patients choose us and our services because they know we are the best. We offer complete health care to individuals with various health concerns.</p>
            <a href="#" class="btn btn-primary shadow-primary btn-lg">All services</a>
          </div>
          <div class="col-xl-7 col-lg-8 offset-xl-1">
            <div class="row row-cols-1 row-cols-md-2">
              <div class="col">
                <div class="card card-hover bg-secondary border-0 mb-4">
                  <div class="card-body d-flex align-items-start">
                    <div class="flex-shrink-0 bg-light rounded-3 p-3">
                      <img src="{{ asset('assets/img/icons/cardiology.svg') }}" width="28" alt="Icon">
                    </div>
                    <div class="ps-4">
                      <h3 class="h5 pb-2 mb-1">Service 1</h3>
                      <p class="pb-2 mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci earum amet.</p>
                      <a href="#" class="btn btn-link stretched-link px-0">
                        Learn more
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card card-hover bg-secondary border-0 mb-4">
                  <div class="card-body d-flex align-items-start">
                    <div class="flex-shrink-0 bg-light rounded-3 p-3">
                      <img src="{{ asset('assets/img/icons/scalpel.svg') }}" width="28" alt="Icon">
                    </div>
                    <div class="ps-4">
                      <h3 class="h5 pb-2 mb-1">Service 2</h3>
                      <p class="pb-2 mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci earum amet.</p>
                      <a href="#" class="btn btn-link stretched-link px-0">
                        Learn more
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card card-hover bg-secondary border-0 mb-4">
                  <div class="card-body d-flex align-items-start">
                    <div class="flex-shrink-0 bg-light rounded-3 p-3">
                      <img src="{{ asset('assets/img/icons/x-ray.svg') }}" width="28" alt="Icon">
                    </div>
                    <div class="ps-4">
                      <h3 class="h5 pb-2 mb-1">Service 3</h3>
                      <p class="pb-2 mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci earum amet.</p>
                      <a href="#" class="btn btn-link stretched-link px-0">
                        Learn more
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-hover bg-secondary border-0 mb-4">
                  <div class="card-body d-flex align-items-start">
                    <div class="flex-shrink-0 bg-light rounded-3 p-3">
                      <img src="{{ asset('assets/img/icons/stethoscope.svg') }}" width="28" alt="Icon">
                    </div>
                    <div class="ps-4">
                      <h3 class="h5 pb-2 mb-1">Service 4</h3>
                      <p class="pb-2 mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci earum amet.</p>
                      <a href="#" class="btn btn-link stretched-link px-0">
                        Learn more
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card card-hover bg-secondary border-0 mb-4">
                  <div class="card-body d-flex align-items-start">
                    <div class="flex-shrink-0 bg-light rounded-3 p-3">
                      <img src="{{ asset('assets/img/icons/lungs.svg') }}" width="28" alt="Icon">
                    </div>
                    <div class="ps-4">
                      <h3 class="h5 pb-2 mb-1">Service 5</h3>
                      <p class="pb-2 mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci earum amet.</p>
                      <a href="#" class="btn btn-link stretched-link px-0">
                        Learn more
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card card-hover bg-secondary border-0 mb-4">
                  <div class="card-body d-flex align-items-start">
                    <div class="flex-shrink-0 bg-light rounded-3 p-3">
                      <img src="{{ asset('assets/img/icons/tooth.svg') }}" width="28" alt="Icon">
                    </div>
                    <div class="ps-4">
                      <h3 class="h5 pb-2 mb-1">Dental Care</h3>
                      <p class="pb-2 mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel adipisci earum amet.</p>
                      <a href="#" class="btn btn-link stretched-link px-0">
                        Learn more
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Contacts -->
      <section class="bg-secondary pb-lg-5" style="margin-top: -240px; padding-top: 300px;">
        <div class="container pt-2 pt-md-3 pt-lg-5 pb-5">
          <div class="row pb-3">
            <div class="col-xl-7 col-md-6">
              <div class="d-flex flex-column w-100 h-100 rounded-3 bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url({{ asset('assets/img/pics/4.jpg') }});"></div>
            </div>
            <div class="col-xl-5 col-md-6">
              <div class="card border-0 p-lg-4">
                <div class="card-body">
                  <h3 class="pb-3 pb-lg-4">Message us</h3>
                  <form class="needs-validation mb-4 pb-2 pb-lg-0 mb-lg-5" novalidate>
                    <div class="position-relative mb-4">
                      <label for="name" class="form-label fs-base">Name</label>
                      <input type="text" id="name" class="form-control form-control-lg" required>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid name address.</div>
                    </div>
                    <div class="position-relative mb-4">
                      <label for="email" class="form-label fs-base">Email address</label>
                      <input type="email" id="email" class="form-control form-control-lg" required>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                    </div>
                    <div class="position-relative mb-4">
                      <label for="phone" class="form-label fs-base">Phone number</label>
                      <input type="number" id="phone" class="form-control form-control-lg" required>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid phone number.</div>
                    </div>
                    <div class="position-relative mb-4">
                      <label for="message" class="form-label fs-base">Message</label>
                      <textarea class="form-control" placeholder="Type your message here..." rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg shadow-primary">Send</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection