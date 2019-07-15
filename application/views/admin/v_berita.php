<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('css/full-width-pics.css')?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">SDN Penjaringansari II</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/index')?>">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/profil')?>">Profile</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/berita')?>">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/welcome/kontak')?>">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="py-5 bg-image-full" style="height: 1100px;">
    <img class="img-fluid d-block mx-auto" src="<?php echo base_url();?>assets/piala.jpg" width="1350px" alt="">
  </header>

  <section class="py-5 bg-image-full" style="">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 500px;"></div>

  </section>

  <article class="card-post">
        <div class="container">
            <div class="row">
                <div class="col">
                <h1 style="text-align:center">Prestasi Siswa/i SDN Penjaringan II :</h1>
                    <div class="card-post card-deck">
                        <div class="card">
                            <a class="card-post-link" href="https://www.petanikode.com/ebook-android/">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/Juara I Lomba Paduan Suara Tingkat Kecamatan.jpg" width="500px" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Juara I Lomba Paduan Suara Tingkat Kecamatan</h4>
                            </div>
                            </a>
                        </div>

                        <div class="card">
                            <a class="card-post-link" href="https://www.petanikode.com/python-file/">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/Juara I Lomba Tari Kreasi Tingkat Kecamatan.jpg" width="500px" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Juara I Lomba Tari Kreasi Tingkat Kecamatan</h4>
                            </div>
                            </a>
                        </div>

                        <div class="card">
                            <a class="card-post-link" href="https://www.petanikode.com/android-activity/">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/Juara I Lomba Vocal Tunggal Tingkat Kecamatan.jpg" width="500px" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Juara I Lomba Vocal Tunggal Tingkat Kecamatan</h4>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="card-post card-deck">
                        <div class="card">
                            <a class="card-post-link" href="https://www.petanikode.com/github-indonesia/">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/Juara II Lomba GeguritanTingkat Kecamatan.jpg" width="500px" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Juara II Lomba GeguritanTingkat Kecamatan</h4>
                            </div>
                            </a>
                        </div>

                        <div class="card">
                            <a class="card-post-link" href="https://www.petanikode.com/text-editor-vscode/">
                            <img class="card-img-top" src="<?php echo base_url();?>assets/Juara III Lomba Cerdas Cermat Cepat Tingkat Kecamatan.jpg" width="500px" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Juara III Lomba Cerdas Cermat Cepat Tingkat Kecamatan</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</article>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
