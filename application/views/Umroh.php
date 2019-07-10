<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php $this->load->view('templates/header'); ?>
  <?php $this->load->view('templates/navbar'); ?>
  <link rel="stylesheet" href="<?=base_url('assets/css/umroh.css')?>">
  <title>UMROH</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="container">
          <div class="poster pt-4 mb-4">
            <img class="img-poster" src="<?=base_url('assets/images/Poster Umroh.png')?>" alt="poster-umroh">
          </div>
          <!-- ///////////////////////////// SECTION JADWAL KEBERANGKATAN ////////////////////////////-->
          <div class="row">
            <div class="col">
              <h3 class="title">Jadwal Keberangkatan Umroh 2019</h3>
              <div class="mb-4 py-3">
                <div class="text-center">
                  <table class="table table-sm table-hover" id="table-jadwal">
                    <thead>
                      <tr>
                        <th>Paket Umroh</th>
                        <th>Tanggal Keberangkatan</th>
                        <th>Status</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for($x=0;$x<=30;$x++){ ?>
                        <tr>
                          <td>Paket Umroh 1</td>
                          <td>20 Januari 2019</td>
                          <td>DITUTUP</td>
                          <td><button class="btn btn-sm">Lihat Detail</button></td>
                        </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- ///////////////////////////// SECTION SYARAT PENDAFTARAN ////////////////////////////-->
          <div class="syarat-daftar mt-3 mb-5">
            <h3 class="title">SYARAT PENDAFTARAN</h3>
            <div class="row mr-3 ml-3 mb-5">
              <div class="col-10">
                <h4 class="syarat"><b>Persyaratan Pendaftaran</b></h3><br>
                  Silahkan download file pdf persyaratan pendaftaran disamping untuk
                  mengetahui persyaratan yang dibutuhkan.
                </div>
                <div class="col-2" style="display: inline;">
                  <span class="fa fa-download fa-5x"></span>
                </div>
              </div>
              <div class="row mr-3 ml-3 mb-5">
                <div class="col-10">
                  <h4 class="syarat"><b>Prosedur Vaksin</b></h3><br>
                    Silahkan download file pdf prosedur vaksin disamping untuk mengetahui tahapan dan
                    persyaratan yang dibutuhkan.
                  </div>
                  <div class="col-2" style="display: inline;">
                    <span class="fa fa-download fa-5x"></span>
                  </div>
                </div>
                <div class="row mr-3 ml-3">
                  <div class="col-10">
                    <h4 class="syarat"><b>Pendaftaran Paspor</b></h3><br>
                      Silahkan download file pdf Pendaftaran Paspor disamping untuk mengetahui tahapan dan
                      persyaratan yang dibutuhkan.
                    </div>
                    <div class="col-2" style="display: inline;">
                      <span class="fa fa-download fa-5x"></span>
                    </div>
                  </div>
                </div>
                <!-- ///////////////////////////// SECTION USTADZ PEMBIMBING ////////////////////////////-->
                <section class="UMBING">
                        <div class="col py-3" style="background-color: rgb(252,189,120);">
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
                </section>
                <!-- ///////////////////////////// SECTION TESTIMONIAL ////////////////////////////-->
                <section class="testi">
                  <div class="container">
                    <h3 class="title">TESTIMONIAL</h3>
                    <div class="row mt-0 pt-0">
                      <div class="col-sm-12 col-md-12 col-lg-6 testimonial">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                          in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                          Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <img src="<?=base_url("/assets/images/Test1.jpg")?>" alt="">
                        <p class="user-details"><b>Muhammad Alvin</b><br>Founder - Online Lelang</p>
                      </div>
                      <div class="col-sm-12 col-md-12 col-lg-6 testimonial">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                          in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                          Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <img src="<?=base_url("/assets/images/Test1.jpg")?>" alt="">
                        <p class="user-details"><b>Muhammad Alvin</b><br>Founder - Online Lelang</p>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </body>
      <?php $this->load->view('templates/footer'); ?>
      <script type="text/javascript">
      $(document).ready(function() {
        $('#table-jadwal').DataTable({
          "lengthMenu": [[5], [5]],
          "oLanguage": {
            "oPaginate": {
              "sNext": '<i class="fa fa-chevron-right" ></i>',
              "sPrevious": '<i class="fa fa-chevron-left" ></i>'
            }
          },
          "dom": 'rt<"row view-pager"<"col-sm-12"<"text-center py-3"p>>>',
          "ordering": false
        });
      });
      $("#umroh").removeClass("h-passive");
      $("#umroh").addClass("h-active");
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
</html>
