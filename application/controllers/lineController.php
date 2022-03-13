<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lineController extends CI_Controller {

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
	public function index(){
		if(isset($_SESSION)){
			unset($_SESSION['etat']);
		}
		$this->load->model('Dao');
		$etat=$this->Dao->find2('*','now','');
		$data['etat']=$etat;
		var_dump($etat);
		$this->load->view('line',$data);
	}
	public function resultat(){
		$id=$this->input->Get('id');
		
		$this->load->model('Dao');
		$etat=$this->Dao->find2('*','now',' where id='.$id);

		// var_dump($etat);
		$etat=$etat[0];
		$strindzero=explode("-",$etat['indzero']);
		$strindun=explode("-",$etat['indun']);

		$indzero=array();
		$indun=array();

		for($i=0;$i<count($strindun);$i++){
			$indzero[]=intval($strindzero[$i]);
			$indun[]=intval($strindun[$i]);
		}
		$Data['indzero']=$indzero;
		$Data['indun']=$indun;

		$needsnight=array_sum($indun)+array_sum($indzero);
		$indunone=array();

		for($i=1;$i<count($indun);$i++){
			$needsnight=$needsnight-$indun[$i];
			$indunone[]=$needsnight;
		}
		$Data['puiss']=$indunone;
		$Data['json']=json_encode($Data);
		var_dump($Data);

		$this->load->view('line',$Data);
	}
	
}
