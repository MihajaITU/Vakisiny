<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Region extends CI_Model{
        private $idRegion;
        private $designation;

        public function getIdRegion() { 
            return $this->idRegion; 
        } 

        public function setId($idRegion) {  
            $this->idRegion = $idRegion; 
        } 

        public function getDesignation() { 
            return $this->designation; 
        } 

        public function setNom($designation) {  
            $this->designation = $designation; 
        } 

        public function listeRegion(){
            $query= $this->db->query('SELECT * FROM Region');
          
            $result=array();
            foreach($query->result_array() as $row)
            {
                $result[]=$row;        
            }	
            return $result;
        }
    }
?>