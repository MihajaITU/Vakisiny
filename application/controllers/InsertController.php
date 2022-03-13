<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertController extends CI_Controller {

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
		
        $pas=$this->input->Get('pas');
        $s_intervalle=$this->input->Get('s_intervalle');
        $s_count=$this->input->Get('s_count');
        $s_pumoy=$this->input->Get('s_pumoy');
        $s_pumoyperw=$this->input->Get('s_pumoyperw');


		

        
        $values='0'.','.$pas.',"'.$s_intervalle.'","'.$s_count.'","'.$s_pumoy.'","'.$s_pumoyperw.'"';
		// var_dump($values);
        
        // echo $values;
		//insert into travail values (null,)
        // $this->load->view('Accueil');

		$this->load->model('Dao');
        $send=$this->Dao->insert("etat",$values);
	}

}

