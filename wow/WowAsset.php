<?php

/**
 * @package yii2-wow
 * @author Pavels Radajevs <pavlinter@gmail.com>
 * @copyright Copyright &copy; Pavels Radajevs <pavlinter@gmail.com>, 2015
 * @version 1.0.0
 */

namespace pavlinter\wow;

/**
 * Class WowAsset
 * @link http://akuma.su/blog/animatsiya-elementov-po-mere-prokrutki-stranitsy.html
 */
class WowAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/wow/dist';

    public $depends = [
        'pavlinter\wow\AnimateAsset',
    ];

    public function init()
    {
        $this->js[] = 'wow' . (YII_DEBUG ? '' : '.min') .'.js';
        parent::init();
    }
}