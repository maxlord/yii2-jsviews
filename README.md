JsViews Extension for Yii 2
=======================

This is the JsViews extension for [Yii framework 2.0](http://www.yiiframework.com).
It encapsulate [JsViews library](http://www.jsviews.com) as Asset Bundle,
and help using JsViews in Yii applications. 

For license information check the [LICENSE](LICENSE.txt)-file.

Documentation is at [README.md](README.md).

[![Latest Stable Version](https://poser.pugx.org/maxlord/yii2-jsviews/v/stable)](https://packagist.org/packages/maxlord/yii2-jsviews) 
[![Total Downloads](https://poser.pugx.org/maxlord/yii2-jsviews/downloads)](https://packagist.org/packages/maxlord/yii2-jsviews) 
[![Latest Unstable Version](https://poser.pugx.org/maxlord/yii2-jsviews/v/unstable)](https://packagist.org/packages/maxlord/yii2-jsviews) 
[![License](https://poser.pugx.org/maxlord/yii2-jsviews/license)](https://packagist.org/packages/maxlord/yii2-jsviews)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --dev maxlord/yii2-jsviews
```

or add

```
"maxlord/yii2-jsviews": "~1.0.0"
```

to the require section of your `composer.json` file.

Usage
-----

**View**:

```php

<?php
/* @var $this \yii\web\View */

maxlord\jsviews\JsViewsAsset::register($this);

?>

Page View Code...

```
