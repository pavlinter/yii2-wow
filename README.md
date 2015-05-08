Yii2: WOW
=============================
Asset Bundle for [WOW](http://akuma.su/blog/animatsiya-elementov-po-mere-prokrutki-stranitsy.html)

Installation
-----------------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist pavlinter/yii2-wow "dev-master"
```

or add

```
"pavlinter/yii2-wow": "dev-master"
```

to the require section of your `composer.json` file.

Usage
------------------------
```php
\pavlinter\wow\WowAsset::register($this)->wow([
    'boxClass' => 'wow',
    'animateClass' => 'animated',
    'offset' => '0',
]);
echo Html::tag("div", "Your content or images.", ['class' => 'wow bounceInUp']);
```