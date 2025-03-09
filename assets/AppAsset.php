<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "css/bootstrap.min.css",
        "css/flaticon.css",
        "css/animate.min.css",
        "css/owl.carousel.min.css",
        "css/boxicons.min.css",
        "css/meanmenu.min.css",
        "css/nice-select.min.css",
        "css/fancybox.min.css",
        "css/rangeSlider.min.css",
        "css/magnific-popup.min.css",
        "css/index.css",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css",
        "css/style.css",
        "css/responsive.css",
        "https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"

    ];
    public $js = [
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/magnific-popup.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js",
        "js/fancybox.min.js",
        "js/owl.carousel.min.js",
        "js/owl.carousel2.thumbs.min.js",
        "js/meanmenu.min.js",
        "js/nice-select.min.js",
        "js/rangeSlider.min.js",
        "js/sticky-sidebar.min.js",
        "js/wow.min.js",
        "js/form-validator.min.js",
        "js/contact-form-script.js",
        "js/ajaxchimp.min.js",
        "js/jquery.inputmask.js",
        "js/main.js",
        "https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
