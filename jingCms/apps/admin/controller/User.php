<?php
namespace app\admin\controller;
use think\View;

class User{
	public function index(){
		$view = new View();
        return $view->fetch('index');
	}
}
?>