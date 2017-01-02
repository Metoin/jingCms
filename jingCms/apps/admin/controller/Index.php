<?php
namespace app\admin\controller;
/**
* 
*/
class Index extends \think\Controller
{
	
	function index()
	{
		// 渲染模板输出
		return $this->fetch('index',['name'=>'thinkphp']);
	}
}
?>