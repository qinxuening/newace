<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class TablesController extends AdminController{
	public function _initialize(){
		parent::_initialize();
		$this->assign('table_active','active open');
	}
	public function index(){
		$this->assign('table_index','active');
		$this->display();
	}
}