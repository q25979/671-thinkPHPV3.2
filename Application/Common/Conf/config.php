<?php
return array(
	//数据库配置信息
	'DB_TYPE'   => 'mysql',         // 数据库类型
	'DB_HOST'   => '47.95.255.97',  // 服务器地址 发到服务器上就是localhost 数据库地址
	'DB_NAME'   => 'btc',           // 数据库名
	'DB_USER'   => 'root',          // 用户名
	'DB_PWD'    => '004369',        // 密码
	'DB_PORT'   => 3306,            // 端口
	'DB_PREFIX' => 'btc_',          // 数据库表前缀

	'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}>',            // 模板引擎普通标签结束标记

	'TMPL_PARSE_STRING'  =>	array(
	    '__TEMPLATE__' 	=>	HOST_PATH . '/Template',        // 添加/Template规则
	    '__JS__'		=>	HOST_PATH . '/Public/js',
	    '__PLUG-IN__'	=>	HOST_PATH . '/Public/plug-in',
	    '__CSS__'		=>	HOST_PATH . '/Public/css',

        '__HOME__'      =>  HOST_PATH . '/Home',            // HOME下的目录

        '__UPLOAD__'    =>  HOST_PATH . '/Uploads',         // 图片路径

        '__HOST_PATH__' =>  HOST_PATH,                      // 域名路径

        '__VERIFY_STR__'    =>  VERIFY_STR,                 // 验证字符串
	),

	'URL_MODEL'             =>  2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式

    'COOKIE_PREFIX'         =>  'btc_',        // Cookie前缀 避免冲突

    'URL_CASE_INSENSITIVE'  =>  true,           // 表示不区分大小写
);