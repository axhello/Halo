<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <link href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/themes.css'); ?>" rel="stylesheet">
    <?php if ($this->options->bgUrl): ?>
        <style>
            body.custom-background{ background-image: url(<?php $this->options->bgUrl();?>); }
        </style>
    <?php endif; ?>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="custom-background nav-fixed">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Hola Theme</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                    <?php $this->widget('Widget_Contents_Page_List')
                    ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <?php if($this->user->hasLogin()): ?>
                            <li><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                            <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
                            <?php else: ?>
                            <li><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="if-fixed" class="pull-right">
                <i class="fa fa-lg fa-thumb-tack"></i>
                <input type="checkbox" checked>
            </div>
        </div>
    </nav><!--/.nav-collapse -->