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
        $this->load->library(array('email','common_class'));
    }

    /**
     * Index
     */
    public function index(){
        $this->load->view('message_list');
    }

    public function send_mail(){

//        if ((!$this->input->post('user_name')) && (!$this->input->post('content')) && (!$this->input->post('email')) && (!$this->input->post('add_time'))) {
//
//        } else {
//            die('fail');
//        }

        //获取EMIAL相关配置信息
        $data['email_config_info'] = $this->common_class->getUserConfInfo('email_config_info');

        $host = $data['email_config_info']['smtp_host'];

        $user = $data['email_config_info']['smtp_user'];

        $pass = $data['email_config_info']['smtp_pass'];

        $email_addr = $data['email_config_info']['email_addr'];

        $email_title = $data['email_config_info']['email_title'];

        $send_to = $data['email_config_info']['send_to'];

        $config = $this->common_class->getEmailConfigInfo($host, $user, $pass);

        $this->email->initialize($config);

        $this->email->from($email_addr, $email_title);

        $this->email->to($send_to); //收件人
        $this->email->subject($email_title);
        $content = "<h3>姓名：" . $this->input->post('user_name') . "</h3>";
        $content .= "<h3>内容：" . $this->input->post('content') . "</h3>";
        $content .= "<h3>邮箱：" . $this->input->post('email') . "</h3>";
        $content .= "<h3>时间：" . $this->input->post('add_time') . "</h3>";
        $content .= "邮件来自<a href=\"http://www.freedomdream.cn\" target=\"_blank\">畅想</a>";
        $this->email->message($content);

        if (!$this->email->send()) {
            echo 'fail';
        }else{
            echo 'ok';
        }
    }

}

/* End of file message_list.php */
/* Location: ./app/controllers/message_list.php */