<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_bahan_baku extends CI_Model {
//select->read
	public function getData($value='')
	{
		$this->db->from('bahan_baku ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}
    //insert->create
	public function insertData($data='')
	{
		
        $this->db->insert('bahan_baku',$data);
       
	}
//update
	public function updateData($data='')
	{
		 $this->db->where('id', $data['id']);
            $this->db->update('bahan_baku',$data);
	}
//delete
	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('bahan_baku');
	}

}

/* End of file m_data_bahan_baku.php */
/* Location: ./application/models/produksi/m_data_bahan_baku.php */