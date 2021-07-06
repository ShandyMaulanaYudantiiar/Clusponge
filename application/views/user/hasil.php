<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <h1>Klastering K-Means</h1>
        <p>Hasil Perhitungan</p>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Content -->
        <!-- <section id="content" class="main">

        <aside class="right-side"> -->
            <!-- Content Header -->
            <!-- <h1>

                Data Tables
            
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        Dashboard
                    </a>
                </li>
                <li><a href="#"> Algoritma K-Means </a></li>
                <li class="active"> Learning Data </li>
            </ol>
        </aside>

        </section> -->

        <section class="content">
            <div class="row">
            <div class="col-xs-12">
                <div class="box">
                
                    <div class="box-header">
                        <h3 class="box-title">Clustering K-Means</h3>
                    </div>
                    <!-- Box Header -->
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <th>Centroid</th>
                            <th>Jarak</th>
                            <th>Anggota</th>
                        </thead>

                        <tbody>

                        <?php
                            for ($j=0; $j<$jumlah; $j++) {?>
                                <tr>
                                    <td><?php echo $datahasil[$j]['centroid'];?></td>
                                    <td><?php echo $datahasil[$j]['jarak'];?></td>
                                    <td><?php echo $datahasil[$j]['kluster'];?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                    
                    <div class="box-body table-responsive">
                        <h1></h1>
                    </div>
                    <!-- Box-body -->
            
                </div>
                <!-- Box -->

                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <th>Cluster</th>
                        <th>Centroid</th>
                    </thead>
                    <tbody>
                        <?php for($j=0; $j<$jumklas; $j++)  { ?>
                            <tr>
                            <td><?php echo $j?></td>
                            <td><?php echo $centroid[$j]?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            </div>
        </section>

    </div>