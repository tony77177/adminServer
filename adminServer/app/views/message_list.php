<?php require_once('common/header.php');?>

<div class="container">
    <div class="row">

        <?php require_once('common/menu.php');?>

        <div class="col-xs-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> 留言管理列表</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>姓名</th>
                            <th>内容</th>
                            <th>Email</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>金三顺</td>
                            <td>请问具体的地址</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
                            <td>
                                <a href="#"><span class="glyphicon glyphicon-cloud-upload"></span> 发送到邮箱</a>
                            </td>
                        </tr>
                        <tr>
                            <td>中国新年</td>
                            <td>admin</td>
                            <td>请问具体的地址</td>
                            <td>2013-12-31 14:54:12</td>
                            <td>
                                <a href="#"><span class="glyphicon glyphicon-cloud-upload"></span> 发送到邮箱</a>
                            </td>
                        </tr>
                        <tr>
                            <td>金三顺</td>
                            <td>请问具体的地址</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
                            <td>
                                <a href="#"><span class="glyphicon glyphicon-cloud-upload"></span> 发送到邮箱</a>
                            </td>
                        </tr>
                        <tr>
                            <td>将来临啦，欢迎</td>
                            <td>admin</td>
                            <td>请问具体的地址</td>
                            <td>2013-12-31 14:54:12</td>
                            <td>
                                <a href="#"><span class="glyphicon glyphicon-cloud-upload"></span> 发送到邮箱</a>
                            </td>
                        </tr>
                        <tr>
                            <td>金三顺</td>
                            <td>请问具体的地址</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
                            <td>
                                <a href="#"><span class="glyphicon glyphicon-cloud-upload"></span> 发送到邮箱</a>
                            </td>
                        </tr>
                        <tr>
                            <td>即将来临啦，欢迎大家一</td>
                            <td>admin</td>
                            <td>请问具体的地址</td>
                            <td>2013-12-31 14:54:12</td>
                            <td>
                                <a href="#"><span class="glyphicon glyphicon-cloud-upload"></span> 发送到邮箱</a>
                            </td>
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
        $("#message_list").attr('class','active');
    });
</script>

<?php require_once('common/footer.php');?>