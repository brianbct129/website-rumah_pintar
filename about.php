<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Rumah Pintar Teknologi & Inovatif</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Rumah Pintar Teknologi & Inovatif" name="keywords" />
    <meta content="Rumah Pintar Teknologi & Inovatif" name="description" />
    <?php include('layout/css.php') ?>
  </head>

  <body>
   <!-- Spinner Start -->
   <?php include('layout/spinner.php') ?>
    <!-- Spinner End -->

    <?php include('layout/nav_content.php') ?>
   
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-7">
            <div class="section-title position-relative pb-3 mb-5">
              <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
              <h1 class="mb-0">Solusi IT Terbaik Dengan 4 Tahun Pengalaman</h1>
            </div>
            <p class="mb-4">
              Kami adalah tim berpengalaman dalam dunia teknologi informasi (IT)
              dengan empat tahun pengalaman dalam menyediakan solusi terbaik
              untuk kebutuhan Anda. Kami berkomitmen untuk memberikan pelayanan
              yang cepat, profesional, dan terjangkau kepada pelanggan kami.
            </p>
            <div class="row g-0 mb-3">
              <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                <h5 class="mb-3">
                  <i class="fa fa-check text-primary me-3"></i>Pelayanan Cepat
                </h5>
                <h5 class="mb-3">
                  <i class="fa fa-check text-primary me-3"></i>Pengalaman
                  Profesional
                </h5>
              </div>
              <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                <h5 class="mb-3">
                  <i class="fa fa-check text-primary me-3"></i>Keamanan Tanpa
                  Kompromi
                </h5>
                <h5 class="mb-3">
                  <i class="fa fa-check text-primary me-3"></i>Harga Terjangkau
                </h5>
              </div>
            </div>
            <div
              class="d-flex align-items-center mb-4 wow fadeIn"
              data-wow-delay="0.6s"
            >
              <div
                class="bg-primary d-flex align-items-center justify-content-center rounded"
                style="width: 60px; height: 60px"
              >
                <i class="fa fa-phone-alt text-white"></i>
              </div>
              <div class="ps-4">
                <h5 class="mb-2">Hubungi kami untuk konsultasi</h5>
                <h4 class="text-primary mb-0">+62-811-4460-8008</h4>
              </div>
            </div>
            <a
              href="contact.php"
              class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
              data-wow-delay="0.9s"
              >Kontak Kami</a
            >
          </div>
          <div class="col-lg-5" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded wow zoomIn"
                data-wow-delay="0.9s"
                src="assets/img/work.jpg"
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

     <!-- Team Start -->
     <?php include('layout/team.php') ?>
    <!-- Team End -->

    <!-- Vendor Start -->
    <?php include('layout/vendor_RPP.php') ?>
    <!-- Vendor End -->

    <!-- Footer Start -->
    <?php include ('layout/footer.php')?>
    <!-- Footer End -->

    <?php include('layout/script.php')?>
  </body>
</html>
