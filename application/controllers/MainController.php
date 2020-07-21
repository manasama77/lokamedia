<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index()
	{
		$data['carousel'] = $this->mcore->get('carousel', '*', NULL, 'sequence', 'ASC');
		$data['about_us'] = $this->mcore->get('about_us', '*', NULL, NULL, 'ASC');
		$this->load->view('index', $data);
	}

}

/* End of file MainController.php */
/* Location: ./application/controllers/MainController.php */