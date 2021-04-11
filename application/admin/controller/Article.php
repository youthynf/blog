<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\common\model\Article as ArticleModel;

class Article extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        $article = new ArticleModel;
        $list = $article::paginate(5);
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign("place",'11');
        $this->assign('page',$page);
        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        $this->assign("place",'11');
        return $this->fetch();
    }

    /**
     * 保存新建的文章
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
        $data = $request->param(); //获取前台传来数据，转化为数组
        $article = new ArticleModel;
        $article->data([
            'title' => $data['title'],
            'author' => '小青年',
            'description' => $data['desc'],
            'content' => $data['content'],
            'cid' => '1',
            'uid' => '1',
            'keywords' => $data['keyword'],
        ]);
        if($article->save()){
            $this->assign("place",'11');
            return $this->success('新建成功','/admin/article');
        }
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
        return "read";
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
        $article = ArticleModel::get($id);
        $this->assign('article',$article);
        $this->assign("place",'11');
        return $this->fetch();
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
        return $this->success("更新成功！",'/admin/article');
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
        if(ArticleModel::destroy($id)){
            return $this->success('删除成功！');
        }
    }
}
