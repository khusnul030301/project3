<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FAQs - MyBlog</title>

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
          <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
          <li class="nav-item"><a class="nav-link active" href="<?= base_url('faqs') ?>">FAQ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container mt-5 pt-5">
    <h2 class="mb-4">Frequently Asked Questions</h2>

    <div class="accordion" id="faqAccordion">
      
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Apa itu MyBlog?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            MyBlog adalah platform blog sederhana yang dibuat menggunakan CodeIgniter 4.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Bagaimana cara menghubungi admin?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Kamu bisa menghubungi admin melalui halaman <a href="<?= base_url('contact') ?>">Contact</a>.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Apakah bisa posting artikel sendiri?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Belum. Saat ini fitur posting hanya bisa dilakukan oleh admin.
          </div>
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
