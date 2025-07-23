<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact - MyBlog</title>

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
          <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Blog</a></li>
          <li class="nav-item"><a class="nav-link active" href="<?= base_url('contact') ?>">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container mt-5 pt-5">
    <div class="row">
      
      <div class="col-md-12 my-2 card">
        <div class="card-body">
          <h5 class="h5">Alamat</h5>
          <p>Jl. Lorem ipsum dolor sit amet consectetur</p>
        </div>
      </div>

      <div class="col-md-12 my-2 card">
        <div class="card-body">
          <h5 class="h5">Email</h5>
          <p>email@example.com</p>
        </div>
      </div>

      <div class="col-md-12 my-2 card">
        <div class="card-body">
          <h5 class="h5">No. HP</h5>
          <p>0812-3456-7890</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top text-center">
      &copy; <?= date('Y') ?> MyBlog
    </footer>
  </div>

  <!-- JS -->
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
