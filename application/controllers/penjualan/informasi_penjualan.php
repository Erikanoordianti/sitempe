<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi_penjualan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('penjualan/m_informasi_penjualan');
	}

	public function index()
	{
		$this->fungsi->check_previleges('informasi_penjualan');
		$data['informasi_penjualan'] = $this->m_informasi_penjualan->getData();
		$this->load->view('penjualan/informasi_penjualan/v_informasi_penjualan_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Informasi Penjualan";
		$subheader = "informasi_penjualan";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("penjualan/informasi_penjualan/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("penjualan/informasi_penjualan/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('informasi_penjualan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'tanggal_pembelian',
					'label' => 'tanggal_pembelian',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('penjualan/informasi_penjualan/v_informasi_penjualan_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id_penjualan','tanggal_pembelian','no_nota','nama_konsumen','kualitas','ukuran','harga','jumlah_beli','total_bayar','status'));
			$this->m_informasi_penjualan->insertData($datapost);
			$this->fungsi->run_js('load_silent("penjualan/informasi_penjualan","#content")');
			$this->fungsi->message_box("Data Informasi Penjualan sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah informasi_penjualan dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('informasi_penjualan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id_penjualan',
					'label' => '',
					'rules' => ''
				),
				array(
					'field'	=> 'tanggal_pembelian',
					'label' => 'tanggal_pembelian',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('informasi_penjualan',array('id'=>$id));
			$data['status']='';
			$this->load->view('penjualan/informasi_penjualan/v_informasi_penjualan_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id_penjualan','tanggal_pembelian','no_nota','nama_konsumen','kualitas','ukuran','harga','jumlah_beli','total_bayar','status'));
			$this->m_pengajuan_alat->updateData($datapost);
			$this->fungsi->run_js('load_silent("penjualan/informasi_penjualan","#content")');
			$this->fungsi->message_box("Data Pengajuan Alat sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit informasi_penjualan dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_informasi_penjualan->deleteData($id);
		redirect('admin');
	}
	}