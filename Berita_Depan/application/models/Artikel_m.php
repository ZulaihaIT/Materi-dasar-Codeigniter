<?php

class Artikel_m extends CI_Model{
    
    function insert_db($data){
        $this->db->insert('tb_artikel', $data);
    }
    
    function select_db(){
        return $this->db->query("select * FROM  tb_artikel ORDER BY kategori DESC limit 1")->result();
    }
    
    function delete_db($id){
        $this->db->where('id_artikel',$id);
        $this->db->delete('tb_artikel');
    }

    function select_by_db($id) {
        return $this->db  ->query("Select * FROM tb_artikel WHERE id_artikel='$id'")->result();
    
    } 
    
    function edit_db($id, $data){   
        $this->db  ->where('id_artikel', $id);   
        $this->db  ->update('tb_artikel', $data);
        return $this->db->affected_rows();
    }
     function select_artikel() {
        $query = $this->db->query("SELECT * FROM tb_artikel");
        return $query->result();
    }
    
    function select_artikel_where($id) {
        $query = $this->db->query("SELECT * FROM tb_artikel WHERE id_artikel='$id'");
        return $query->result();
    }
    
}
