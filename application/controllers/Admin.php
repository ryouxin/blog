<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/admin');
	}
	public function user_sign($username,$passwd){
		$this->load->model('Admin_model');
		if(!$username||!$passwd){
			$this->Output_model->json_print(1,'no info');
			return;
		}
		$condition=array(
			'user_name'=>$username,
		);
		if($this->Admin_model->get_one_by_condition($condition)){
			$this->Output_model->json_print(2,'user exists');
			return;
		}
		$passwd = md5($passwd.$this->Admin_model->ADMIN_SALT);

		$user_info = array(
			'user_name'=>$username,
			'user_passwd'=>$passwd,
		);
		$request = $this->Admin_model->add($user_info);
		if($request){
			$this->Output_model->json_print(0,'ok');
		}
	}
}
