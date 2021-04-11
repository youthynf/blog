<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义缓存目录
define('RUNTIME_PATH','../runtime/');

// 定义模板主题
define("DEFAULT_THEME","default");

// 定义模板文件默认目录
define("TMPL_PATH",__DIR__."/../template/".DEFAULT_THEME."/");

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
