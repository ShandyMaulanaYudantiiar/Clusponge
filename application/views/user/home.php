<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1>Clustering for Sponge Dataset</h1>
        <p>Klastering dataset terumbu karang dengan metode K-means klastering<br />
        <?= $this->session->flashdata('pesan'); ?>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="#intro" class="active">Introduction</a></li>
            <li><a href="#klastering">Klastering</a></li>
            <li><a href="#tentangKami">Tentang Kami</a></li>
            <li><a href="Admin/auth">Login</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Introduction -->
        <section id="intro" class="main">
            <div class="spotlight">
                <div class="content">
                    <header class="major">
                        <h2>Spons Laut</h2>
                    </header>
                    <p>Spons laut adalah anggota dari filum Porifera. Ini adalah hewan sederhana dengan banyak sel,
                        tetapi tidak memiliki mulut, otot, jantung atau otak. Ia tidak dapat berpindah dari satu tempat
                        ke tempat lain seperti yang dapat dilakukan kebanyakan hewan. Spons Laut adalah hewan yang tumbuh
                        di satu tempat seperti kebanyakan tumbuhan. Namun demikian, spons cukup berhasil.</p>
                    <!-- <ul class="actions">
                            <li><a href="generic.html" class="button">Learn More</a></li>
                        </ul> -->
                </div>
                <span class="image"><img src="assets/user/images/pic01.jpg" alt="" /></span>
            </div>
        </section>

        <!-- Klastering -->
        <section id="klastering" class="main special">
            <header class="major">
                <h2>Klastering K-Means</h2>
                <p>K-Means Clustering adalah suatu metode penganalisaan data atau metode Data Mining
                    yang melakukan proses pemodelan tanpa supervisi (unsupervised) dan merupakan salah
                    satu metode yang melakukan pengelompokan data dengan sistem partisi.</p>
            </header>
            <footer class="major">
                <ul class="actions special">
                    <li><a href="perhitungan" class="button primary">Ayo Mulai</a></li>
                    <li><a href="https://drive.google.com/file/d/1hi3aKewtSdQa5YU03JyRmICQW4SMNjL5/view?usp=sharing" target="_blank" class="button">Pelajari</a></li>
                </ul>
            </footer>
        </section>

        <!-- Tentang Kami -->
        <section id="tentangKami" class="main special">
            <header class="major">
                <h2>Tentang Kami</h2>
                <p><b> Kelompok 30 - Program Studi Teknik Informatika, Jurusan Teknologi Informasi, Politeknik Negeri Jember.</b> <br>
                    <br>
                    Shandy Maulana Yudantiar (E41180463)<br>
                    Ridho Dwi Ramadhan (E41180382)<br>
                    Dimas Fajrul Falah (E41180458)<br>
                    Andrea Santana Adzani (E41180362)<br>
                </p>
            </header>
            <!-- <footer class="major">
                    <ul class="actions special">
                        <li><a href="generic.html" class="button primary">Get Started</a></li>
                        <li><a href="generic.html" class="button">Learn More</a></li>
                    </ul>
                </footer> -->
        </section>

    </div>