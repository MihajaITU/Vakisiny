<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertController1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Dao');
		
        $pas=$this->input->Get('indzero');
        $s_intervalle=$this->input->Get('indun');
        


		

        
        $values='0'.',"'.$pas.'","'.$s_intervalle.'"';
		// var_dump($values);
        
        // echo $values;
		//insert into travail values (null,)
        // $this->load->view('Accueil');

		$this->load->model('Dao');
        $send=$this->Dao->insert("now",$values);
	}

}

