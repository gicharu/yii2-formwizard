<?php
namespace buttflattery\formwizard\assetbundles\bs5;

use buttflattery\formwizard\assetbundles\bs5\ThemeBase as BaseTheme;

class FormWizardAsset extends BaseTheme
{

    public $js = [
        'js/formwizard.min.js',
        'js/jquery.smartWizard.js',
    ];

    public $css = [
        'css/animate.css',
        'css/shake.css',
        'css/smart_wizard.css',
        'css/icons-theme.css',
    ];
}
