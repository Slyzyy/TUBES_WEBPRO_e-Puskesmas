<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/style.css') ?>" />
    <title>e - Puskesmas - RPP</title>
  </head>
  <body>
    <header class="home">
      <nav>
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo">RPP</div>
        <div class="menu">
          <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="<?php echo base_url('dashboard/index') ?>">Blog</a></li>
            <li><a href="<?php echo base_url('dashboard/index') ?>">Chat</a></li>
            <li><a href="<?php echo base_url('dashboard/index') ?>">Pembelian Obat</a></li>
            <li><a href="<?php echo base_url('dashboard/index') ?>">Pembayaran</a></li>
            <li><a href="<?php echo base_url('login/index') ?>">Login</a></li>
          </ul>
        </div>
      </nav>
      <div class="title-content">
        <h2 class="judul">e - Puskesmas</h2>
        <p class="isi">
          Konsultasi puskesmas berbasis Mobile Apps, kini mudah hanya dengan
          <br />
          aplikasi e - Puskesmas
        </p>
      </div>
    </header>
    <div class="content-1">
      <h2 class="text-center font-weight-bold">
        Halo, Selamat datang di e - Puskesmas
      </h2>
      <div class="container mt-5">
        <div class="row p-3 text-center shadow p-4 mb-5 bg-white rounded">
          <div class="col-md-4">
            <h4><b>Konsultasi dengan dokter</b></h4>
            <img class="img-2" src="./assets/other/mulai_konsultasi.png" alt="" />
            <h6 class="mt-5">
              Pilih dokter spesialis sesuai keluhan <br />
              dan kebutuhan pasien
            </h6>
            <a
              href="#content-2"
              type="button"
              class="mb-5 btn btn-primary mt-4"
            >
              Mulai konsultasi
            </a>
          </div>
          <div class="col-md-4">
            <h4><b>Pesan obat racikan</b></h4>
            <img class="img-2" src="./assets/other/pesan_obat_racikan.png" alt="" />
            <h6 class="mt-5">
              Pilih obat racikan yang sudah di tetapkan <br />
              oleh dokter kami
            </h6>
            <a
              href="<?php echo base_url('pembelianObat/index') ?>"
              type="button"
              class="mb-5 btn btn-primary mt-4"
            >
              Pesan obat
            </a>
          </div>
          <div class="col-md-4">
            <h4><b>Chat dengan dokter</b></h4>
            <img class="img-2" src="./assets/other/chat_dengan_dokter.png" alt="" />
            <h6 class="mt-5">
              Kirim pesan melalui aplikasi ke dokter <br />
              yang sudah di jadwalkan
            </h6>
            <button type="button" class="mb-5 btn btn-primary mt-4">
              Mulai chat
            </button>
          </div>
        </div>
      </div>
    </div>
    <div id="content-2" class="content-2">
      <div class="container shadow p-4 mb-5 bg-white rounded">
        <div class="row p-3">
          <div class="col-md-6 text-center">
            <h2 class="font-weight-bold mb-5">Cari Dokter Spesialis</h2>
            <img class="img" src="./assets/other/appointment.png" alt="" />
            <p style="margin-top: 40px; font-size: 14px">
              *Pilih kategori yang tersedia sesuai kondisimu
            </p>
          </div>
          <div class="col-md-6">
            <div class="mh-100">
              <div class="shadow p-4 mb-5 bg-white rounded text-left">
                <img class="img-1" src="./assets/other/spesialis anak.png" alt="" />
                <h4 class="font-weight-bold">Dokter Spesialis Anak</h4>
                <p class="font-weight-light">Dr. Nora</p>
                <button type="button" class="btn btn-primary btn-sm">
                  Konsultasi
                </button>
              </div>
              <div class="shadow p-4 mb-5 bg-white rounded text-left">
                <img class="img-1" src="./assets/other/spesialis tht.png" alt="" />
                <h4 class="font-weight-bold">Dokter Spesialis THT</h4>
                <p class="font-weight-light">Dr. Rika</p>
                <button type="button" class="btn btn-primary btn-sm">
                  Konsultasi
                </button>
              </div>
              <div class="shadow p-4 mb-2 bg-white rounded text-left">
                <img class="img-1" src="./assets/other/dokter gigi.png" alt="" />
                <h4 class="font-weight-bold">Dokter Gigi</h4>
                <p class="font-weight-light">Dr. Permata</p>
                <button type="button" class="btn btn-primary btn-sm">
                  Konsultasi
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-content">
        <h3>e - Puskesmas - RPP</h3>
        <p>
          Bellamy Insan Kamil 1302200086 <br />
          Daffa Aqilah 1302200097 <br />
          Deva Raja 1302204058 <br />
          Faza Alexander Riawan 1302204062 <br />
          Muhammad Auzan Zaky Eryana 1302204071 <br />
          Yanuar Firdaus 1302204001
        </p>
      </div>
      <div class="footer-bottom">
        <p>copyright &copy;2022 e - Puskesmas. designed by RPP.</p>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.6.1.slim.js"
      integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk="
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".menu-icon").on("click", function () {
          $("nav ul").toggleClass("showing");
        });
      });

      $(window).on("scroll", function () {
        if ($(window).scrollTop()) {
          $("nav").addClass("black");
        } else {
          $("nav").removeClass("black");
        }
      });
    </script>
  </body>
</html>