<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 登陆日志控制器
 * Created by PhpStorm.
 * User: zhaoyu
 * Date: 13-12-31
 * Time: 下午4:53
 */

class Log_list extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->admin_model->auth_check();
        $this->load->library('session');
    }

    /**
     * Index
     */
    public function index(){
        $this->load->view('log_list');
    }

}

/* End of file log_list.php */
/* Location: ./app/controllers/log_list.php */