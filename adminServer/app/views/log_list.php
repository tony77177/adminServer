
<?php require_once('common/header.php');?>

<div class="container">
    <div class="row">

        <?php require_once('common/menu.php');?>

        <div class="col-xs-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> 登陆日志列表</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>用户名</th>
                            <th>IP</th>
                            <th>时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>金三顺</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
                        </tr>
                        <tr>
                            <td>金三顺</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
                        </tr>
                        <tr>
                            <td>金三顺</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
                        </tr>
                        <tr>
                            <td>金三顺</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
                        </tr>
                        <tr>
                            <td>金三顺</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
                        </tr>
                        <tr>
                            <td>金三顺</td>
                            <td>123456789@qq.com</td>
                            <td>2013-11-12 15:57:43</td>
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
        $("#log_list").attr('class','active');
    });
</script>

<?php require_once('common/footer.php');?>