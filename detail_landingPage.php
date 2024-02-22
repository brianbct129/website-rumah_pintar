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

  <style>
        /* Optional: Add custom styles here */
        /* body {
            background-color: #f8f9fa;
            padding: 20px;
        } */

        .item {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        h2 {
            color: #007bff;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            list-style: inside;
        }

        

        .title {
            color: #007bff;
            font-size: 3em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .price {
            font-size: 2em;
            font-weight: bold;
            margin-top: 10px;
        }

        .content {
            margin-top: 20px;
        }

        .isi {
            font-size: 1.2em;
            line-height: 1.6;
        }

        .term {
            margin-top: 20px;
            font-size: 1.2em;
            text-align: left;
        }

        .term ul {
            list-style: none;
            padding: 0;
        }

        .term li {
            margin-bottom: 10px;
        }

        .order-button {
            margin-top: 20px;
        }
        /* .jumbotron {
            background-image: url('./img/Picture5.png');
            background-size: cover;
            color: #fff;
            padding: 100px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        } */

    </style>


<body>
    <!-- Spinner Start -->
    <!-- Spinner End -->

<?php include('layout/nav_content.php') ?>


        <div class="container item">
            <div class="row">
                <div class="col-lg-6">
                        <h2 class="mb-4">Apa Itu Landing Page?</h2>
                        <p>Web yang dirancang khusus untuk tujuan pemasaran atau promosi tertentu</p>
                        <h2>Kenapa Landing Page Penting?</h2>
                    <p>
                        Landing page merupakan elemen kunci dalam strategi pemasaran digital. Dengan desain yang menarik dan fokus pada tujuan tertentu,
                        landing page dapat meningkatkan konversi dan mendukung pencapaian target pemasaran Anda.
                    </p>
                    <h2>Manfaat Landing Page:</h2>
                    <ul>
                        <li>Menyampaikan Pesan Pemasaran</li>
                        <li>Meningkatkan Konversi</li>
                        <li>Mengumpulkan Informasi Kontak</li>
                        <li>Menyediakan Tawaran Khusus</li>
                        <li>Memperkuat Citra Merek</li>
                    </ul>
                    <h2>Kenapa Kami?</h2>
                    <ul>
                        <li>Pengerjaan Cepat ( Max 2 x 24 Jam )</li>
                        <li>Pengalaman dan Keahlian tim kami yang sudah tidak diragukanCustomer Service yang dapat di andalkan </li>
                    </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <img class="img-fluid w-100 rounded" src="./img/Picture5.png" alt="">
                        </div>
                    </div>
            </div>
        </div>

        <div class="container item text-center">
        <h1 class="title">DAPATKAN SEKARANG!</h1>
        <div class="price">Rp. 499.000</div>
        <p class="isi">Untuk 1 Tahun Pertama</p>
        <div class="price">Rp. 299.000</div>
        <p class="isi">Untuk Tahun berikutnya</p>

        <div class="content">
            <h2>Termasuk:</h2>
                <div class="term text-center">
                    <ul>
                        <li>Hosting 1 Tahun</li>
                        <li>Maintenance 1 Tahun</li>
                        <li>Bonus Ganti Gambar 3x dalam 1 tahun</li>
                    </ul>
                </div>

                <a href="contact.php"
                    class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                    data-wow-delay="0.9s">Pesan Sekarang
                </a>
            </div>
        </div>



   <?php include ('layout/footer.php')?>
    <!-- Footer End -->
    <?php include('layout/script.php')?>
    <script src="js/main.js"></script>
</body>

</html>