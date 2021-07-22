<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1>Klastering K-Means</h1>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Content -->
        <section id="content" class="main">
            <div class="col-md">

                <!-- Form -->
                <section>
                    <h2 class="text-center">Masukkan Jumlah Klaster</h2>
                    <form action="<?= base_url(); ?>hasil" method="POST" name="form1">
                        <div class="row gtr-uniform">
                            <div class="col-8 col-12-xsmall">
                                <input type="number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name=" jumklas" min="1" max="76" required/>
                                <p class="help-block" style="color: red;">* Harap tidak melebihi batas 76 klaster.</p>
                            </div>
                            <div class="col-4 col-12-xsmall">
                                <ul class="actions">
                                    <li><input type="submit" name="submit" value="Submit" class="button primary" /></li>
                                    <!-- <li><input type="reset" value="Reset" /></li> -->
                                    <li><a href="<?= base_url(); ?>" class="button">Kembali</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>


            </div>
        </section>


    </div>