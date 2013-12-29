<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 管理员模型
 * Created by PhpStorm.
 * User: TONY
 * Date: 13-12-26
 * Time: 下午9:43
 */

class Admin_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    /**
     * 登录验证
     * @param $_username    用户名
     * @param $_pwd         密码
     * @return mixed        返回条数
     */
    function check_login($_username, $_pwd){
        $check_sql = "SELECT COUNT(*) AS num FROM t_admin WHERE user_name='" . $_username . "' AND pass_word='" . $_pwd . "'";
        $num = $this->common_model->getTotalNum($check_sql, 'default');
        return $num;
    }

    /**
     *验证是否为非法登录
     */
    function auth_check(){
        $this->load->library('session');
        $tmp = $this->session->userdata('admin_info');
        if (!$this->session->userdata('admin_info')) {
            redirect(site_url());
        }
    }
}

/* End of file admin_model.php */
/* Location: ./app/models/admin_model.php */