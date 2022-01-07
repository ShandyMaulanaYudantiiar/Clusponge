<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class ImportData extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load data model
        $this->load->model('Importcsv');

        // Load form validation library
        $this->load->library('form_validation');

        // Load file helper
        $this->load->helper('file');

        //Check session
        belumlogin();
    }

    public function index()
    {
        $data = array();

        // Get messages from the session
        if ($this->session->userdata('success_msg')) {
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if ($this->session->userdata('error_msg')) {
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

        // Get rows
        $data['dataset'] = $this->Importcsv->getRows();

        // Load the list page view
        $this->load->view('admin/importData', $data);
    }

    public function import()
    {
        $data = array();
        $import = array();

        // If import request is submitted
        if ($this->input->post('importSubmit')) {
            // Form field validation rules
            $this->form_validation->set_rules('file', 'CSV file', 'callback_file_check');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {
                $insertCount = $updateCount = $rowCount = $notAddCount = 0;

                // If file uploaded
                if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                    //  Load CSV reader library
                    $this->load->library('CSVReader');

                    // Parse data from CSV file
                    $csvData = $this->csvreader->parse_csv($_FILES['file']['tmp_name']);

                    // Insert/update CSV data into database
                    if (!empty($csvData)) {
                        foreach ($csvData as $row) {
                            $rowCount++;

                            // Prepare data for DB insertion
                            $import = array(
                                'NO' => $row['NO'],
                                'SPESIES' => $row['SPESIES'],
                                'A_CAPAS_DEL_CORTEX' => $row['A_CAPAS_DEL_CORTEX'],
                                'A_CAPA_INTERNA_DEL_CORTEX' => $row['A_CAPA_INTERNA_DEL_CORTEX'],
                                'A_CORTEX' => $row['A_CORTEX'],
                                'A_CORTEX_FIBROSO' => $row['A_CORTEX_FIBROSO'],
                                'A_CORTEX_SOLO_DE_ESPICULAS_TANGENCIALES' => $row['A_CAPA_INTERNA_DEL_CORTEX'],
                                'A_CUERPOS_EXTRANOS_EN_EL_CORTEX' => $row['A_CUERPOS_EXTRANOS_EN_EL_CORTEX'],
                                'A_GROSOR_DEL_CORTEX' => $row['A_GROSOR_DEL_CORTEX'],
                                'A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX' => $row['A_HACES_DE_ESPICULAS_PRINCIPALES_EN_POMPON_EN_EL_CORTEX'],
                                'A_TILOSTILOS_ADICIONALES_COANOSOMA' => $row['A_TILOSTILOS_ADICIONALES_COANOSOMA'],
                                'B_NUMERO_DE_TIPOS_DE_MEGASCLERAS' => $row['B_NUMERO_DE_TIPOS_DE_MEGASCLERAS'],
                                'C_TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA' => $row['C_TIPO_ESPICULA_PRINCIPAL_DIACTINA_TUBERCULADA'],
                                'C_TIPO_ESPICULA_PRINCIPAL_ESTILO' => $row['C_TIPO_ESPICULA_PRINCIPAL_ESTILO'],
                                'C_TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS' => $row['C_TIPO_ESPICULA_PRINCIPAL_ESTILOS_2_TAMANOS'],
                                'C_TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO' => $row['C_TIPO_ESPICULA_PRINCIPAL_ESTILO_TILOSTILO'],
                                'C_TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA' => $row['C_TIPO_ESPICULA_PRINCIPAL_ESTRONGILOXA'],
                                'C_TIPO_ESPICULA_PRINCIPAL_OXAS' => $row['C_TIPO_ESPICULA_PRINCIPAL_OXAS'],
                                'C_TIPO_ESPICULA_PRINCIPAL_TILOSTILO' => $row['C_TIPO_ESPICULA_PRINCIPAL_TILOSTILO'],
                                'D_ESPICULA_PRINCIPAL_ESTILO' => $row['D_ESPICULA_PRINCIPAL_ESTILO'],
                                'D_ESPICULA_PRINCIPAL_TILOSTILO' => $row['D_ESPICULA_PRINCIPAL_TILOSTILO'],
                                'D_FORMA_BASE_TILOSTILO_PRINCIPAL' => $row['D_FORMA_BASE_TILOSTILO_PRINCIPAL'],
                                'E_DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA' => $row['E_DISPOSICION_MEGASCLERAS_ECTOSOMICAS_EN_EL_ECTOSOMA'],
                                'E_FORMA_BASE_TILOSTILO_ECTOSOMICO' => $row['E_FORMA_BASE_TILOSTILO_ECTOSOMICO'],
                                'E_FORMA_MEGASCLERA_ECTOSOMICA' => $row['E_FORMA_MEGASCLERA_ECTOSOMICA'],
                                'E_TIPO_MEGASCLERA_ECTOSOMICA' => $row['E_TIPO_MEGASCLERA_ECTOSOMICA'],
                                'F_TIPO_DE_EXOSTILO' => $row['F_TIPO_DE_EXOSTILO'],
                                'G_FORMA_MEGASCLERA_INTERMEDIARIA' => $row['G_FORMA_MEGASCLERA_INTERMEDIARIA'],
                                'G_TIPO_MEGASCLERA_INTERMEDIARIA' => $row['G_TIPO_MEGASCLERA_INTERMEDIARIA'],
                                'H_LONGITUD_MEGASCLERAS' => $row['H_LONGITUD_MEGASCLERAS'],
                                'I_MICROSCLERAS' => $row['I_MICROSCLERAS'],
                                'I_TIPO_MICROSCLERA' => $row['I_TIPO_MICROSCLERA'],
                                'J_ASTER' => $row['J_ASTER'],
                                'J_DIAMETRO_ESFERASTER' => $row['J_DIAMETRO_ESFERASTER'],
                                'J_TIPO_DE_ASTER' => $row['J_TIPO_DE_ASTER'],
                                'J_TIPO_DE_DIPLASTER' => $row['J_TIPO_DE_DIPLASTER'],
                                'J_TIPO_DE_ESFERASTER' => $row['J_TIPO_DE_ESFERASTER'],
                                'K_FORMA_FINAL' => $row['K_FORMA_FINAL'],
                                'L_NUMERO_DE_PAPILAS' => $row['L_NUMERO_DE_PAPILAS'],
                                'L_PAPILAS' => $row['L_PAPILAS'],
                                'M_COLOR' => $row['M_COLOR'],
                                'N_SUPERFICIE' => $row['N_SUPERFICIE'],
                                'O_DISPOSICION_ESPICULAR_ESQUELETO' => $row['O_DISPOSICION_ESPICULAR_ESQUELETO'],
                                'P_ALOJA_CANGREJO_ERMITANO' => $row['P_ALOJA_CANGREJO_ERMITANO'],
                                'P_PERFORANTE' => $row['P_PERFORANTE'],
                                'P_PSEUDORAICES' => $row['P_PSEUDORAICES'],
                                'P_SUSTRATO' => $row['P_SUSTRATO'],
                            );

                            // Check whether email already exists in the database
                            $con = array(
                                'where' => array(
                                    'NO' => $row['NO']
                                ),
                                'returnType' => 'count'
                            );
                            $prevCount = $this->Importcsv->getRows($con);

                            if ($prevCount > 0) {
                                // Update member data
                                $condition = array('NO' => $row['NO']);
                                $update = $this->Importcsv->update($import, $condition);

                                if ($update) {
                                    $updateCount++;
                                }
                            } else {
                                // Insert member data
                                $insert = $this->Importcsv->insert($import);

                                if ($insert) {
                                    $insertCount++;
                                }
                            }
                        }

                        // Status message with imported data count
                        $notAddCount = ($rowCount - ($insertCount + $updateCount));
                        $successMsg = 'Data imported successfully. Total Rows (' . $rowCount . ') | Inserted (' . $insertCount . ') | Updated (' . $updateCount . ') | Not Inserted (' . $notAddCount . ')';
                        $this->session->set_userdata('success_msg', $successMsg);
                    }
                } else {
                    $this->session->set_userdata('error_msg', 'Error on file upload, please try again.');
                }
            } else {
                $this->session->set_userdata('error_msg', 'Invalid file, please select only CSV file.');
            }
        }
        redirect('admin/importData');
    }

    /*
     * Callback function to check file value and type during validation
     */
    public function file_check($str)
    {
        $allowed_mime_types = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
        if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != "") {
            $mime = get_mime_by_extension($_FILES['file']['name']);
            $fileAr = explode('.', $_FILES['file']['name']);
            $ext = end($fileAr);
            if (($ext == 'csv') && in_array($mime, $allowed_mime_types)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'Please select only CSV file to upload.');
                return false;
            }
        } else {
            $this->form_validation->set_message('file_check', 'Please select a CSV file to upload.');
            return false;
        }
    }
}
