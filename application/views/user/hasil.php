<!DOCTYPE html>
<html>
    <head>
        <title>K-Mean Clustering - All cluster protoFCM</title>
        <style type='text/css'>
        * {font-family:verdana,arial,sans-serif;font-size:12pt;}
        h1{font-size:18pt;}
        h2{font-size:14pt;line-height:16pt;}
        fieldset{margin:5px;padding:5px;background-color:#f5f5f5;}
        legend {font-weight:bold;padding:5px;background-color:#0084b4;color:#ffffff;}
        .inptxt{text-align:right;}
        .member{background-color:#cc3333;font-weight:bold;color:#ffffff;}
        </style>
    </head>
    <body>
        <div id='container'>
        <fieldset>
            <legend>Parameter</legend>
            Jumlah Cluster =<?php echo $jumlah_centroid; ?><br>
            Jumlah iterasi =<?php echo $jumlah_iterasi; ?><br>
        </fieldset>
        <fieldset>
            <legend>Hasil</legend>
            <table border='1'>
            <thead>
                <tr>
                    <th>Centroid</th>
                    <th>Anggota</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < count($Spesies) ; $i++) { ?>
                <tr>
                    <?php echo "<td>$Spesies[$i]</td>";?>
                    <td>oi</td>
                </tr>
            <?php }?>
            </tbody>
            
            </table>
        </fieldset>


</div>