<?php
namespace maxlord\jsviews;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Подключение ресурсов, необходимых для работы JsViews
 *
 * @package frontend\assets
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
