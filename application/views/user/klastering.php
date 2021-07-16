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

                <!-- Form -->
                <section>
                    <h2 class="text-center">Masukan Jumlah Kluster</h2>
                    <form action="<?= base_url(); ?>hasil" method="POST" name="form1">
                        <div class="row gtr-uniform">
                            <div class="col-8 col-12-xsmall">
                                <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"" name=" jumklas" />

                            </div>
                            <div class="col-4 col-12-xsmall">
                                <ul class="actions">
                                    <li><input type="submit" name="submit" value="Submit" class="button primary" /></li>
                                    <!-- <li><input type="reset" value="Reset" /></li> -->
                                    <li><a href="<?=base_url(); ?>" class="button">Kembali</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>


            </div>
        </section>


    </div>