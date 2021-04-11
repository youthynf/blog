<?php
return [
	'template' => [
	    // 模板路径
		'view_path'  => config('template.view_path').config('admin.model_name').'/',
		'layout_on'  => true,
		'layout_name' => 'layout/layout',
	],
]
?>