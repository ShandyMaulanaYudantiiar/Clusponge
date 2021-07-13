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
                    <div class="box-body">
                        <form>
                            <div class="container p-5">
                                <div class="ps-2">
                                    <h1 style="font-weight: bold;letter-spacing: 10px;">CLUSTERING</h1>
                                    <p class="mb-5">pengelompokan nilai siswa menggunakan metode k-means</p>
                                </div>
                                <div class="row">
                                    <div class="col col-md-3 px-4">
                                        <h5><strong>DETAIL DATA</strong></h5>
                                        <div class="mb-3">
                                            <label for="controlInput1" class="form-label">Jumlah Cluster</label>
                                            <input id="controlInput1" type="text" class="form-control form-control-sm" value="<?=$jumlah_centroid?>" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="controlInput2" class="form-label">Jumlah Siswa</label>
                                            <input id="controlInput2" type="text" class="form-control form-control-sm" value="<?=$jumlah_data?>" readonly>
                                        </div>

                                        <?php foreach($centroid as $row_m_centroid => $m_centroid):?>
                                            <?="<div class=\"mb-3\">"?>
                                            <?="<label \" class=\"form-label\">Centroid ".($row_m_centroid+1)."</label>"?>
                                            <?="<input \" type=\"text\" class=\"form-control form-control-sm\" value=\"".implode(", ", $m_centroid)."\" readonly>"?>
                                            <?="</div>"?>
                                        <?php endforeach?>
                                    </div>


                                    <div class="col col-12 col-md-9 px-4">
                                        <h5><strong>CENTROID TERDEKAT</strong></H5>

                                        <table class="table table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <?php for($i = 0; $i<$jumlah_centroid; $i++):?>
                                                        <?="<th scope=\"col\" class=\"text-center\">Cluster " .($i+1). "</th>"?>
                                                    <?php endfor;?>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php foreach($cluster as $row_m_cluster=>$m_cluster):?>
                                                    <?="<tr>"?>
                                                    <?="<th scope=\"row\">".($Spesies[$row_m_cluster])."</th>"?>
                                                    <?php for($i = 0; $i< $jumlah_centroid; $i++):?>
                                                        <?php $isNearest = $cluster[$row_m_cluster]==$i ? "Yes" : "";?>
                                                        <?="<td scope=\"col\" class=\"text-center\">$isNearest</td>"?>
                                                    <?php endfor;?>
                                                    <?="</tr>"?>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
                                        <button class="btn btn-primary float-end"1 type="submit">urutkan data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                        <?php for($j=0; $j<$jumlah_centroid; $j++)  { ?>
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