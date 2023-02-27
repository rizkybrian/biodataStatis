<?php
require 'functions.php';

if (isset($_POST["submit"])) {
  if (contact($_POST) > 0) {
    echo "<script>
            alert('DATA BERHASIL DIKIRIM !');
            document.location.href = 'index.php';
          </script>
          ";
  } else {
    echo "<script>
            alert('DATA TIDAK TERKIRIM');
            document.location.href = 'index.php';
          </script>
          ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Biodata</title>
  <link rel="shortcut icon" href="img/logo/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body id="home">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">My Biodata</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/profile.php?id=100009260210359"><img src="img/logo/facebook.png" alt="facebook" width="30"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/kyfbrn_/?hl=id"><img src="img/logo/instagram.png" alt="instagram" width="60" style="margin-top:-5px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.linkedin.com/in/rizky-febrian-b18135225/"><img src="img/logo/linkedin.png" alt="linkedin" width="30" style="margin-top:2px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mailto:rizkifbrn77@gmail.com"><img src="img/logo/gmail.png" alt="gmail" width="30" style="margin-top:0px; margin-left:5px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="jumbotron text-center">
    <img src="img/sayaaa.jpg" alt="Rizky Febrian" width="200" class="rounded-circle img-thumbnail bg-dark" />
    <h1 class="display-4">Rizky Febrian</h1>
    <p class="lead">Software Engineer</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L110.8,160L221.5,128L332.3,256L443.1,64L553.8,160L664.6,224L775.4,224L886.2,320L996.9,256L1107.7,64L1218.5,288L1329.2,160L1440,256L1440,320L1329.2,320L1218.5,320L1107.7,320L996.9,320L886.2,320L775.4,320L664.6,320L553.8,320L443.1,320L332.3,320L221.5,320L110.8,320L0,320Z"></path>
    </svg>
  </section>

  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-4">
          <p>
            Perkenalkan saya Rizki Febrian lulusan SMK Negeri 11 Bandung, saya lahir dan tinggal di Bandung. Hobi saya olahraga dan menggambar. Memiliki kemampuan analisis yang baik, teliti, problem-solving, bahasa inggris yang baik dan bertanggung jawab.
          </p>
        </div>
        <div class="col-md-4">
          <p>
            Saya pernah mengembangkan beberapa project web (Status atau Dinamis) dengan menggunakan bahasa pemrograman PHP, CSS dan Javascript. Ketika berkolaborasi dalam tim, biasanya saya menjadi Frontend untuk bagiannya.
          </p>
        </div>
        <div class="col-md-4">
          <p>
            Pernah menggunakan Framework PHP seperti Laravel dan Framework CSS seperti Bootstrap dan TailwindCSS, familiar dengan Vue.js, Node.js, Next.js dll. Pengalaman Magang diperusahaan Web Development selama 3 bulan.
          </p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="rgb(169, 169, 169)" fill-opacity="1" d="M0,96L180,128L360,96L540,128L720,32L900,224L1080,96L1260,160L1440,96L1440,320L1260,320L1080,320L900,320L720,320L540,320L360,320L180,320L0,320Z"></path>
    </svg>
  </section>

  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Projects</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/1.JPG" class="card-img-top" alt="Cyberpunk" />
            <div class="card-body">
              <p class="card-text">Ini adalah Illustrator Project yang saya buat dengan tema "Cyberpunk 2077".</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/2.png" class="card-img-top" alt="NFT" />
            <div class="card-body">
              <p class="card-text">"Maneshverse" adalah Project NFT yang saya buat dan sedang berjalan sampai sekarang.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/3.jpg" class="card-img-top" alt="Samurai" />
            <div class="card-body">
              <p class="card-text">Ini adalah gambar customer saya, yang saya buat menjadi Cartoon Style dengan tema "Modern Samurai".</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/4.png" class="card-img-top" alt="Store Web" />
            <div class="card-body">
              <p class="card-text">Ini adalah Web pertama yang pernah saya buat (web statis), website ini adalah web store untuk Top up Game.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/projects/5.jpg" class="card-img-top" alt="mineCourse" />
            <div class="card-body">
              <p class="card-text">"mineCourse" adalah nama project LMS (Learning Management System) yang saya kerjakan secara berkelompok bersama team.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L180,160L360,0L540,96L720,96L900,96L1080,128L1260,256L1440,32L1440,320L1260,320L1080,320L900,320L720,320L540,320L360,320L180,320L0,320Z"></path>
    </svg>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="" method="post">
            <div class="form-group">
              <label for="nama">Name</label>
              <input name="nama" type="text" class="form-control" id="nama" aria-describedby="nama" required />
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input name="email" type="email" class="form-control" id="email" required />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Message</label>
              <textarea name="pesan" class="form-control" id="pesan" rows="3" required></textarea>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-dark">Send</button>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#212529" fill-opacity="1" d="M0,64L180,160L360,96L540,96L720,224L900,192L1080,128L1260,224L1440,256L1440,320L1260,320L1080,320L900,320L720,320L540,320L360,320L180,320L0,320Z"></path>
    </svg>
  </section>
  <footer class="bg-dark text-center text-white p-5">
    <p>Created by <a href="instagram.com/kyfbrn_" class="text-white fw-bold" style="text-decoration:none">Rizky Febrian</a></p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>