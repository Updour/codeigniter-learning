<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Model {

	protected $tabel = 'user';

	public function cek_login($data)
	{
		$this->db->where($data);
		return $this->db->get('tb_'.$this->tabel, 1);
	}

}

/* End of file User.php */
/* Location: ./application/models/User.php */