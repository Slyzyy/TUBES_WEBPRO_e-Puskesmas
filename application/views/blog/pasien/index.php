<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>epuskesmas - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
      href="<?= base_url('./assets/vendor/fontawesome-free/css/all.min.css') ?>"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="<?= base_url('./assets/css/sb-admin-2.min.css" rel="stylesheet') ?> "/>
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15"></div>
          <div class="sidebar-brand-text mx-3">epuskesmas Dashboard</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_dashboard/index") ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Halaman</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_blog/index") ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Blog</span></a
          >
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_chat/index") ?>">
            <i class="fas fa-fw fa-comment-medical"></i>
            <span>Chat</span></a
          >
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_pembelianObat/index") ?>">
            <i class="fas fa-fw fa-capsules"></i>
            <span>Beli Obat</span></a
          >
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("pembayaran/index") ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Cart</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    ><?= $pasien['nama'];?></span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="<?= base_url("./assets/other/bocilkematian.jpg") ?>"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="<?= base_url('login/logout');?>"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
          <div class="container">
            <div class="content-1">
              <div class="row align-items-start">
                <div class="col-md-9">
                  <div class="blog-1 mx-3 shadow-lg p-4 mb-5 bg-body rounded">
                    <h2>Masalah Obat Sirup Untuk Anak!</h2>
                    <br />
                    <br />
                    <p>
                        Menteri Kesehatan Budi Gunadi Sadikin mengungkapkan kenapa obat
                        sirup yang dikonsumsi anak-anak menjadi bermasalah saat ini.
                        Padahal, obat sirup sudah sejak lama dikonsumsi kepada anak-anak
                        pada saat mengalami sakit. <br />
                        <br />
                        Menkes meyatakan dengan tegas, bahwa ia sudah menanyakan hal ini
                        kepada para ahli, kenapa obat sirup ini menjadi penyebab
                        impurities atau pencemaran yang mengakibatkan anak-anak
                        mengalami gangguan ginjal akut progresif atipikal (GGAPA).
                        <br />
                        <br />
                        "Paling besar penyebabnya karena bahan baku. jadi kalau kita
                        ingin lihat kenapa sekarang begini dan dulu tidak, kita sudah
                        berkoordinasi dengan BPOM untuk melihat apakah ada perubahan
                        dari jenis tipe atau juga asal dari bahan bakunya," ungkap
                        Menkes Budi saat Konfrensi Pers, di Istana Bogor, Senin
                        (24/10/2022). <br />
                        <br />
                        Budi mengaku bahwa dirinya suda memiliki data-data terkait
                        masalah bahan baku itu, baik dari pergeseran negara-negara
                        importir pembeli bahan baku tersebut. "Ini memang sangat
                        bergantung terhadap bahan bakunya," tandas Budi. <br />
                        <br />
                        Tercatat sampai pada Senin (24/10/2022) angka kematian anak-anak
                        atas gangguan ginjal akut telah mencapai 245 kasus di 26
                        provinsi, dengan angka kematian di atas 57%. "Fatality rate atau
                        yang meninggal persentasenya, dari jumlah kasus 245 ini cukup
                        tinggi, yaitu 141 atau 57,6%," ujarnya. <br /><br />
                        Delapan provinsi yang berkontribusi terhadap 80% kasus adalah
                        DKI Jakarta, Jawa Barat, Aceh, Jawa Timur, Sumatra Barat, Bali,
                        Banten, dan Sumatra Utara. <br />
                        <br />
                        Angka kematian akibat gagal ginjal akut terus menunjukkan
                        kenaikan yang signifikan. Pada Jumat (21/10/2022) lalu, jumlah
                        kematian yang tercatat baru 133 pasien dengan fatality rate 55%.
                        <br />
                        <br />
                        Menurut Menkes, pihaknya mencatat bahwa lonjakan kasus gagal
                        ginjal akut mulai terjadi pada Agustus 2022. Sebelum itu, angka
                        kematiannya di bawah 5 kasus per bulan. <br />
                        <br />
                        Penyakit gagal ginjal akut ini umumnya menyerang balita di bawah
                        5 tahun. Sejauh ini diketahui bahwa penyebab penyakit tersebut
                        adalah cemaran zat berbahaya dalam obat yang dikonsumsi
                        anak-anak. "Prioritas dari Presiden saat ini adalah seluruh
                        masyarakat dilindungi dari obat-obatan yang ada."
                      </p>
                    </div>
                    <div class="blog-2 mx-3 shadow-lg p-4 mb-5 bg-body rounded">
                      <h2>Jam-Jam Aktif Organ Tubuh Manusia</h2>
                      <br />
                      <br />
                      <p>
                        Pergantian siklus mendefinisikan bioritme dasar tubuh kita
                        mengalami perubahan keadaan terjaga saat aktif dan keadaan
                        tertidur, ketika tubuh kita berhenti. <br />
                        <br />
                        Hormon yang mengirimkan sinyal ke tubuh kita untuk tidur disebut
                        melatonin dan diproduksi pada malam hari.
                        <br />
                        <br />
                        Bioritme juga mengontrol sekresi hormonal, mengatur suhu tubuh
                        dan tekanan darah, berdampak pada suasana hati kita, merangsang
                        serta meredam nafsu makan seseorang untuk berbagai aktivitas.
                        Ini memiliki dampak signifikan pada aktivitas organ dalam.
                        <br />
                        <br />
                        Setiap organ dalam tubuh kita memiliki periode waktu khusus
                        sekitar 2 jam pada hari tertentu di mana ia bekerja paling
                        efisien. <br />
                        <br />
                        Jika kamu menderita penyakit yang berhubungan dengan organ
                        individu, gejala yang bersangkutan akan terlihat paling jelas
                        pada waktu puncak organ tersebut. <br />
                        <br />
                        Hal ini menjelaskan mengapa sebagian besar serangan jantung
                        terjadi sebelum tengah hari, karena jantung paling aktif pada
                        waktu itu. Demikian pula, orang dengan masalah kandung empedu
                        merasakan gejalanya sekitar tengah malam ketika aktivitas organ
                        ini mencapai puncaknya. <br />
                        <br />
                        Tentunya kamu telah memperhatikan bahwa bahkan flu biasa atau
                        pilek memanifestasikan dirinya secara berbeda pada waktu yang
                        berbeda dalam sehari. Perbedaan ini dapat dijelaskan dengan
                        mekanisme jam biologis. <br />
                        <br />
                        Mari kita lihat lebih lanjut jam-jam puncak masing-masing organ
                        sehingga kita tidak terlalu memaksakannya ketika mereka harus
                        beristirahat. Tubuh kita akan berterima kasih kepada kita untuk
                        hal itu.
                      </p>
                    </div>
                  </div>
                  <div class="col-md-3 shadow-lg p-4 mb-5 bg-body rounded">
                    <div class="sidebar mx-3">
                      <h2>Kenalan dulu yuk!</h2>
                      <br />
                      <br />
                      <div class="card" style="width: 16rem">
                        <img
                          src="<?= base_url("./assets/other/spesialis anak.png") ?>"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Dr. Nora</h5>
                          <p class="card-text" style="text-align: left">
                            Dokter spesialis anak lulusan S2 ITB yang berlokasi di
                            Bandung
                          </p>
                          <a href="#" class="btn btn-primary">Mulai konsultasi</a>
                        </div>
                      </div>
                    </div>
                    <div class="sidebar mx-3">
                      <br />
                      <br />
                      <div class="card" style="width: 16rem">
                        <img
                          src="<?= base_url("./assets/other/spesialis tht.png") ?>"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Dr. Rika</h5>
                          <p class="card-text" style="text-align: left">
                            Dokter spesialis THT lulusan S2 UGM yang berlokasi di
                            Bandung
                          </p>
                          <a href="#" class="btn btn-primary">Mulai konsultasi</a>
                        </div>
                      </div>
                    </div>
                    <div class="sidebar mx-3">
                      <br />
                      <br />
                      <div class="card" style="width: 16rem">
                        <img
                          src="<?= base_url("./assets/other/dokter gigi.png") ?>"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Dr. Permata</h5>
                          <p class="card-text" style="text-align: left">
                            Dokter gigi lulusan S2 ITB yang berlokasi di Bandung
                          </p>
                          <a href="#" class="btn btn-primary">Mulai konsultasi</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Begin Page Content --> <!-- Konten utama mulai dari sini -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; 2022 E - Puskesmas. Designed By RPP</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="<?php echo base_url('login/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('./assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('./assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('./assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('./assets/css/sb-admin-2.min.css') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('./assets/vendor/chart.js/Chart.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('./assets/js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('./assets/js/demo/chart-pie-demo.js') ?>"></script>
  </body>
</html>
