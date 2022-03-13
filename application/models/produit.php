<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Produit extends CI_Model
{
	public function getListeProduit()
	{
		$requete='select * from produit';
		$query=$this->db->query($requete);
		$result=array();
		foreach($query->result_array() as $row)
		{
			$result[]=$row;		
		}	
		return $result;
	}

	public function getListeCategorie()
	{
		$requete='select * from categorie';
		$query=$this->db->query($requete);
		$result=array();
		foreach($query->result_array() as $row)
		{
			$result[]=$row;		
		}	
		return $result;
	}

	public function getListeProduitCat($idCat)
	{
		$requete=sprintf('select * from produit where id_categorie=%d',$idCat);
		$query=$this->db->query($requete);
		$result=array();
		foreach($query->result_array() as $row)
		{
			$result[]=$row;		
		}	
		return $result;
	}

	public function getProduct($id){
		$requete=sprintf("select * from produit where id_produit=%d",$id);
		$query=$this->db->query($requete);
		return $query->row_array();
	}

	public function validerAchat($listeAchat,$quantite,$idCaisse){
		$num=$this->selectNextNumAchat();
		$requete_achat=sprintf("insert into achat(id_caisse,date_achat,num_liste_achat) values (%d,curdate(),%d)",$idCaisse,$num);
		$this->db->query($requete_achat);
		for($i=0;$i<count($listeAchat);$i++){
			$requete_liste=sprintf("insert into liste_achat(id_produit,quantite,num_liste_chat) values (%d,%d,%d)",$listeAchat[$i],$quantite[$i],$num);
			$this->db->query($requete_liste);
		}
	}

	public function selectNextNumAchat(){
		$requete=sprintf("select max(num_liste_chat)+1 as num from liste_achat");
		$query=$this->db->query($requete);
		$valeur=$query->row_array();
		if($valeur['num'] !== null){
			return $valeur['num'];
		}
		return 0;
	}
}
?>