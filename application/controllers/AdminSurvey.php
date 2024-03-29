<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSurvey extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_reporte');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }
	public function index(){
        $datos = $this->M_reporte->getDatosSurvey();
        $html  = '';
        if(count($datos) == 0) {
            $html = '';
        }else {
            foreach ($datos as $key){
                $html .= '<tr class="tr-cursor-pointer">
                            <td class="text-left">'.$key->name_survey.'</td>
                            <td class="text-left">'.$key->company_survey.'</td>
                            <td class="text-center">'.$key->question1.'</td>
                            <td class="text-center">'.$key->question2.'</td>
                            <td class="text-center">'.$key->question3.'</td>
                            <td class="text-center">'.$key->question4.'</td>
                            <td class="text-center">'.$key->question5.'</td>
                            <td class="text-center">'.$key->question6.'</td>
                            <td class="text-center">'.$key->question7.'</td>
                            <td class="text-center">'.$key->question8.'</td>
                            <td class="text-center">'.$key->question9.'</td>
                            <td class="text-center">'.$key->question10.'</td>
                            <td class="text-center">'.$key->question11.'</td>
                            <td class="text-left">'.$key->sugerencia.'</td>
                            <td class="text-center">'.$key->date_survey.'</td>
                        </tr>';
            }
        }
		$data['html'] = $html;
		$this->load->view('v_admin_survey', $data);
	}
    function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}