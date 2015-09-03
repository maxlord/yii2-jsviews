<?php
namespace maxlord\jsviews;

use yii\web\AssetBundle;
use yii\web\View;

/**
 *  Asset Bundle for use JsViews
 */
class JsViewsAsset extends AssetBundle {
	public $sourcePath = '@bower/jsviews';

	public $css = [];

	public $js = [
		'jsviews.min.js'
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\web\JqueryAsset',
	];

	public $jsOptions = ['position' => View::POS_HEAD];
}
