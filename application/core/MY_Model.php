<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public function tampil()
	{
		return $this->db->get('tb_'.$this->tabel)->result();
	}

	public function insert($data='')
	{
		return $this->db->insert('tb_'.$this->tabel, $data);
	}
	public function delete($id)
	{
		$this->db->where('pk_'.$this->tabel, $id);
		return $this->db->delete('tb_'.$this->tabel);
	}
	public function ubah($id)
	{
		$this->db->where('pk_'.$this->tabel,$id);
		return $this->db->get('tb_'.$this->tabel)->result();
	}
	public function update($id,$data)
	{
		$this->db->where('pk_'.$this->tabel, $id);
		return $this->db->update('tb_'.$this->tabel, $data);
	}

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */