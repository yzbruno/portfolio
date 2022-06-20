<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Slide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- ..................................... -->
  <!-- custom css-->
  <!-- ..................................... -->
  <style>
  .swiper { width: 100%; height: auto; }
  .swiper .swiper-slide { height: auto; line-height: 300px; }
  .swiper .swiper-slide:nth-child(2n) { height: auto; line-height: 500px; }
  </style>
</head>

<body>
  <!-- ..................................... -->
  <!-- slides -->
  <!-- ..................................... -->
  <div class="has-text-centered">
    <div class="tag is-black">
      DICA: ARRASTE AS IMAGENS OU USE AS SETAS PARA NAVEGAR.
    </div>
  </div>
  <div class="space50"></div>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/gol/banner01.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner02.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner03.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner04.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner05.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner06.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner07.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner08.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner09.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner10.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner11.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner12.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner13.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner14.png" /></div>
      <div class="swiper-slide"><img src="images/gol/banner15.png" /></div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- ..................................... -->
  <!-- swiper js -->
  <!-- ..................................... -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
  var swiper = new Swiper(".mySwiper", {
    autoHeight: true,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  </script>
</body>
</html>
