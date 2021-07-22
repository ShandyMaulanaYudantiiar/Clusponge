<!-- Header -->
<?php $this->load->view('admin/templates/header.php'); ?>
<!-- End of Header -->

<!-- Navbar -->
<?php $this->load->view('admin/templates/navbar.php'); ?>
<!-- End of Navbar -->

<!-- Sidebar -->
<?php $this->load->view('admin/templates/sidebar.php'); ?>
<!-- End of Sidebar -->

<div class="row">
    <ol class="breadcrumb">
        <li><a href="<?= base_url("admin/dashboard") ?>">
                <em class="fa fa-home"></em>
            </a></li>
        <li>Import Data</li>
    </ol>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Import Data</h1>
        <?php if (!empty($success_msg)) { ?>
            <div class="col-xs-12">
                <div class="alert alert-success"><?php echo $success_msg; ?></div>
            </div>
            <?php if (!empty($error_msg)) { ?>
                <div class="col-xs-12">
                    <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                </div>
            <?php } ?>
        <?php } ?>

    </div>
</div>
<!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="col-md-12 head">
                    <div class="float-right">
                        <a href="javascript:void(0);" class="btn btn-danger" onclick="formToggle('importFrm');"><i class="fa fa-plus"></i> Import dataset</a>
                    </div>
                </div>
            </div>
            <div class="panel-body" id="importFrm" style="display: none;">
                <div class="col-md-12">
                    <form action="<?= site_url('admin/importData/import'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload Dataset</label>
                            <input type="file" name="file">
                            <p class="help-block" style="color: red;">*Upload dataset berekstensi csv.</p>
                        </div>
                        <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
                        <!-- <a href="<?= site_url('admin/admin') ?>" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-reply"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                        <button type="submit" href="<?= site_url('admin/admin') ?>" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="text">Upload</span>
                        </button> -->
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>SPESIES</th>
                    <th>A.CAPAS_DEL_CORTEX</th>
                    <th>A.CAPA_INTERNA_DEL_CORTEX</th>
                    <th>A.CORTEX</th>
                    <th>A.CORTEX_FIBROSO</th>
                    <th>A.CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES</th>
                    <th>A.CUERPOS_EXTRANOS_EN_EL_CORTEX</th>
                    <th>A.GROSOR_DEL_CORTEX</th>
                    <th>A.HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX</th>
                    <th>A.TILOSTILOS_ADICIONALES_COANOSOMA</th>
                    <th>B.NUMERO_DE_TIPOS_DE_MEGASCLERAS</th>
                    <th>C.TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA</th>
                    <th>C.TIPO_ESPICULA_PRINCIPAL_ESTILO</th>
                    <th>C.TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS</th>
                    <th>C.TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO</th>
                    <th>C.TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA</th>
                    <th>C.TIPO_ESPICULA_PRINCIPAL_OXAS</th>
                    <th>C.TIPO_ESPICULA_PRINCIPAL_TILOSTILO</th>
                    <th>D.ESPICULA_PRINCIPAL_ESTILO</th>
                    <th>D.ESPICULA_PRINCIPAL_TILOSTILO</th>
                    <th>D.FORMA_BASE_TILOSTILO_PRINCIPAL</th>
                    <th>E.DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA</th>
                    <th>E.FORMA_BASE_TILOSTILO_ECTOSOMICO</th>
                    <th>E.FORMA_MEGASCLERA_ECTOSOMICA</th>
                    <th>E.TIPO_MEGASCLERA_ECTOSOMICA</th>
                    <th>F.TIPO_DE_EXOSTILO</th>
                    <th>G.FORMA_MEGASCLERA_INTERMEDIARIA</th>
                    <th>G.TIPO_MEGASCLERA_INTERMEDIARIA</th>
                    <th>H.LONGITUD_MEGASCLERAS</th>
                    <th>I.MICROSCLERAS</th>
                    <th>I.TIPO_MICROSCLERA</th>
                    <th>J.ASTER</th>
                    <th>J.DIAMETRO_ESFERASTER</th>
                    <th>J.TIPO_DE_ASTER</th>
                    <th>J.TIPO_DE_DIPLASTER</th>
                    <th>J.TIPO_DE_ESFERASTER</th>
                    <th>K.FORMA_FINAL</th>
                    <th>L.NUMERO_DE_PAPILAS</th>
                    <th>L.PAPILAS</th>
                    <th>M.COLOR</th>
                    <th>N.SUPERFICIE</th>
                    <th>O.DISPOSICION_ESPICULAR_ESQUELETO</th>
                    <th>P.ALOJA_CANGREJO_ERMITANO</th>
                    <th>P.PERFORANTE</th>
                    <th>P.PSEUDORAICES</th>
                    <th>P.SUSTRATO</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($dataset)) {
                    foreach ($dataset as $row) { ?>
                        <tr>
                            <td><?php echo $row['NO']; ?></td>
                            <td><?php echo $row['SPESIES']; ?></td>
                            <td><?php echo $row['A_CAPAS_DEL_CORTEX']; ?></td>
                            <td><?php echo $row['A_CAPA_INTERNA_DEL_CORTEX']; ?></td>
                            <td><?php echo $row['A_CORTEX']; ?></td>
                            <td><?php echo $row['A_CORTEX_FIBROSO']; ?></td>
                            <td><?php echo $row['A_CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES']; ?></td>
                            <td><?php echo $row['A_CUERPOS_EXTRANOS_EN_EL_CORTEX']; ?></td>
                            <td><?php echo $row['A_GROSOR_DEL_CORTEX']; ?></td>
                            <td><?php echo $row['A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX']; ?></td>
                            <td><?php echo $row['A_TILOSTILOS_ADICIONALES_COANOSOMA']; ?></td>
                            <td><?php echo $row['B_NUMERO_DE_TIPOS_DE_MEGASCLERAS']; ?></td>
                            <td><?php echo $row['C_TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA']; ?></td>
                            <td><?php echo $row['C_TIPO_ESPICULA_PRINCIPAL_ESTILO']; ?></td>
                            <td><?php echo $row['C_TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS']; ?></td>
                            <td><?php echo $row['C_TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO']; ?></td>
                            <td><?php echo $row['C_TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA']; ?></td>
                            <td><?php echo $row['C_TIPO_ESPICULA_PRINCIPAL_OXAS']; ?></td>
                            <td><?php echo $row['C_TIPO_ESPICULA_PRINCIPAL_TILOSTILO']; ?></td>
                            <td><?php echo $row['D_ESPICULA_PRINCIPAL_ESTILO']; ?></td>
                            <td><?php echo $row['D_ESPICULA_PRINCIPAL_TILOSTILO']; ?></td>
                            <td><?php echo $row['D_FORMA_BASE_TILOSTILO_PRINCIPAL']; ?></td>
                            <td><?php echo $row['E_DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA']; ?></td>
                            <td><?php echo $row['E_FORMA_BASE_TILOSTILO_ECTOSOMICO']; ?></td>
                            <td><?php echo $row['E_FORMA_MEGASCLERA_ECTOSOMICA']; ?></td>
                            <td><?php echo $row['E_TIPO_MEGASCLERA_ECTOSOMICA']; ?></td>
                            <td><?php echo $row['F_TIPO_DE_EXOSTILO']; ?></td>
                            <td><?php echo $row['G_FORMA_MEGASCLERA_INTERMEDIARIA']; ?></td>
                            <td><?php echo $row['G_TIPO_MEGASCLERA_INTERMEDIARIA']; ?></td>
                            <td><?php echo $row['H_LONGITUD_MEGASCLERAS']; ?></td>
                            <td><?php echo $row['I_MICROSCLERAS']; ?></td>
                            <td><?php echo $row['I_TIPO_MICROSCLERA']; ?></td>
                            <td><?php echo $row['J_ASTER']; ?></td>
                            <td><?php echo $row['J_DIAMETRO_ESFERASTER']; ?></td>
                            <td><?php echo $row['J_TIPO_DE_ASTER']; ?></td>
                            <td><?php echo $row['J_TIPO_DE_DIPLASTER']; ?></td>
                            <td><?php echo $row['J_TIPO_DE_ESFERASTER']; ?></td>
                            <td><?php echo $row['K_FORMA_FINAL']; ?></td>
                            <td><?php echo $row['L_NUMERO_DE_PAPILAS']; ?></td>
                            <td><?php echo $row['L_PAPILAS']; ?></td>
                            <td><?php echo $row['M_COLOR']; ?></td>
                            <td><?php echo $row['N_SUPERFICIE']; ?></td>
                            <td><?php echo $row['O_DISPOSICION_ESPICULAR_ESQUELETO']; ?></td>
                            <td><?php echo $row['P_ALOJA_CANGREJO_ERMITANO']; ?></td>
                            <td><?php echo $row['P_PERFORANTE']; ?></td>
                            <td><?php echo $row['P_PSEUDORAICES']; ?></td>
                            <td><?php echo $row['P_SUSTRATO']; ?></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="5">No data(s) found...</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div><!-- /.panel-->
    <script>
        function formToggle(ID) {
            var element = document.getElementById(ID);
            if (element.style.display === "none") {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }
    </script>
</div><!-- /.col-->

<!-- Footer -->
<?php $this->load->view('admin/templates/footer.php'); ?>
<!-- End of Footer -->