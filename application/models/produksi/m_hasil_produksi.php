<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_hasil_produksi extends CI_Model {

    //select->read
	public function getData($value='')
	{
		$this->db->from('hasil_produksi mb');
		$this->db->order_by('mb.id', 'desc');
		return $this->db->get();
    }
    
    //insert->create
	public function insertData($data='')
	{
		
        $this->db->insert('hasil_produksi',$data);
       
	}
   //update


	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('hasil_produksi',$data);
	}
   //delete
	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('hasil_produksi');
	}

}
