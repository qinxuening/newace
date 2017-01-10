<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Controller;
use User\Api\UserApi as UserApi;

/**
 * 后台首页控制器
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
class IndexController extends AdminController {

    /**
     * 后台首页
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function index(){
    	//$rules = parse_action('add_document', UID);
    	//$rules = 'table:member|field:score|condition:uid={$self}|rule:score+10|cycle:24|max:5';
    	//$rules = explode(';', $rules);
    	//print_r($rules);
        $this->meta_title = '管理首页';
        $this->assign('index_active' , 'active open');
        $this->display();
    }

}
