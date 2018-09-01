<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if ($this->session->userdata('status_login')!==TRUE) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->back();
	}
	public function daftar($page)
	{
		$this->back('daftar/'.$page);
	}
	public function input($page)
	{
		$this->back('input/'.$page);
	}
	public function insert($page)
	{
		$data     = $this->post_data();
		$sql      = $this->{$page}->insert($data);
		$this->cek_sql($sql,$page);
	}
	public function hapus($page,$id)
	{
		$sql     = $this->{$page}->delete($id);
		$this->cek_sql($sql,$page);
	}
	public function ubah($halaman)
	{
		$this->back('ubah/'.$halaman);
	}
	public function update($page,$id)
	{
		$data 		= $this->post_data();
		$sql 		= $this->{$page}->update($id,$data);
		$this->cek_sql($sql,$page);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */