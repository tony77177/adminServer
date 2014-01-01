<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 留言列表控制器
 * Created by PhpStorm.
 * User: zhaoyu
 * Date: 13-12-31
 * Time: 下午4:38
 */

class Message_list extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->admin_model->auth_check();
    }

    /**
     * Index
     */
    public function index(){
        $this->load->view('message_list');
    }

}

/* End of file message_list.php */
/* Location: ./app/controllers/message_list.php */