<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台首页控制器
 * Created by PhpStorm.
 * User: TONY
 * Date: 13-12-28
 * Time: 下午1:00
 */

class Index extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->admin_model->auth_check();
        $this->load->library('session');
    }

    /**
     * 后台管理首页
     */
    public function index(){
        $data['login_name'] = $this->session->userdata('admin_info');
        $this->load->view('index', $data);
    }

}