<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 文章列表控制器
 * Created by PhpStorm.
 * User: zhaoyu
 * Date: 13-12-31
 * Time: 下午3:05
 */

class News_list extends CI_Controller{

    private $per_page = 5; //每页显示数据条数
    private $uri_segment = 2; //分页方法自动测定你 URI 的哪个部分包含页数

    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
        $this->admin_model->auth_check();
        $this->load->library(array('common_class', 'pagination'));
        $this->load->model('news_model');
    }

    /**
     * Index
     */
    public function index(){

        $offset = 0; //偏移量

        if ($this->input->get('per_page')) {
            $offset = ((int)$this->input->get('per_page') - 1) * $this->per_page;//计算偏移量
        }

        $count = $this->news_model->get_list_total_num(); //总条数

        //初始化分页数据
        $config = $this->common_class->getPageConfigInfo('/news_list/?', $count, $this->per_page, $this->uri_segment);
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['news_list'] = $this->news_model->get_list($offset, $this->per_page);
        $this->load->view('news_list', $data);
    }

    /**
     * 添加文章
     */
    public function add(){
        if ($this->input->post('_title') && $this->input->post('_content')) {
            $result = $this->news_model->add_news($this->input->post('_title'), $this->input->post('_content'), $this->session->userdata('admin_info'));
            if ($result) {
                die('ok');
            } else {
                die('fail');
            }
        }
        $this->load->view('news_add');
    }
}

/* End of file news_list.php */
/* Location: ./app/controllers/news_list.php */