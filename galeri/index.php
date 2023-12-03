<?php session_start();
include('./../component/header.php') ?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Gallery</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Gallery</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="gallery-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-palestine">Palestine</li>
                        <li data-filter=".filter-holiday">holiday</li>
                        <li data-filter=".filter-justice">justice</li>
                    </ul>
                </div>
            </div>

            <div class="row gallery-container">
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-palestine">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/4.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/4.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-palestine">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/5.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/5.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-palestine">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/2.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/2.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-holiday">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/7.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/7.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-justice">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/1.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/1.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-justice">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/3.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/3.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-justice">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/6.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/6.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-justice">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/8.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/8.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 gallery-item filter-justice">
                    <div class="gallery-wrap shadow">
                        <img src="/assets/hero-content/9.jpg" class="img-fluid img-thumbnail" alt="judul" />
                        <div class="gallery-info">
                            <h4>judul</h4>
                            <p>deskripsi</p>
                            <div class="gallery-links">
                                <a href="/assets/hero-content/9.jpg" class="glightbox" title="judul"><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->
</main>
<?php include('./../component/footer.php') ?>