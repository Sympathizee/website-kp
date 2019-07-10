<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php $this->load->view('templates/header'); ?>
  <?php $this->load->view('templates/navbar'); ?>
  <title>UMROH</title>
</head>
<style media="screen">
body {
  padding-top: 58px;
}

h3 {
  font-style: italic;
  color:rgb(72,149,119);
}

.jadwal {
  background-color: rgb(240,230,222);
  text-align: center;
}

ul.pagination {
  justify-content: center!important;
}

.pagination .page-item.active .page-link {
  background-color: #fff;
  color: gray;
}

.pagination .page-item .page-link {
  background-color: Gainsboro;
  color: Gray;
}

.pagination .previous.disabled .page-link {
  background-color: #fff;
  color: Gray;
}

.pagination .previous .page-link {
  background-color: #fff;
  color: Green;
}

.pagination .next .page-link {
  background-color: #fff;
  color: Green;
}

.page-item.active .page-link {
  border-color: Green;
}

div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
  background-color: #fff;
  color: gray;
}

#table-jadwal {
  padding: 0 10px;
  background-color: #fff;
}

tr, th {
  padding: 10px 0!important;
}

td {
  padding: 10px 0!important;
  vertical-align: middle!important;
}
</style>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="container">
          <div class="poster pt-4 mb-4">
            <img style="width:100%;" src="<?=base_url('assets/images/Poster Umroh.png')?>" alt="poster-umroh">
          </div>

          <div class="row">
            <div class="col">
              <div class="jadwal mb-4">
                <h3 class="py-3">Jadwal Keberangkatan Umroh 2019</h3>
                <div class="text-center mr-3 ml-3">
                  <table class="table table-sm table-hover" id="table-jadwal" style="width: 100%;">
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
                          <td><button class="btn btn-sm" style="background-color: rgb(252,189,120);border-radius: 90px;">Lihat Detail</button></td>
                        </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="syarat-daftar mt-3 mb-5">
            <div class="row mr-3 ml-3 mb-5">
              <div class="col-10">
                <h3 style="display: inline;"><b>Persyaratan Pendaftaran</b></h3><br>
                Silahkan download file pdf persyaratan pendaftaran disamping untuk
                mengetahui persyaratan yang dibutuhkan.
              </div>
              <div class="col-2" style="display: inline;">
                <span class="fa fa-download fa-5x"></span>
              </div>
            </div>
            <div class="row mr-3 ml-3 mb-5">
              <div class="col-10">
                <h3 style="display: inline;"><b>Prosedur Vaksin</b></h3><br>
                Silahkan download file pdf prosedur vaksin disamping untuk mengetahui tahapan dan
                persyaratan yang dibutuhkan.
              </div>
              <div class="col-2" style="display: inline;">
                <span class="fa fa-download fa-5x"></span>
              </div>
            </div>
            <div class="row mr-3 ml-3">
              <div class="col-10">
                <h3 style="display: inline;"><b>Pendaftaran Paspor</b></h3><br>
                Silahkan download file pdf Pendaftaran Paspor disamping untuk mengetahui tahapan dan
                persyaratan yang dibutuhkan.
              </div>
              <div class="col-2" style="display: inline;">
                <span class="fa fa-download fa-5x"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
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
</script>
</html>
