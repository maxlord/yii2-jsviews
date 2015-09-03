JsViews Extension for Yii 2
=======================

This is the JsViews extension for [Yii framework 2.0](http://www.yiiframework.com).
It encapsulate [JsViews library](http://www.jsviews.com) as Asset Bundle,
and help using JsViews in Yii applications. 

For license information check the [LICENSE](LICENSE.txt)-file.

Documentation is at [README.md](README.md).

[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)
[![Latest Stable Version](https://poser.pugx.org/leandrogehlen/yii2-querybuilder/v/stable.png)](https://packagist.org/packages/leandrogehlen/yii2-querybuilder)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/leandrogehlen/yii2-querybuilder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/leandrogehlen/yii2-querybuilder/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/leandrogehlen/yii2-querybuilder/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/leandrogehlen/yii2-querybuilder/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/leandrogehlen/yii2-querybuilder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/leandrogehlen/yii2-querybuilder/build-status/master)
[![Code Climate](https://codeclimate.com/github/leandrogehlen/yii2-querybuilder/badges/gpa.svg)](https://codeclimate.com/github/leandrogehlen/yii2-querybuilder)
[![Total Downloads](https://poser.pugx.org/leandrogehlen/yii2-querybuilder/downloads.png)](https://packagist.org/packages/leandrogehlen/yii2-querybuilder)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist maxlord/yii2-jsviews
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
