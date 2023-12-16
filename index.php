<?php

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="/assets/images/icon.png" type="image/x-icon">
    <title>Home</title>
    <style>
      #carouselExampleDark{
        margin-left: 1rem;
        margin-right: 1rem;
      }
    </style>
</head>

<body>
<?php
include_once "layouts/navbar.php";
?>

<h2 style="text-align: center; font-size:60px;">Selamat datang di Sistem PerpusAnda!</h2>
<br>

<div id="carouselExampleDark" class="carousel carousel-dark slide" style="height:40rem;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="assets/images/home-1.jpg" class="d-block w-100" alt="slide-1" style="height:40rem;">
      <div class="carousel-caption d-none d-md-block">
        <div class="card text-bg-dark">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="assets/images/home-2.jpg" class="d-block w-100" alt="slide-2" style="height:40rem;">
      <div class="carousel-caption d-none d-md-block">
      <div class="card text-bg-dark">
        <h5>Second slide label</h5>  
        <p>Some representative placeholder content for the second slide.</p>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/home-3.png" class="d-block w-100" alt="slide-3" style="height:40rem;">
      <div class="carousel-caption d-none d-md-block">
      <div class="card text-bg-dark">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
</body>

</html>