<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_informasi_penjualan extends CI_Model {

    //select->read
	public function getData($value='')
	{
		$this->db->from('informasi_penjualan ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get('informasi_penjualan');
    }
    
    //insert->create
	public function insertData($data='')
	{
		
        $this->db->insert('informasi_penjualan',$data);
       
	}
   //update


	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('informasi_penjualan',$data);
	}
   //delete
	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('informasi_penjualan');
	}
}