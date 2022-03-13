<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Model
{
	public function verifyLogin($login,$mdp)
	{
		$requete="select * from meteorologue where nom='%s' and motDePasse='%s'";
		$requete=sprintf($requete,$login,$mdp);
		// echo $requete;
		$query=$this->db->query($requete);
		
		$result=array();
		foreach($query->result_array() as $row)
		{
			return true;
			$result[]=$row;
		
		}	
		return false;
	}
}
?>