<?php
namespace app\admin\controller;
use think\View;

class User{
	public function index(){
		$view = new View();
        return $view->fetch('index');
	}

	public function login()
	{
		if(Request::instance()->isPost()){
			//
		}else{
			// 
		}
	}

	public function register()
	{}

	public function logout()
	{}

	public function forget()
	{}

	public function init()
	{}

	public function active()
	{}

	public function real()
	{
		//
	}

	public function delete()
	{}
}
?>