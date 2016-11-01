<?php
namespace Admin\Controller;
class WidgetsController extends AdminController{
	public function _initialize(){
		parent::_initialize();
		$this->assign('widgets_active','active open');
	}
	public function widgets(){
		$this->display();
	}
}