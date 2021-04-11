<?php
	namespace app\admin\controller;

	use think\Controller;
	use think\Request;

	/**
	 * 后台管理博主的个人信息
	 */

	class Personal extends Controller
	{
		public function index()
		{
			$this->assign("place",'1');
			return $this->fetch();
		}
	}
?>