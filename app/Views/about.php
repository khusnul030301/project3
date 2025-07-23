<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About - MyBlog</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('about') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container mt-5 pt-5">
    <h1 class="mb-4">Tentang Kami</h1>
    <p>
      Selamat datang di <strong>MyBlog</strong>! Website ini dibangun menggunakan CodeIgniter 4 dan Bootstrap 5.
      Tujuan utama kami adalah memberikan artikel berkualitas seputar pemrograman web, framework, dan tips belajar coding.
    </p>
    <p>
      Kami percaya bahwa belajar coding harus menyenangkan dan mudah diakses siapa saja, kapan saja.
    </p>
  </div>

  <!-- Footer -->
  <div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top text-center">
      &copy; <?= date('Y') ?> MyBlog
    </footer>
  </div>

  <!-- Script JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
