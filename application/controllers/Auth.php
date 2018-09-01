<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_controller {

	public function index()
	{
		$this->log_in();
	}
	public function cek_login()
	{
		$data = array(
			'username'      => $this->input->post('username'),
			'password'      => md5($this->input->post('password'))
		);

		$sql  = $this->user->cek_login($data);

		if ($sql->num_rows()>0) {
			$array = array(
				'username'      => $this->input->post('username'),
				'status_login'  => TRUE,
			);

			$this->session->set_userdata( $array );
			echo 1;
			redirect('admin','refresh');
		} else {
			echo 0;
			redirect('login','refresh');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */