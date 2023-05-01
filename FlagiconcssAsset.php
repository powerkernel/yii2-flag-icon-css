<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */

namespace powerkernel\flagiconcss;


use yii\web\AssetBundle;

/**
 * Class FlagiconcssAsset
 * @package powerkernel\flagiconcss
 */
class FlagiconcssAsset extends AssetBundle
{
    // public $sourcePath = '@bower/flag-icon-css';
    public $css = [
        'https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/css/flag-icons.min.css',
    ];
} 
