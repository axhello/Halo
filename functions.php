<?php 
error_reporting(E_ALL ^ E_NOTICE);

function themeConfig($form) {
    $bgUrl = new Typecho_Widget_Helper_Form_Element_Text('bgUrl', NULL, NULL, _t('网站背景地址'), _t('在这里填入一个图片URL地址, 为网站添加一个背景图片'));
    $form->addInput($bgUrl);
}

function showThumbnail($widget)
{ 
    // 当文章无图片时的默认缩略图
    // $rand = rand(1,5); // 随机 1-5 张缩略图
    // $random = $widget->widget('Widget_Options')->themeUrl . '/img/random/' . $rand . '.jpg'; // 随机缩略图路径
    $random = $widget->widget('Widget_Options')->themeUrl . '/images/2.jpg'; // 若只想要一张默认缩略图请删除本行开头的"//"

    $attach = $widget->attachments(1)->attachment;
    $pattern = '/!\[[^\]]*]\([^\)]*\.(png|jpeg|jpg|gif|bmp)\)/i'; 
    
    if ($attach->isImage) {
        echo '<img class="img-responsive img-rounded img" src="' . $attach->url . '"/>';
    } else if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
        echo '<img class="img-responsive img-rounded img" src="' . $thumbUrl[1][0] . '"/>';
    } else {
        echo '<img class="img-responsive img-rounded img" src="' . $random . '"/>';
    }
}
