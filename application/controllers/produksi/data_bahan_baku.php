<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_bahan_baku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('produksi/m_data_bahan_baku');
	}

	public function index()
	{
		$this->fungsi->check_previleges('data_bahan_baku');
		$data['data_bahan_baku'] = $this->m_data_bahan_baku->getData();
		$this->load->view('produksi/data_bahan_baku/v_data_bahan_baku_list',$data);
	}

	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Data Bahan Baku";
		$subheader = "data_bahan_baku";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("produksi/data_bahan_baku/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("produksi/data_bahan_baku/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}

	public function show_addForm()
	{
		$this->fungsi->check_previleges('data_bahan_baku');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id_bahan_baku',
					'label' => 'id_bahan_baku',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
            $this->load->view('produksi/data_bahan_baku/v_data_bahan_baku_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','id_bahan_baku','nama_bahan_baku','harga','jumlah'));
			$this->m_data_bahan_baku->insertData($datapost);
			$this->fungsi->run_js('load_silent("produksi/data_bahan_baku","#content")');
			$this->fungsi->message_box("Data Bahan Baku sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Data Bahan Baku dengan data sbb:",true);
		}
	}

	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('data_bahan_baku');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => '',
					'rules' => ''
				),
				array(
					'field'	=> 'id_bahan_baku',
					'label' => 'id_bahan_baku',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('bahan_baku',array('id'=>$id));
			$data['status']='';
			$this->load->view('produksi/data_bahan_baku/v_data_bahan_baku_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','id_bahan_baku','nama_bahan_baku','harga','jumlah'));
            $this->m_data_bahan_baku->updateData($datapost);
			$this->fungsi->run_js('load_silent("produksi/data_bahan_baku","#content")');
			$this->fungsi->message_box("Data Bahan Baku sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Data Bahan Baku dengan data sbb:",true);
		}
	}
		public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_data_bahan_baku->deleteData($id);
		redirect('admin');
	}
}
/* End of file data_bahan_baku.php */
/* Location: ./application/controllers/produksi/data_bahan_baku.php */