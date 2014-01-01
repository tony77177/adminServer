<?php
/**
 * 文章管理模型
 * Created by PhpStorm.
 * User: TONY
 * Date: 13-12-26
 * Time: 下午9:41
 */

class News_model extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    /**
     * 添加新闻
     * @param $_title       标题
     * @param $_content     内容
     * @param $_author      作者
     * @return bool         TRUE OR FALSE
     */
    function add_news($_title,$_content,$_author){
        $insert_sql = "INSERT INTO t_news(id,title,content,author,create_dt) VALUES(UUID(),'".$_title."','".$_content."','".$_author."','".date('Y-m-d H:i:s')."')";
        $result = $this->common_model->execQuery($insert_sql, 'default', TRUE);
        return $result;
    }

    /**
     * 获取新闻列表
     * @param int $offset       偏移量
     * @param int $page_size    显示条数
     * @param string $where     条件查询
     * @return mixed            结果集
     */
    function get_list($offset = NULL, $page_size = NULL, $where = NULL)
    {
        $list_sql = "SELECT * FROM t_news $where ORDER BY create_dt DESC LIMIT $offset,$page_size";
        $result = $this->common_model->getDataList($list_sql, 'default');
        return $result;
    }

    /**
     * 获取新闻数据总条数
     * @return int              条数
     */
    function get_list_total_num(){
        $sql = "SELECT COUNT(*) AS num FROM t_news";
        $count = $this->common_model->getTotalNum($sql, 'default');
        return $count;
    }
}

/* End of file news_model.php */
/* Location: ./app/models/news_model.php */