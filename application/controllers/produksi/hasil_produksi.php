<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hasil_produksi extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('produksi/m_hasil_produksi');
	}

	public function index()
	{
		$this->fungsi->check_previleges('hasil_produksi');
		$data['hasil_produksi'] = $this->m_hasil_produksi->getData();
		$this->load->view('produksi/hasil_produksi/v_hasil_produksi_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Hasil Produksi";
		$subheader = "hasil_produksi";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("produksi/hasil_produksi/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("produksi/hasil_produksi/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('hasil_produksi');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'tanggal_produksi',
					'label' => 'tanggal_produksi',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('produksi/hasil_produksi/v_hasil_produksi_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id_produksi','tanggal_produksi','hasil_total','jumlah_gagal','hasil_bersih'));
			$this->m_hasil_produksi->insertData($datapost);
			$this->fungsi->run_js('load_silent("produksi/hasil_produksi","#content")');
			$this->fungsi->message_box("Data Hasil Produksi sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah hasil_produksi dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('hasil_produksi');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id_produksi',
					'label' => '',
					'rules' => ''
				),
				array(
					'field'	=> 'tanggal_produksi',
					'label' => 'tanggal_produksi',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('hasil_produksi',array('id'=>$id));
			$data['status']='';
			$this->load->view('produksi/hasil_produksi/v_hasil_produksi_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id_produksi','tanggal_produksi','hasil_total','jumlah_gagal','hasil_bersih'));
			$this->m_hasil_produksi->updateData($datapost);
			$this->fungsi->run_js('load_silent("produksi/hasil_produksi","#content")');
			$this->fungsi->message_box("Data Hasil Produksi sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit hasil_produksi dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_hasil_produksi->deleteData($id);
		redirect('admin');
	}
	}