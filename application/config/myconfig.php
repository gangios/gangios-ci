<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Menu Lis
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$config['menulist']	= array(
    '首页' => 'main',
    '监控' => 'monitor',
    '告警' => 'alarm',
    '节点管理' => 'nodes',
    '权限管理' => array(
        '用户管理' => 'users',
        '用户组管理' => 'groups'
    ),
    '测试菜单' => array(
        '测试子菜单' => array(
            '测试二级子菜单' => array(
                '测试三级子菜单项' => 'test'
            )
        ),
        '测试菜单项' => 'test'
    )
);


/* End of file myconfig.php */
/* Location: ./application/config/myconfig.php */