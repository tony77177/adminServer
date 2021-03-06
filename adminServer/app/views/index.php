
<?php require_once('common/header.php');?>

<div class="container">
    <div class="row">

        <?php require_once('common/menu.php');?>

        <div class="col-xs-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> 后台管理信息</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th nowrap="nowrap">文章数</th>
                                <td><a href="<?php echo site_url('news_list');?>"><?php echo $news_num;?> 篇</a></td>
                            </tr>
                            <tr>
                                <th nowrap="nowrap">留言数</th>
                                <td><a href="<?php echo site_url('message_list');?>"><?php echo $message_num;?> 条</a></td>
                            </tr>
                            <tr>
                                <th nowrap="nowrap">登录数</th>
                                <td><a href="<?php echo site_url('log_list');?>"><?php echo $login_num;?> 次</a></td>
                            </tr>
                            <tr>
                                <th nowrap="nowrap">上次登录时间</th>
                                <td><?php echo $latest_login;?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('common/footer.php');?>