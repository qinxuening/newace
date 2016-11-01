<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class ElementsController extends AdminController{
	public function _initialize(){
		parent::_initialize();
		$this->assign('element_active','active open');
	}
	
	public function index(){
		$this->assign('index' , 'active');
		$this->display();
	}
	
	public function buttons(){
		$this->assign('buttons' , 'active');
		$this->display();
	}
	
	public function treeview(){
		$this->assign('treeview' , 'active');
		$this->display();
	}
	
	public function jqueryui(){
		$this->assign('jqueryui' , 'active');
		$this->display();
	}
	
	public function nestable(){
		$this->assign('nestable' , 'active');
		$this->display();
	}
}