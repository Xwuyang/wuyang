<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Public/blog_pc/images/favicon.ico">

    <title>DoraCMS</title>

    <!-- Bootstrap core CSS -->
    <link href="/Public/blog_pc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/Public/blog_pc/css/newblue.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/Public/blog_pc/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/Public/blog_pc/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="/Public/blog_pc/images/logo.png" alt=""/></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#" class="active">发现</a></li>
                <li><a href="#about">实验室</a></li>
                <li><a href="#contact">关于</a></li>

            </ul>
            <ul class="nav navbar-nav pull-right">
                <div id="hrnav">
                    <div id="soform" class="">
                        <form method="get" action="http://www.uehtml.com/list/">
                            <span class="icon-search"></span>
                            <input type="hidden" autocomplete="off" class="hide" value="4" name="cid">
                            <input type="hidden" autocomplete="off" class="hide" value="rec" name="sort">
                            <input type="hidden" autocomplete="off" class="hide" value="" name="fid">
                            <input type="hidden" autocomplete="off" class="hide" value="" name="owner">
                            <input type="hidden" autocomplete="off" class="hide" value="all" name="time">
                            <input type="text" autocomplete="off" placeholder="关键字查找" value="" name="search">
                        </form>
                    </div>
                    <div id="mulogin">

                        <!--<div class="btn-group" role="group" aria-label="">-->
                        <button type="button" onclick="window.location.href='Home/Index/login'" class="btn btn-gray">登录</button>
                        <button type="button" onclick="window.location.href='Home/Index/reg'" class="btn btn-blue">注册</button>
                        <!--</div>-->
                    </div>
                </div>

            </ul>
        </div><!--/.nav-collapse -->

    </div>
    <div id="nav-bread" class="nav-bread">
        <div class="container">
            <div data-name="fid" id="sofid" class="sotj soitem soone">
                <div class="soitemlabel">
                    <span class="soitemlabeltxt">文档</span>
                    <span class="yy-icon yy-soi"></span>
                </div>
                <div class="soitemcontent">
                    <ul>
                        <li><a class="active" data-value="0" href="http://www.uehtml.com/list/">文档</a></li>
                        <li><a data-value="1" href="http://www.uehtml.com/list/?fid=1">前端开发</a>
                            <div class="soitemcontent">
                                <ul>
                                    <li><a data-value="2" href="http://www.uehtml.com/list/?fid=2">企业集团</a></li>
                                    <li><a data-value="25" href="http://www.uehtml.com/list/?fid=25">专题活动</a></li>
                                    <li><a data-value="3" href="http://www.uehtml.com/list/?fid=3">门户电商</a></li>
                                    <li><a data-value="4" href="http://www.uehtml.com/list/?fid=4">游戏网页</a></li>
                                    <li><a data-value="5" href="http://www.uehtml.com/list/?fid=5">汽车/车类</a></li>
                                    <li><a data-value="6" href="http://www.uehtml.com/list/?fid=6">服装服饰</a></li>
                                    <li><a data-value="7" href="http://www.uehtml.com/list/?fid=7">餐饮美食</a></li>
                                    <li><a data-value="11" href="http://www.uehtml.com/list/?fid=11">其他网页</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>
                            <a data-value="12" href="http://www.uehtml.com/list/?fid=12">文档资源</a>
                            <div class="soitemcontent">
                                <ul>
                                    <li><a data-value="13" href="http://www.uehtml.com/list/?fid=13">图标Icon</a></li>
                                    <li><a data-value="14" href="http://www.uehtml.com/list/?fid=14">移动应用</a></li>
                                    <li><a data-value="17" href="http://www.uehtml.com/list/?fid=17">界面设计</a></li>
                                    <li><a data-value="16" href="http://www.uehtml.com/list/?fid=16">原型/UE</a></li>
                                    <li><a data-value="29" href="http://www.uehtml.com/list/?fid=29">UI动效</a></li>
                                    <li><a data-value="18" href="http://www.uehtml.com/list/?fid=18">其他GUI</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div data-name="sort" class="sotj soitem soone">
                <div class="soitemlabel">
                    <span class="icon-flag"></span>
                    <span class="soitemlabeltxt">最新推荐</span>
                    <span class="yy-icon yy-soi"></span>
                </div>
                <div class="soitemcontent">
                    <ul>
                        <li>
                            <a class="active" data-value="rec" href="http://www.uehtml.com/list/?sort=rec">
                                <span class="icon-flag"></span>最新推荐</a>
                        </li>
                        <li>
                            <a data-value="like" href="http://www.uehtml.com/list/?sort=like">
                                <span class="icon-heart"></span>最多喜欢</a>
                        </li>
                        <li>
                            <a data-value="view" href="http://www.uehtml.com/list/?sort=view">
                                <span class="icon-eye-open"></span>最多浏览</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div data-name="sort" class="sotj soitem soone">
                <div class="soitemlabel">
                    <span class="icon-user" aria-hidden="true"></span>
                    <span class="soitemlabeltxt">所有者</span>
                    <span class="yy-icon yy-soi"></span>
                </div>
                <div class="soitemcontent">
                    <ul>
                        <li>
                            <a class="active" data-value="rec" href="http://www.uehtml.com/list/?sort=rec">原创</a>
                        </li>
                        <li>
                            <a data-value="like" href="http://www.uehtml.com/list/?sort=like">转载</a>
                        </li>

                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <div data-name="sort" class="sotj soitem soone">
                <div class="soitemlabel">
                    <span class="icon-calendar" aria-hidden="true"></span>
                    <span class="soitemlabeltxt">不限</span>
                    <span class="yy-icon yy-soi"></span>
                </div>
                <div class="soitemcontent">
                    <ul>
                        <li>
                            <a class="active" data-value="rec" href="http://www.uehtml.com/list/?sort=rec">一周内</a>
                        </li>
                        <li>
                            <a data-value="like" href="http://www.uehtml.com/list/?sort=like">一月内</a>
                        </li>
                        <li>
                            <a data-value="view" href="http://www.uehtml.com/list/?sort=view">一年内</a>
                        </li>
                        <li>
                            <a data-value="comment" href="http://www.uehtml.com/list/?sort=comment">不限</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="blog-list">

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="blog-list-item">
                    <div class="item-Img">
                        <a target="_blank" href="Home/index/details">
                            <img  class="img-responsive" alt="Ps 快捷操作 1"  src="/Public/blog_pc/images/1437400238884.jpg"></a>
                    </div>
                    <div class="item-des">
                        <a href="Home/index/details" target="_blank" class="item-title">Ps 快捷操作 1</a>
                        <div class="item-time">
                            <span><i class="icon-time"></i><a>17小时前</a></span>
                        </div>
                        <div class="summary">你了解多少ps 你熟悉他的一些不为人知的功能吗 赶紧看看这篇干活</div>
                    </div>
                    <div class="item-more">
                        <span><i class="icon-eye-open"></i><a>163</a></span>
                        <span><i class="icon-comment"></i><a>33</a></span>
                        <span><i class="icon-heart"></i><a>2</a></span>

                        <span class="glyphicon glyphicon-flag hide" title="列表推荐"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="blog-list-item">
                    <div class="item-Img">
                        <a target="_blank" href="Home/index/details">
                            <img  class="img-responsive" alt="Ps 快捷操作 1"  src="/Public/blog_pc/images/1437400238884.jpg"></a>
                    </div>
                    <div class="item-des">
                        <a href="Home/index/details" target="_blank" class="item-title">Ps 快捷操作 1</a>
                        <div class="item-time">
                            <span><i class="icon-time"></i><a>17小时前</a></span>
                        </div>
                        <div class="summary">你了解多少ps 你熟悉他的一些不为人知的功能吗 赶紧看看这篇干活</div>
                    </div>
                    <div class="item-more">
                        <span><i class="icon-eye-open"></i><a>163</a></span>
                        <span><i class="icon-comment"></i><a>33</a></span>
                        <span><i class="icon-heart"></i><a>2</a></span>

                        <span class="glyphicon glyphicon-flag hide" title="列表推荐"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="blog-list-item">
                    <div class="item-Img">
                        <a target="_blank" href="Home/index/details">
                            <img  class="img-responsive" alt="Ps 快捷操作 1"  src="/Public/blog_pc/images/1437400238884.jpg"></a>
                    </div>
                    <div class="item-des">
                        <a href="Home/index/details" target="_blank" class="item-title">Ps 快捷操作 1</a>
                        <div class="item-time">
                            <span><i class="icon-time"></i><a>17小时前</a></span>
                        </div>
                        <div class="summary">你了解多少ps 你熟悉他的一些不为人知的功能吗 赶紧看看这篇干活</div>
                    </div>
                    <div class="item-more">
                        <span><i class="icon-eye-open"></i><a>163</a></span>
                        <span><i class="icon-comment"></i><a>33</a></span>
                        <span><i class="icon-heart"></i><a>2</a></span>

                        <span class="glyphicon glyphicon-flag hide" title="列表推荐"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="blog-list-item">
                    <div class="item-Img">
                        <a target="_blank" href="Home/index/details">
                            <img  class="img-responsive" alt="Ps 快捷操作 1"  src="/Public/blog_pc/images/1437400238884.jpg"></a>
                    </div>
                    <div class="item-des">
                        <a href="Home/index/details" target="_blank" class="item-title">Ps 快捷操作 1</a>
                        <div class="item-time">
                            <span><i class="icon-time"></i><a>17小时前</a></span>
                        </div>
                        <div class="summary">你了解多少ps 你熟悉他的一些不为人知的功能吗 赶紧看看这篇干活</div>
                    </div>
                    <div class="item-more">
                        <span><i class="icon-eye-open"></i><a>163</a></span>
                        <span><i class="icon-comment"></i><a>33</a></span>
                        <span><i class="icon-heart"></i><a>2</a></span>

                        <span class="glyphicon glyphicon-flag hide" title="列表推荐"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="blog-list-item">
                    <div class="item-Img">
                        <a target="_blank" href="Home/index/details">
                            <img  class="img-responsive" alt="Ps 快捷操作 1"  src="/Public/blog_pc/images/1437400238884.jpg"></a>
                    </div>
                    <div class="item-des">
                        <a href="Home/index/details" target="_blank" class="item-title">Ps 快捷操作 1</a>
                        <div class="item-time">
                            <span><i class="icon-time"></i><a>17小时前</a></span>
                        </div>
                        <div class="summary">你了解多少ps 你熟悉他的一些不为人知的功能吗 赶紧看看这篇干活</div>
                    </div>
                    <div class="item-more">
                        <span><i class="icon-eye-open"></i><a>163</a></span>
                        <span><i class="icon-comment"></i><a>33</a></span>
                        <span><i class="icon-heart"></i><a>2</a></span>

                        <span class="glyphicon glyphicon-flag hide" title="列表推荐"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="blog-list-item">
                    <div class="item-Img">
                        <a target="_blank" href="Home/index/details">
                            <img  class="img-responsive" alt="Ps 快捷操作 1"  src="/Public/blog_pc/images/1437400238884.jpg"></a>
                    </div>
                    <div class="item-des">
                        <a href="Home/index/details" target="_blank" class="item-title">Ps 快捷操作 1</a>
                        <div class="item-time">
                            <span><i class="icon-time"></i><a>17小时前</a></span>
                        </div>
                        <div class="summary">你了解多少ps 你熟悉他的一些不为人知的功能吗 赶紧看看这篇干活</div>
                    </div>
                    <div class="item-more">
                        <span><i class="icon-eye-open"></i><a>163</a></span>
                        <span><i class="icon-comment"></i><a>33</a></span>
                        <span><i class="icon-heart"></i><a>2</a></span>

                        <span class="glyphicon glyphicon-flag hide" title="列表推荐"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div id="pages">
                <a id="pagepre" href="#">
                    <span class="opt-icon icon-angle-left" aria-hidden="true"></span>
                </a>
                <a id="pageactive" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <span>...</span>
                <a href="#">29</a>
                <a id="pagenext" href="#">
                    <span class="opt-icon icon-angle-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div> <!-- /container -->
<!--footer begin-->
<div id="footer">
    <div class="container">

        <p id="banquan">自豪的采用&nbsp;<a href="###">DoraCMS</a>&nbsp;Copyright (c) 2013 <a href="http://www.17sucai.com" target="_blank">17素材网</a> All Rights Reserved 粤ICP备15038960号-1</p>
    </div>
</div>
<!--footer end-->

<div id="cbbfixed">
    <a href="###" class="cbbtn" id="cweixin">
        <span class="yy-icon yy-weixin"></span>
        <div></div>
    </a>
    <a href="###" class="cbbtn" id="gotop">
        <span class="yy-icon yy-gt"></span>
    </a>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/Public/blog_pc/js/jquery-1.11.1.js" type="text/javascript"></script>
<script src="/Public/blog_pc/js/blue.js" type="text/javascript"></script>
<script src="/Public/blog_pc/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/Public/blog_pc/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>