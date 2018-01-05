<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_login extends CI_Controller
{
    public function index()
    {
        $this->load->view('home_page');
    }
    public function login($username, $passwd)
    {
        $this->load->model('User_model');
        if (!$username||!$passwd) {
            $this->Output_model->json_print(1, 'data empty');
            return;
        }
        $passwd = md5($passwd.$this->User_model->ADMIN_SALT);
        $condition=array(
            'user_name'=>$username,
            'user_passwd'=>$passwd,
        );
        $request = $this->User_model->get_one_by_condition($condition);
        if ($request) {
			$this->session->set_userdata('username',$username);
			$data = array(
				'userInfo'=>$request,
				'user_first_page'=>"/index.php/user_login/user_first_page",
			);
            $this->Output_model->json_print(0, 'ok', $data);
			// $this->load->view('user/userHomePage');
            // return;
        } else {
            $this->Output_model->json_print(-1, 'no user', $request);
            return;
        }
    }
	public function user_first_page(){
		$this->load->view('user/userHomePage');

	}
}
