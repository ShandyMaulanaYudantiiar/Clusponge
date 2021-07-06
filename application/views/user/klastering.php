<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1>Klastering K-Means</h1>
        <p>Ipsum dolor sit amet nullam</p>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Content -->
        <section id="content" class="main">
        <div class="col-md">

            <h4>Tentukan Fakta yang ada :</h4>
            <form action="<?= base_url(); ?>Perhitungan/hasil" method="POST" name="form1">
                <table align = "center">
                    <tbody>
                        <tr>
                            <th><label>Masukkan Jumalah Kluster</label><input type="text" name="jumklas"></th>
                        </tr>
                        <tr>
                            <th><input type="submit" name="submit" value="submit" /></th>
                        </tr>
                    </tbody>
                </table>

            </form>

        </div>
        </section>

    </div>