 <!-- Topbar Start -->
 <div class="container-fluid bg-dark px-5 d-none d-lg-block">
      <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <small class="me-3 text-light"
              ><i class="fa fa-map-marker-alt me-2"></i>Sentra UMKM, Jl. Opu
              Daeng Risadju No.218</small
            >
            <small class="me-3 text-light"
              ><i class="fa fa-phone-alt me-2"></i>+62-811-4460-8008</small
            >
            <small class="text-light"
              ><i class="fa fa-envelope-open me-2"></i
              >info@rumahpintarinovasi.com</small
            >
          </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
          <div class="d-inline-flex align-items-center" style="height: 45px">
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-twitter fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-facebook-f fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-linkedin-in fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
              href=""
              ><i class="fab fa-instagram fw-normal"></i
            ></a>
            <a
              class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
              href=""
              ><i class="fab fa-youtube fw-normal"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
          <img
            src="assets/img/logo_rp_white.png"
            alt=""
            width="100"
            height="auto"
            id="logo-head"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">Beranda</a>
            <a href="about.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>">Tentang Kami</a>
            <a href="service.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'service.php') echo 'active'; ?>">Layanan</a>
            <a href="blog.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'blog.php') echo 'active'; ?>">Portofolio</a>
            <a href="contact.php" class="nav-item nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>">Hubungi Kami</a>
          </div>
          <button
            type="button"
            class="btn text-primary ms-3"
            data-bs-toggle="modal"
            data-bs-target="#searchModal"
          >
            <i class="fa fa-search"></i>
          </button>
        </div>
      </nav>

      <div
        id="header-carousel"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="assets/img/business-man.jpg" alt="Image" />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                  Masuki Masa Depan Kehidupan dengan
                </h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                  RUMAH PINTAR
                </h1>
                <a
                  href="contact.php"
                  target="blank"
                  class="btn btn-primary py-md-3 px-md-5 animated slideInRight"
                  >Kontak Kami</a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="assets/img/coding.jpg" alt="Image" />
            <div
              class="carousel-caption d-flex flex-column align-items-center justify-content-center"
            >
              <div class="p-3" style="max-width: 900px">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                  Masuki Masa Depan Kehidupan dengan
                </h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                  RUMAH PINTAR
                </h1>
                <a
                  href="contact.php"
                  class="btn btn-primary py-md-3 px-md-5 animated slideInLeft"
                  >Kontak Kami</a
                >
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Selanjutnya</span>
        </button>
      </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
          <div class="modal-header border-0">
            <button
              type="button"
              class="btn bg-white btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="modal-body d-flex align-items-center justify-content-center"
          >
            <div class="input-group" style="max-width: 600px">
              <input
                type="text"
                class="form-control bg-transparent border-primary p-3"
                placeholder="Type search keyword"
              />
              <button class="btn btn-primary px-4">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Full Screen Search End -->