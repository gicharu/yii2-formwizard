<?php
namespace buttflattery\formwizard\assetbundles\bs5;

use yii\web\AssetBundle;

class ThemeBase extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../../assets/';
    public $baseUrl = '@web';

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
