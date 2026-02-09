<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\View;

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
        ['fa-kit/css/all.min.css', 'position' => View::POS_HEAD],
        'css/output.css',
    ];
    public $js = [
        ['fa-kit/js/all.min.js', 'position' => View::POS_HEAD],
        'js/site/interactivity.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
