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
                  <p class="fs-lg text-light pb-2 pb-md-0 mb-4 mb-md-5">We are the first company, based in Georgia, which exports the pharmaceuticals to more than 24 countries.
                    Offering more than 20 000 branded medicines and logistic lines for delivery to every country in the world.
                    It's our pleasure to support you any time.</p>
                  <a href="{{ url('about') }}" class="btn btn-light btn-lg">
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
                      <h3 class="h5 pb-2 mb-1">Domestic Sales</h3>
                      <p class="pb-2 mb-1">We evaluate all the drug demands of the private hospitals in the fastest way and provide the necessary support...</p>
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
                      <h3 class="h5 pb-2 mb-1">Import and Export</h3>
                      <p class="pb-2 mb-1">With its comprehensive product range, IPC Pharmaceutical Warehouse is able to respond to the demands and provide medicine that will perform the required treatment...</p>
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
                      <h3 class="h5 pb-2 mb-1">Aid Organizations & Tenders</h3>
                      <p class="pb-2 mb-1">As IPC Pharmaceutical Warehouse, we supply medicine and medical products to many aid organizations and attend tenders...</p>
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
                      <h3 class="h5 pb-2 mb-1">Distributorship</h3>
                      <p class="pb-2 mb-1">We offer medical distributorships to leading Turkish manufacturers for export and / or business development purposes...</p>
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
                      <h3 class="h5 pb-2 mb-1">International sales</h3>
                      <p class="pb-2 mb-1">We work with many healthcare institutions, pharmacies, hospitals, international warehouses and suppliers in 62 countries to provide patients with affordable...</p>
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
                      <h3 class="h5 pb-2 mb-1">Humane aid</h3>
                      <p class="pb-2 mb-1">Medimpex provides medicines to patients in need under all circumstances in international and local projects ...</p>
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
            <!-- Team -->
            <section class="container pt-xl-2 pb-5 mb-md-3 mb-lg-5">
              <div class="d-md-flex align-items-center justify-content-between text-center text-md-start pb-1 pb-lg-0 mb-4 mb-lg-5">
                <h2 class="h1 mb-md-0">Our team</h2>
                <a href="#" class="btn btn-outline-primary">
                  See all doctors
                  <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
                </a>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      
                <!-- Item -->
                <div class="col">
                  <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                      <img src="{{ asset('assets/img/team/02.jpg') }}" class="rounded-3" alt="Darrell Steward">
                      <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                          <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                            <i class="bx bxl-facebook"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                            <i class="bx bxl-linkedin"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                            <i class="bx bxl-twitter"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body text-center p-3">
                      <h3 class="fs-lg fw-semibold pt-1 mb-2">Darrell Steward</h3>
                      <p class="fs-sm mb-2">Cardiologist</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <div class="text-nowrap me-1">
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bx-star text-muted fs-sm opacity-75"></i>
                        </div>
                        <span class="fs-xs text-muted">(14 reviews)</span>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- Item -->
                <div class="col">
                  <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                      <img src="{{ asset('assets/img/team/02.jpg') }}" class="rounded-3" alt="Annette Black">
                      <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                          <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                            <i class="bx bxl-facebook"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                            <i class="bx bxl-linkedin"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                            <i class="bx bxl-twitter"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body text-center p-3">
                      <h3 class="fs-lg fw-semibold pt-1 mb-2">Annette Black</h3>
                      <p class="fs-sm mb-2">Pediatrician</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <div class="text-nowrap me-1">
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bx-star text-muted fs-sm opacity-75"></i>
                        </div>
                        <span class="fs-xs text-muted">(10 reviews)</span>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- Item -->
                <div class="col">
                  <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                      <img src="{{ asset('assets/img/team/02.jpg') }}" class="rounded-3" alt="Dianne Russell">
                      <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                          <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                            <i class="bx bxl-facebook"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                            <i class="bx bxl-linkedin"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                            <i class="bx bxl-twitter"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body text-center p-3">
                      <h3 class="fs-lg fw-semibold pt-1 mb-2">Dianne Russell</h3>
                      <p class="fs-sm mb-2">Dentist</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <div class="text-nowrap me-1">
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                        </div>
                        <span class="fs-xs text-muted">(5 reviews)</span>
                      </div>
                    </div>
                  </div>
                </div>
      
                <!-- Item -->
                <div class="col">
                  <div class="card card-hover border-0 bg-transparent">
                    <div class="position-relative">
                      <img src="{{ asset('assets/img/team/02.jpg') }}" class="rounded-3" alt="Courtney Henry">
                      <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                          <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                            <i class="bx bxl-facebook"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                            <i class="bx bxl-linkedin"></i>
                          </a>
                          <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                            <i class="bx bxl-twitter"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body text-center p-3">
                      <h3 class="fs-lg fw-semibold pt-1 mb-2">Courtney Henry</h3>
                      <p class="fs-sm mb-2">Gynecologist</p>
                      <div class="d-flex align-items-center justify-content-center">
                        <div class="text-nowrap me-1">
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                          <i class="bx bxs-star text-warning fs-sm"></i>
                        </div>
                        <span class="fs-xs text-muted">(16 reviews)</span>
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