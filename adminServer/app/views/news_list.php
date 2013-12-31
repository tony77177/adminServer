<?php require_once('common/header.php');?>

<div class="container">
    <div class="row">

        <?php require_once('common/menu.php');?>

        <div class="col-xs-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-book"></span> 文章管理列表</h3>
                </div>
                <div class="panel-body">
                    <div style="margin-bottom: 10px;">
                        <a href="<?php echo site_url(); ?>/news_list/add" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-plus"></span> 添加文章</a>
                    </div>


                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>标题</th>
                            <th>作者</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="removed">
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td><span class="glyphicon glyphicon-edit"></span></td>
                        </tr>
                        <tr>
                            <td><a href="#">中国新年即将来临啦，欢迎大家一起来看跨年</a></td>
                            <td>admin</td>
                            <td>2013-12-31 14:54:12</td>
                            <td><a href="#"><span class="glyphicon glyphicon-edit"></span> 编辑</a> &emsp; <a href="#"><span class="glyphicon glyphicon-remove"></span> 删除</a></td>
                        </tr>
                        <tr class="removed">
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td><span class="glyphicon glyphicon-edit"></span></td>
                        </tr>
                        <tr>
                            <td><a href="#">中国新年即将来临啦，欢迎大家一起来看跨年</a></td>
                            <td>admin</td>
                            <td>2013-12-31 14:54:12</td>
                            <td><a href="#"><span class="glyphicon glyphicon-edit"></span> 编辑</a> &emsp; <a href="#"><span class="glyphicon glyphicon-remove"></span> 删除</a></td>
                        </tr>
                        <tr class="removed">
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td><span class="glyphicon glyphicon-edit"></span></td>
                        </tr>
                        <tr>
                            <td><a href="#">中国新年即将来临啦，欢迎大家一起来看跨年</a></td>
                            <td>admin</td>
                            <td>2013-12-31 14:54:12</td>
                            <td><a href="#"><span class="glyphicon glyphicon-edit"></span> 编辑</a> &emsp; <a href="#"><span class="glyphicon glyphicon-remove"></span> 删除</a></td>
                        </tr>
                        </tbody>
                    </table>

                    <div>
                        <ul class="pagination">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
       $("#news_list").attr('class','active');
    });
</script>

<style>
    tr.removed {
        color: #c0c0c0;
        text-decoration: line-through;
    }
</style>

<?php require_once('common/footer.php');?>