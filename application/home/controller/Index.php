<?php

namespace app\home\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    /**
     * 显示资源首页列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 显示关于我的单页.
     *
     * @return \think\Response
     */
    public function about()
    {
        return $this->fetch();
    }
 
    /**
     * 显示关于我的单页.
     *
     * @return \think\Response
     */
    public function suiyan()
    {
        //$this->assign('name', "hahaha");
        return $this->fetch();
    }

    /**
     * 显示关于我的单页.
     *
     * @return \think\Response
     */
    public function log()
    {
        return $this->fetch();
    }

    /**
     * 显示关于我的单页.
     *
     * @return \think\Response
     */
    public function photo()
    {
        return $this->fetch();
    }

    /**
     * 显示关于我的单页.
     *
     * @return \think\Response
     */
    public function study()
    {
        return $this->fetch();
    }

    /**
     * 显示关于我的单页.
     *
     * @return \think\Response
     */
    public function leavingMessage()
    {
        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
