<?php session_start();
include('./component/header.php') ?>
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Portal Berita</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Berita</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Event List Section ======= -->
  <section id="event-list" class="event-list overflow-hidden">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
          <div class="card shadow">
            <div class="card-img">
              <img class="img-thumbnail" src="/assets/hero-content/1.jpg" alt="..." />
            </div>
            <div class="card-body shadow-none">
              <h5 class="card-title">Kunjugan Presiden Joko Widodo</h5>
              <p class="fst-italic text-center">2022-09-26</p>
              <p class="card-text">
                Pada 26 September 2022, Presiden Republik Indonesia, Joko
                Widodo, melaksanakan kunjungan resmi ke lokasi
                penanggulangan bencana di lokasi. Kunjungan ini dilakukan
                sebagai respons atas kejadian bencana jenis bencana yang
                telah melanda wilayah tersebut pada tanggal bencana
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Event List Section -->
</main>
<?php include('./component/footer.php') ?>