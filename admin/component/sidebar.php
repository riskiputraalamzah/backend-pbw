    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/admin/">

                    <span>Home</span>
                </a>
            </li>
            <?php if ($_SESSION['data']['username'] == 'danda') : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin/profile.php">

                        <span>Profile</span>
                    </a>
                </li>

            <?php endif; ?>
            <?php if ($_SESSION['data']['username'] == 'putra') : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin/berita.php">

                        <span>Berita</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($_SESSION['data']['username'] == 'danil') : ?>
                <li class="nav-item">

                    <a class="nav-link collapsed" href="/admin/galeri.php">

                        <span>Galeri</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($_SESSION['data']['username'] == 'farhan') : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin/kontak.php">

                        <span>Kontak</span>
                    </a>
                </li>
            <?php endif; ?>

        </ul>

    </aside><!-- End Sidebar-->