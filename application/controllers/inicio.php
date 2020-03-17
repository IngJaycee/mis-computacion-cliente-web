<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function index(){
		// Se carga el templete principal al que se le inyectaran las demas secciones
		$data = "JC";
		$this->load->view('home_templete.php', $data);
	}

	public function getContent($ruta="nada"){
		$ruta = $_POST['ruta'];
		$data = "helloJC";
		// se evalua la ruta enviada y se retorna la seccion solicitada (por defecto se envia acerca de nosotros)
		switch($ruta){
			case "locate":
				$response['html'] = $this->load->view( 'locate_us', $data, TRUE );
			break;
			case "contact":
				$response['html'] = $this->load->view( 'contact_us', $data, TRUE );
			break;
			default:
			$response['html'] = $this->load->view( 'about_us', $data, TRUE );
			break;
		}

		// se responde la pagina solicitada dentro de un json;
		$this->output
						->set_content_type('application/json')
						->set_output(json_encode($response));

	}

}