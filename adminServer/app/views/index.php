<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>后台登录</title>
    <base href="<?php echo base_url() ?>">
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link href="res/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Jquery -->
    <script src="res/common/js/jquery-1.10.2.min.js"></script>

    <!-- artDialog -->
    <script src="res/artDialog/artDialog.js?skin=default"></script>

    <!-- Bootstrap JS -->
    <script src="res/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header" style="margin-right: 30px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">后台管理系统</a>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url(); ?>"><span class="glyphicon glyphicon-home"></span>
                        后台首页</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                            class="glyphicon glyphicon-user"></span> <?php echo $login_name; ?> <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="change_pwd"><span class="glyphicon glyphicon-cog"></span> 修改密码</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url();?>/login/login_out"><span class="glyphicon glyphicon-off"></span> 退出</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div style="height:70px;"></div>

<div class="container">
    <div class="row">
        <div class="col-xs-2">
            <ul class="nav nav-pills nav-stacked affix">
                <li class="active"><a id="pas_run" href="#"><span class="glyphicon glyphicon-list"></span> 文章管理</a></li>
                <li class=""><a id="pbs_run" href="#"><span class="glyphicon glyphicon-envelope"></span> 留言管理</a></li>
                <li class=""><a id="pgs_run" href="#"><span class="glyphicon glyphicon-transfer"></span> 登录日志</a></li>
            </ul>
        </div>
        <div class="col-xs-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-info-sign"></span> 后台管理信息</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th nowrap="nowrap">留言数</th>
                            <td><a href="/xsmanager/index.php/project/index">2 条</a></td>
                        </tr>
                        <tr>
                            <th nowrap="nowrap">文章数</th>
                            <td><a href="/xsmanager/index.php/project/index">2 篇</a></td>
                        </tr>
                        <tr>
                            <th nowrap="nowrap">登录数</th>
                            <td><a href="/xsmanager/index.php/project/index">3 次</a></td>
                        </tr>
                        <tr>
                            <th nowrap="nowrap">上次登录时间</th>
                            <td>2013-12-30 11:22:41</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php');?>

</body>
</html>