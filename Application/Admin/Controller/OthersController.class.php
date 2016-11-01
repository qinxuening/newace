<?php
namespace Admin\Controller;
class OthersController extends AdminController{
	public function _initialize(){
		parent::_initialize();
		$this->assign('others_active','active open');
	}
	public function profile(){
		$this->assign('profile','active');
		$this->display();
	}
	
	public function inbox(){
		$this->assign('inbox','active');
		$this->display();
	}
}