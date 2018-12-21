<?php
//载入公共配置
$config_inc_php = './Sys/config.inc.php';
if(file_exists($config_inc_php)){
	$config	= include $config_inc_php;
}else{
	$config = array();
}

$array=array(
	'URL_MODEL'	=> 2, // 如果你的环境不支持PATHINFO 请设置为3
	'OUTPUT_ENCODE' => true, // 页面压缩输出

	'APP_GROUP_MODE' =>  1,
	'APP_GROUP_LIST' => 'Home,Admin,Russian',
	'DEFAULT_GROUP' => 'Home',
	'TMPL_L_DELIM' => '<{', //修改左定界符
	'TMPL_R_DELIM' => '}>', //修改右定界符
'abc'	=>	'123',
	// 'TMPL_ACTION_ERROR' => THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => APP_PATH.'Public/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
	'URL_PATHINFO_DEPR' =>'/',

	'URL_HTML_SUFFIX'=> '.html',
	'APP_FILE_CASE'         => true,   // 是否检查文件的大小写 对Windows平台有效
	'SHOW_PAGE_TRACE'           =>  0,//显示调试信息
	'Data_Cache_Expire'=>60, //缓存时间

	//数据库
	'DB_PREFIX'	=> 'wa_',
	//'DB_DSN'=>'mysql://softall:abc123@localhost:3306/sx_wechat',
	'DB_TYPE'	=> 'mysql',				// 数据库类型
	'DB_HOST'	=> 'localhost',		// 服务器地址
	'DB_NAME'	=> 'lsh',			// 数据库名
	'DB_USER'	=> 'root',				// 用户名
	'DB_PWD'	=> 'abc12312686026@#',				// 密码
	'DB_PORT'	=> '3306',				// 端口
	'SYSTEM_START'=>strtotime('2016-5-1'),	//系统上线时间
	'OUTPUT_ENCODE' => false,
	
	//邮件配置
	'THINK_EMAIL' => array(
		'SMTP_HOST'   => 'smtp.sina.com', //SMTP服务器
		'SMTP_PORT'   => 25, //SMTP服务器端口
		'SMTP_USER'   => 'xx@qq.com', //SMTP服务器用户名
		'SMTP_PASS'   => 'password', //SMTP服务器密码
		'FROM_EMAIL'  => 'xx@qq.com', //发件人EMAIL
		'FROM_NAME'   => 'website', //发件人名称
		'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
		'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
	),
	//教师简历中的所属栏目
	'COLUMN_TYPE' => array('1'=>'全职教师','2'=>'党政领导','3'=>'管理与专技人员','4'=>'其他'),
);
//合并输出配置
//return array_merge($db_config,$config,$array);
return array_merge($config,$array);
