<!-- Wrapper -->
<div id="wrapper">
    <style type='text/css'>
        * {
            font-family: verdana, arial, sans-serif;
            font-size: 12pt;
        }

        h1 {
            font-size: 18pt;
        }

        h2 {
            font-size: 14pt;
            line-height: 16pt;
        }

        fieldset {
            margin: 5px;
            padding: 5px;
            /* background-color: #f5f5f5; */
        }

        legend {
            font-weight: bold;
            border-radius: 5px;
            width: 200px;
            padding: 5px;
            background-color: #0084b4;
            color: #ffffff;
        }

        p {
            text-align: center;
            margin: 0;
        }

        .inptxt {
            text-align: right;
        }

        .member {
            background-color: #cc3333;
            font-weight: bold;
            color: #ffffff;
        }
    </style>

    <!-- Header -->
    <header id="header">
        <h1>Hasil Clustering K - Means</h1>
    </header>

    <!-- Main -->
    <div id="main">

        <!-- Content -->
        <section id="content" class="main">
            <div class="col-md">

                <!-- Form -->
                <section>
                    <fieldset>
                        <legend>
                            <p>Parameter</p>
                        </legend>
                        Jumlah Cluster = <?php echo $jumlah_centroid; ?><br>
                        Jumlah iterasi = <?php echo $jumlah_iterasi; ?><br>
                    </fieldset>
                    <fieldset>
                        <legend>
                            <p>Centroid Akhir</p>
                        </legend>
                        <?php foreach ($centroid as $row_m_centroid => $m_centroid) : ?>
                            <?= "<div class=\"mb-3\">" ?>
                            <?= "<label style=\" padding-top: 25px;\" class=\"form-label\">Centroid " . ($row_m_centroid + 1) . "</label>" ?>
                            <?= "<input type=\"text\" class=\"form-control form-control-sm\" value=\"" . implode(", ", $m_centroid) . "\" readonly>" ?>
                            <?= "</div>" ?>
                        <?php endforeach ?>
                    </fieldset>
                    <fieldset>
                        <legend>
                            <p>Hasil</p>
                        </legend>
                        <table border="1">
                            <tr>
                                <th>Cluster</th>
                                <th>Anggota</th>
                            </tr>
                            <?php for ($i = 0; $i < $jumlah_centroid; $i++) { ?>
                                <tr>
                                    <td style="text-align: center;">
                                        <b><?php echo $i + 1; ?></b>
                                    </td>
                                    <td>
                                        <b><?php
                                            for ($j = 0; $j < count($multi_cluster[$i]); $j++) {
                                                $k = $multi_cluster[$i][$j];
                                                echo implode($Spesies[$k]);
                                                echo " | ";
                                            } ?></b>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </fieldset>
                </section>
            </div>
            <a href="<?= base_url("perhitungan"); ?>" class="button primary">Kembali</a>
        </section>
    </div>
</div>