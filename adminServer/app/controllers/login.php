<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 登录页控制器
 * Created by PhpStorm.
 * User: TONY
 * Date: 13-12-26
 * Time: 下午8:15
 */
class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->library('session');
    }

    /**
     * 登录首页
     */
    public function index(){
        $this->load->view('login');
    }

    /**
     * 登录判断
     */
    public function check_login(){
        $user_name = $this->input->post('user_name', TRUE);
        $pwd = $this->input->post('pass_word', TRUE);
        $result = $this->admin_model->check_login($user_name, md5($pwd));
        if ($result > 0) {
            $this->session->set_userdata('admin_info',$user_name);//记录用户名，用于判断是否登录
            die("<script>window.location.href='" . site_url() . "/index/';</script>");
            echo "ok";
        } else {
            echo "fail";
        }
    }
}

/* End of file login.php */
/* Location: ./app/controllers/login.php */