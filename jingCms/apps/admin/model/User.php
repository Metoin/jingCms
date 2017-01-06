<?php
namespace app\admin\model;

/**
* 
*/
class User
{
	
	function __construct(argument)
	{
		# code...
	}

	public function login(user)
	{
		// user 对象 包含账号、密码
	}

	public function register(user)
	{
		// user 手机/电子邮件、密码、性别、
	}

	public function logout(uid)
	{
		// 用户编号
	}

	public function forget(phone/email)
	{
		// 通过电子邮件/电话发送验证码
		// 验证验证码是否正确
		// 重新输入密码
	}

	public function init(user)
	{
		//更新初始化信息
	}

	public function active(user)
	{
		//更新激活信息
	}

	public function real(user)
	{
		// 验证真实身份
	}

	public function delete(id, status)
	{
		// 删除/禁用用户
	}

	public function list(catgory, page, status = "1")
	{
		// 用户分类/分页数/状态
	}
}
?>