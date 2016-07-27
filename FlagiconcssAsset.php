<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\flagiconcss;


use yii\web\AssetBundle;

/**
 * Class FlagiconcssAsset
 * @package modernkernel\flagiconcss
 */
class FlagiconcssAsset extends AssetBundle
{
    public $sourcePath = '@bower/flag-icon-css';
    public $css = [
        'css/flag-icon.min.css',
    ];


} 
