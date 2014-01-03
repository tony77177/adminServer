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
        $this->load->model('index_model');
    }

    /**
     * 后台管理首页
     */
    public function index(){
        $data['message_num'] = $this->index_model->get_message_total_num();
        $data['news_num'] = $this->index_model->get_news_total_num();
        $data['login_num'] = $this->index_model->get_log_total_num($this->session->userdata('admin_info'));
        $data['latest_login'] = $this->index_model->get_latest_login_time($this->session->userdata('admin_info'));
        $this->load->view('index', $data);
    }

    /**
     * 密码修改
     */
    public function change_pwd(){

        //POST如果有数据则进行更新验证
        if ($this->input->post('curr_pwd') && $this->input->post('new_pwd')) {
            //验证当前密码是否正确
            $num = $this->admin_model->check_login($this->session->userdata('admin_info'), md5($this->input->post('curr_pwd')));
            if (!$num) {
                die('fail');
            } else {
                $result = $this->admin_model->change_pwd($this->session->userdata('admin_info'), md5($this->input->post('new_pwd')));
                if ($result) {
                    die('ok');
                } else {
                    die('0');
                }
            }
        }
        $this->load->view('change_pwd');
    }
}

/* End of file index.php */
/* Location: ./app/controllers/index.php */