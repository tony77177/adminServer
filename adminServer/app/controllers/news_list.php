<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 文章列表控制器
 * Created by PhpStorm.
 * User: zhaoyu
 * Date: 13-12-31
 * Time: 下午3:05
 */

class News_list extends CI_Controller{

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
        $this->load->view('news_list');
    }

    /**
     * 添加文章
     */
    public function add(){
        $this->load->view('news_add');
    }
}

/* End of file news_list.php */
/* Location: ./app/controllers/news_list.php */