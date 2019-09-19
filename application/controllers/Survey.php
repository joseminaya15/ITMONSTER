<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
		$this->load->model('M_Datos');
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
	}
	public function index()
	{
		$this->load->view('v_survey');
	}
	function register(){
		$data['error'] = EXIT_ERROR;
      	$data['msj']   = null;
		try {
			$nombre            = $this->input->post('NameSurvey');
			$empresa 		   = $this->input->post('CompanySurvey');
			$pregunta1 		   = $this->input->post('Question1');
			$pregunta2	       = $this->input->post('Question2');
			$pregunta3 		   = $this->input->post('Question3');
			$pregunta4 	       = $this->input->post('Question4');
			$pregunta5	       = $this->input->post('Question5');
			$pregunta6	       = $this->input->post('Question6');
			$pregunta7	       = $this->input->post('Question7');
			$pregunta8	       = $this->input->post('Question8');
			$pregunta9	       = $this->input->post('Question9');
			$pregunta10	       = $this->input->post('Question10');
			$pregunta11	       = $this->input->post('Question11');
			$sugerencia	       = $this->input->post('Sugerencia');
            $fecha             = date('Y-m-d');
			$insertSurvey = array('name_survey'     => $nombre,
                                  'company_survey'  => $empresa,
                                  'question1'       => $pregunta1,
                                  'question2'       => $pregunta2,
                                  'question3'       => $pregunta3,
                                  'question4'       => $pregunta4,
                                  'question5'       => $pregunta5,
                                  'question6'       => $pregunta6,
                                  'question7'       => $pregunta7,
                                  'question8'       => $pregunta8,
                                  'question9'       => $pregunta9,
                                  'question10'      => $pregunta10,
                                  'question11'      => $pregunta11,
                                  'sugerencia'      => $sugerencia,
                                  'date_survey'     => $fecha);
				$datoInsert  = $this->M_Datos->insertarSurvey($insertSurvey,'survey');
	          	$data['msj']   = $datoInsert['msj'];
	          	$data['error'] = $datoInsert['error'];
		} catch(Exception $ex) {
			$data['msj'] = $ex->getMessage();
		}
      	echo json_encode($data);
	}	
}