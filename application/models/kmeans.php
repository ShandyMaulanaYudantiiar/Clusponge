<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class KMeans extends CI_Model
{
    public function __construct()    {
        parent::__construct();
        $this->load->database();
    }

    // DATA RANDOM
    public function random($jk)    {
        return $this->db->query("SELECT A_CAPAS_DEL_CORTEX,
                                        A_CAPA_INTERNA_DEL_CORTEX,
                                        A_CORTEX,
                                        A_CORTEX_FIBROSO,
                                        A_CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES,
                                        A_CUERPOS_EXTRANOS_EN_EL_CORTEX,
                                        A_GROSOR_DEL_CORTEX,
                                        A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX,
                                        A_TILOSTILOS_ADICIONALES_COANOSOMA,
                                        B_NUMERO_DE_TIPOS_DE_MEGASCLERAS,
                                        C_TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA,
                                        C_TIPO_ESPICULA_PRINCIPAL_ESTILO,
                                        C_TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS,
                                        C_TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO,
                                        C_TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA,
                                        C_TIPO_ESPICULA_PRINCIPAL_OXAS,
                                        C_TIPO_ESPICULA_PRINCIPAL_TILOSTILO,
                                        D_ESPICULA_PRINCIPAL_ESTILO,
                                        D_ESPICULA_PRINCIPAL_TILOSTILO,
                                        D_FORMA_BASE_TILOSTILO_PRINCIPAL,
                                        E_DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA,
                                        E_FORMA_BASE_TILOSTILO_ECTOSOMICO,
                                        E_FORMA_MEGASCLERA_ECTOSOMICA,
                                        E_TIPO_MEGASCLERA_ECTOSOMICA,
                                        F_TIPO_DE_EXOSTILO,
                                        G_FORMA_MEGASCLERA_INTERMEDIARIA,
                                        H_LONGITUD_MEGASCLERAS,
                                        I_MICROSCLERAS,
                                        I_TIPO_MICROSCLERA,
                                        J_ASTER,
                                        J_DIAMETRO_ESFERASTER,
                                        J_TIPO_DE_ASTER,
                                        J_TIPO_DE_DIPLASTER,
                                        J_TIPO_DE_ESFERASTER,
                                        K_FORMA_FINAL,
                                        L_NUMERO_DE_PAPILAS,
                                        L_PAPILAS,
                                        M_COLOR,
                                        N_SUPERFICIE,
                                        O_DISPOSICION_ESPICULAR_ESQUELETO,
                                        P_ALOJA_CANGREJO_ERMITANO,
                                        P_PERFORANTE,
                                        P_PSEUDORAICES,
                                        P_SUSTRATO
                                FROM dataset")->result_array();
    }

    // GET DATA dari Model
    function getAll()   {
        return $this->db->query("SELECT * FROM dataset")->result_array();
    }

    // GET DATA dari Model
    function getData()   {
        return $this->db->query("SELECT A_CAPAS_DEL_CORTEX,
                                        A_CAPA_INTERNA_DEL_CORTEX,
                                        A_CORTEX,
                                        A_CORTEX_FIBROSO,
                                        A_CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES,
                                        A_CUERPOS_EXTRANOS_EN_EL_CORTEX,
                                        A_GROSOR_DEL_CORTEX,
                                        A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX,
                                        A_TILOSTILOS_ADICIONALES_COANOSOMA,
                                        B_NUMERO_DE_TIPOS_DE_MEGASCLERAS,
                                        C_TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA,
                                        C_TIPO_ESPICULA_PRINCIPAL_ESTILO,
                                        C_TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS,
                                        C_TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO,
                                        C_TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA,
                                        C_TIPO_ESPICULA_PRINCIPAL_OXAS,
                                        C_TIPO_ESPICULA_PRINCIPAL_TILOSTILO,
                                        D_ESPICULA_PRINCIPAL_ESTILO,
                                        D_ESPICULA_PRINCIPAL_TILOSTILO,
                                        D_FORMA_BASE_TILOSTILO_PRINCIPAL,
                                        E_DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA,
                                        E_FORMA_BASE_TILOSTILO_ECTOSOMICO,
                                        E_FORMA_MEGASCLERA_ECTOSOMICA,
                                        E_TIPO_MEGASCLERA_ECTOSOMICA,
                                        F_TIPO_DE_EXOSTILO,
                                        G_FORMA_MEGASCLERA_INTERMEDIARIA,
                                        H_LONGITUD_MEGASCLERAS,
                                        I_MICROSCLERAS,
                                        I_TIPO_MICROSCLERA,
                                        J_ASTER,
                                        J_DIAMETRO_ESFERASTER,
                                        J_TIPO_DE_ASTER,
                                        J_TIPO_DE_DIPLASTER,
                                        J_TIPO_DE_ESFERASTER,
                                        K_FORMA_FINAL,
                                        L_NUMERO_DE_PAPILAS,
                                        L_PAPILAS,
                                        M_COLOR,
                                        N_SUPERFICIE,
                                        O_DISPOSICION_ESPICULAR_ESQUELETO,
                                        P_ALOJA_CANGREJO_ERMITANO,
                                        P_PERFORANTE,
                                        P_PSEUDORAICES,
                                        P_SUSTRATO
                                FROM dataset")->result_array();
    }

    // GET DATA dari Model
    function getNama()   {
        return $this->db->query("SELECT SPESIES FROM dataset")->result_array();
    }

    // GET Jumlah Row dataset
    function hitungBaris()  {
        return $this->db->query("SELECT * FROM dataset")->num_rows();
    }

}

