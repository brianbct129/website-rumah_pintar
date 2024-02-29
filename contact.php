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

  <!-- Contact Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
        <h5 class="fw-bold text-primary text-uppercase">Hubungi Kami</h5>
        <h1 class="mb-0">Hubungi Kami Untuk Semua Jawaban Anda</h1>
      </div>
      <div class="row g-5">
        <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
          <form id="contactForm" method="POST">
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Nama Lengkap" style="height: 55px" required />
              </div>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Email" style="height: 55px" required />
              </div>
              <div class="col-12">
                <input type="text" name="subject" class="form-control border-0 bg-light px-4" placeholder="Subjek" style="height: 55px" required />
              </div>
              <div class="col-12">
                <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Pesan" required></textarea>
              </div>
              <div class="col-12">
                <button id="submitForm" class="btn btn-primary w-100 py-3" type="submit">
                  Kirim Pesan
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
          <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1986.8257671493616!2d119.41237471355299!3d-5.159643217267823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d587162d79d%3A0x35ee77a40f10c3d6!2sRumah%20Pintar%20Teknologi%20%26%20Inovatif!5e0!3m2!1sid!2sid!4v1706855191734!5m2!1sid!2sid" width="600" height="450" style="min-height: 350px; border: 0" allowfullscreen="true" aria-hidden="false" tabindex="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- Vendor Start -->
  <?php include('layout/vendor_RPP.php') ?>
  <!-- Vendor End -->

  <!-- Footer Start -->
  <?php include('layout/footer.php') ?>
  <!-- Footer End -->

  <?php include('layout/script.php') ?>
</body>

</html>