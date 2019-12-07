	<?php
class Cvalidation extends CI_Controller {

	public function index()
	{	
		$this->load->library('form_validation');
		if (isset($_POST['title'])) {
			$this->load->model('Validation_model');
			$this->form_validation->set_rules($this->Validation_model->add_validation);
			$check=$this->form_validation->run();
			if ($check==TRUE) {
				$this->load->view('info_view');
			}
			else $this->load->view('index_view');
		}
		else{
			$this->load->view('index_view');
		}
	}
}