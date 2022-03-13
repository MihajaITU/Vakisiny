<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

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
		$battjson = file_get_contents("http://localhost:55050/api/Battery");
   // $battjson = file_get_contents("http://127.0.0.1:5000/Battery");
   //   echo  $battjson ;
   		$battobjet = json_decode($battjson);
		$listvoltAmpere=array();
		for($i=0;$i<count($battobjet);$i++){
			$listvoltAmpere[]=strval($battobjet[$i]->Volt)."Volt ".strval($battobjet[$i]->Ampere)."Ampere";
		}
		$this->load->model('fonction');

		$result=array();
		$result=$this->fonction->countRec($listvoltAmpere);
		$result=$this->fonction->devideArray($result);

		$nom=array();
		$unite=array();
		for($i=0;$i<count($result);$i++){
			$nom[]=$result[$i]['Nom'];
			$unite[]=$result[$i]['Unite'];
		}
		$json['nom']=$nom;
		$json['Unite']=$unite;
		// $result=json_encode($result);

		$data['json']=json_encode($json);

		$this->load->view('index2',$data);
	}
	
}
