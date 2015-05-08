<?php

/**
 * @package yii2-wow
 * @author Pavels Radajevs <pavlinter@gmail.com>
 * @copyright Copyright &copy; Pavels Radajevs <pavlinter@gmail.com>, 2015
 * @version 1.0.0
 */

namespace pavlinter\wow;

/**
 * Class AnimateAsset
 * @link http://daneden.github.io/animate.css
 */
class AnimateAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/animate.css';

    public function init()
    {
        $this->css[] = 'animate' . (YII_DEBUG ? '' : '.min') .'.css';
        parent::init();
    }
}