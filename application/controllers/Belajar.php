<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$array = array(
			'nama' => 'Rendy Setiadi'
		);
		
		$this->session->set_userdata( $array );
	}

	public function index()
	{
		$this->template();
	}

	public function perkenalan1()
	{
		// echo "Halo nama saya Rendy!!!";
		$data = array(
			'segment1' => $this->uri->segment(1),
			'segment2' => $this->uri->segment(2)
		);
		$this->parser->parse('perkenalan',$data);

	}
	
	public function rendy()
	{
		echo "saya senang belajar codeigniter";
	}

	public function uri()
	{
		echo $this->uri->segment(2);
	}
	public function halaman()
	{
		$halaman = $this->uri->segment(2);
		$this->template($halaman);
	}
	public function input()
	{
		$halaman = $this->uri->segment(2);
		$this->template('input/'.$halaman);
	}
	public function insert()
	{
		$halaman  = $this->uri->segment(2);
		$data     = $this->post_data();
		$sql      = $this->{$halaman}->insert($data);
		$this->cek_sql($sql,$halaman);
	}
	public function hapus()
	{
		$halaman = $this->uri->segment(2);
		$id      = $this->uri->segment(3);
		$sql     = $this->{$halaman}->delete($id);
		$this->cek_sql($sql,$halaman);
		print_r($sql);
	}
	public function ubah()
	{
		$halaman = $this->uri->segment(2);
		$this->template('ubah/'.$halaman);
	}
	public function update()
	{
		$halaman 	= $this->uri->segment(2);
		$id 		= $this->uri->segment(3);
		$data 		= $this->post_data();
		$sql 		= $this->{$halaman}->update($id,$data);
		$this->cek_sql($sql,$halaman);
	}
	

}

/* End of file Belajar.php */