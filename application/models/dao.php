<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dao extends CI_Model{
    public function find($columns,$table,$filter){
        $tab=array();
        //where id in (select max(id) from etat)
        $sql="select %s from %s%s";
        $sql=sprintf($sql,$columns,$table,$filter);
            // echo $sql;
    
        $query=$this->db->query($sql);
        $result=array();
		foreach($query->result_array() as $row)
		{

			$result[]=$row;
		}
        return $result;
    }
    public function insert($table,$values){
        try{
        $sql="insert into %s values (%s)";
        $sql=sprintf($sql,$table,$values);
        // echo $sql;
        $query=$this->db->query($sql);}
        catch(Exception $e){
            echo $e;
        }
    }
    public function find2($columns,$table,$filter){
        $tab=array();
        $sql="select %s from %s%s";
        $sql=sprintf($sql,$columns,$table,$filter);
            // echo $sql;
    
        $query=$this->db->query($sql)->result_array();
        
        return $query;
    }

}
?>