<?php
	namespace app\admin\controller;

	use think\Controller;
	use think\Request;

	class Index extends Controller 
	{
		/**
		 * 显示后台首页
		*/
		public function index()
		{
			$this->assign("place",'10');
			return $this->fetch();
		}
	}

?>