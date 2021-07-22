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
                                <input type="number" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name=" jumklas" min="1" max="76" required />
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

    <br>

    <div id="main">
        <section id="content" class="main">
            <div class="col-md">
                <h2 class="text-center" style="text-align:center;"><b>DATASET TERUMBU KARANG</b></h2>
                <div style="overflow-x:auto;">
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
                </div>
            </div><!-- /.panel-->
    </div>
    </section>
</div>