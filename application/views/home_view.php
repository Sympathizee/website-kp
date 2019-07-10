<!DOCTYPE html>
<html lang="en" style="background: url(assets/images/BG1.png) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
<head>
  <title>BERANDA</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->load->view('templates/header'); ?>
  <?php $this->load->view('templates/navbar'); ?>
</head>
<body>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/home.css">
<style type="text/css">
body {
  background:transparent !important;
  height: 100%;
}
html{
  height: 100%;
}
</style>
<div class="p-0 text-center">
  <div class="row p-0 m-0 py-5 snap" style="height: 100vh;">
    <div class="container p-5 mx-5">
      <div class="row">
        <div class="my-5 col-md-6">
          <h1 class="text-left font-weight-bold display-1">Company</h1>
          <h1 class="text-left font-weight-bold display-1">Name</h1>
          <p class="lead font-weight-bold" style="background-color: rgba(255,255,255,.7); border-radius: 5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
  <!--Home 1 END-->
  <div class="row p-0 m-0 snap" style="background-color: rgb(252,247,243);width: 100%;height: 100vh;">
    <div class="container-fluid">
      <div class="row m-0 p-0" style="height: 6vh;"><!--INI HEADBAR BACKGROUND-->
      </div>
      <div class="row" style="">
        <div class="container my-3 p-0" data-aos="fade-left" data-aos-duration="1500">
          <img src="<?php echo base_url();?>/assets/images/Promo2.1.png" height="300">
        </div>
        <div class="container py-3" style="background-color: rgb(240,230,222);" data-aos="fade-right" data-aos-duration="1500">
          <h3 style="color:rgb(72,149,119)">Jadwal Keberangkatan Umroh 2019</h3>
          <table id="table" class="table-sm" style="width: 100%;">
            <thead>
              <tr style="color: rgb(63,62,60);">
                <th style="border-bottom: 2px solid rgb(63,62,60);">Paket Umroh</th>
                <th style="border-bottom: 2px solid rgb(63,62,60);">Tanggal Keberangkatan</th>
                <th style="border-bottom: 2px solid rgb(63,62,60);">Status</th>
                <th style="border-bottom: 2px solid rgb(63,62,60);">Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php for($x=0;$x<=30;$x++){ ?>
                <tr>
                  <td>Paket Umroh 1</td>
                  <td>20 Januari 2019</td>
                  <td>DITUTUP</td>
                  <td><button class="btn" style="background-color: rgb(252,189,120);border-radius: 90px;">Lihat Detail</button></td>
                </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Home 2 END-->
  <div class="row p-0 m-0 py-5 snap" style="background-color: rgb(252,247,243);width: 100%;height: 100vh;">
    <div class="container-fluid m-0 p-0">
      <div class="row" style="height: 80%">
        <div class="container py-3 my-5" style="background-color: rgb(252,189,120);height: 500px;">
          <h3 style="color:rgb(72,149,119)">Para Ustadz Pembimbing</h3>
          <div class="owl-carousel">
            <div class="pembimbing-container">
              <div class="pembimbing-img-holder"><img class="pembimbing-img" src="<?php echo base_url();?>assets/images/Test1.jpg"></div>
              <div class="pembimbing-card"><div class="pembimbing-text">Alvin 1</div></div>
            </div>
            <div class="pembimbing-container">
              <div class="pembimbing-img-holder"><img class="pembimbing-img" src="<?php echo base_url();?>assets/images/Test1.jpg"></div>
              <div class="pembimbing-card"><div class="pembimbing-text">Alvin 2</div></div>
            </div>
            <div class="pembimbing-container">
              <div class="pembimbing-img-holder"><img class="pembimbing-img" src="<?php echo base_url();?>assets/images/Test1.jpg"></div>
              <div class="pembimbing-card"><div class="pembimbing-text">Alvin 3</div></div>
            </div>
            <div class="pembimbing-container">
              <div class="pembimbing-img-holder"><img class="pembimbing-img" src="<?php echo base_url();?>assets/images/Test1.jpg"></div>
              <div class="pembimbing-card"><div class="pembimbing-text">Alvin 4</div></div>
            </div>
            <div class="pembimbing-container">
              <div class="pembimbing-img-holder"><img class="pembimbing-img" src="<?php echo base_url();?>assets/images/Test1.jpg"></div>
              <div class="pembimbing-card"><div class="pembimbing-text">Alvin 5</div></div>
            </div>
          </div>
        </div>
      </div>
      <?php $this->load->view('templates/footer'); ?>
    </div>
  </div>
  <!-- Home 3 END-->
</div>
</body>

<!--GANTI SESUAI PAGE (beranda,haji,umroh,galeri)-->
<script>
$(document).ready(function() {
  $('#table').DataTable({
    "lengthMenu": [[5], [5]],
    lengthChange:false
  });
});
$("#beranda").removeClass("h-passive");

$("#beranda").addClass("h-active");
</script>


<!--SCROLLIFY-->
<script>
$.scrollify({
  section : ".snap",
  interstitialSection : "",
  easing: "easeOutExpo",
  scrollSpeed: 1100,
  offset : 0,
  scrollbars: false,
  standardScrollElements: "",
  setHeights: true,
  overflowScroll: true,
  updateHash: true,
  touchScroll:true,
  before:function() {},
  after:function() {},
  afterResize:function() {},
  afterRender:function() {}
});
</script>


<!--AOS FADE-->
<script>
AOS.init();
</script>


<!--OWL CAROUSEL-->
<script>
  var owl = $('.owl-carousel');
  owl.owlCarousel({
      loop:true,
      nav:false,
      margin:10,
      autoWidth:true,
      autoplay:false,
      autoplayTimeout: 3500,
      autoplayHoverPause:true
  })
  owl.on('mousewheel', '.owl-stage', function(e){
      if (e.deltaY>0) {
          //owl.trigger('next.owl');
      } else {
          //owl.trigger('prev.owl');
      }
      //e.preventDefault();
  });
</script>
