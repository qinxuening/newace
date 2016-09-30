<?php
namespace Admin\Controller;
class JqgripController extends AdminController{
	public function _initialize(){
		parent::_initialize();
		$this->assign('table_active','active open');
	}
	public function index(){
		$this->assign('jqgrip_active','active');
		$this->display();
	}
}