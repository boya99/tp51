<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//自动化模块搭建 从build.php 复制到application 应用层下面，在根目中执行 php think build
return [
    // 生成应用公共文件
    '__file__' => ['common.php'],

    // 定义demo模块的自动生成 （按照实际定义的文件名生成）
//    'demo'     => [
//        '__file__'   => ['common.php'],
//        '__dir__'    => ['behavior', 'controller', 'model', 'view'],
//        'controller' => ['Index', 'Test', 'UserType'],
//        'model'      => ['User', 'UserType'],
//        'view'       => ['index/index'],
//    ],

    // 其他更多的模块定义
    'common'=>[
        '__dir__'=>['model'],
        'model'=>['Category','Admin'],
    ],
    'admin'=>[
        '__dir__'=>['controller','view'],
        'controller'=>['Index'],
        'view'=>['index/index']
    ],
    'api'=>[
        '__dir__'=>['controller'],
        'controller'=>['Index','Image'],
    ],
    'bis'=>[
        '__dir__'=>['controller','view'],
        'controller'=>['Register','Login']
    ],
];
