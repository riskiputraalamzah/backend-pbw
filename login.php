<?php
require('./functions/is_logged.php');
include('./component/header.php') ?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Login</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Login</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Event List Section ======= -->
    <section id="event-list" class="event-list overflow-hidden">
        <div class="container">

            <!-- cek pesan notifikasi -->
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    <strong>Login Gagal</strong> , username dan password salah.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ';
                } else if ($_GET['pesan'] == "logout") {
                    echo '
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    <strong>Logout</strong> , Anda telah berhasil keluar.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ';
                } else if ($_GET['pesan'] == "belum_login") {
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    <strong>LOGIN DULU</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ';
                }
            }
            ?>




            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <form action="./functions/cek_login.php" method="post">
                        <div class="mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="username" autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id="password" placeholder="password" autocomplete="off">
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-danger me-2">Reset</button>
                                <button type="submit" class="btn btn-primary ">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Event List Section -->
</main>
<?php include('./component/footer.php') ?>