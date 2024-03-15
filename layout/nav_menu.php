<a href="index.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">Beranda</a>
<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle <?= in_array(basename($_SERVER['PHP_SELF']), ['CCTV.php', 'social_media.php', 'landing_page.php']) ? 'active' : '' ?>" data-bs-toggle="dropdown">Produk</a>
    <div class="dropdown-menu m-0">
        <a href="CCTV.php" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'CCTV.php') echo 'active'; ?>">CCTV</a>
        <a href="social_media.php" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'social_media.php') echo 'active'; ?>">Social Media</a>
        <a href="landing_page.php" class="dropdown-item <?php if (basename($_SERVER['PHP_SELF']) == 'landing_page.php') echo 'active'; ?>">Landing Page</a>
    </div>
</div>
<a href="about.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'active'; ?>">Tentang Kami</a>
<a href="service.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'service.php') echo 'active'; ?>">Layanan</a>
<a href="portfolio.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'portfolio.php') echo 'active'; ?>">Portofolio</a>
<a href="contact.php" class="nav-item nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>">Hubungi Kami</a>