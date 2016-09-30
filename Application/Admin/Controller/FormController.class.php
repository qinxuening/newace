<?php
namespace Admin\Controller;
class FormController extends AdminController{
	public function _initialize(){
		parent::_initialize();
		$this->assign('form_active','active open');
	}
	
	public function form_elements(){
		$this->assign('form_elements' , 'active');
		$this->display();
	}
	
	public function form_wizard(){
		$this->assign('form_wizard' , 'active');
		$this->display();		
	}
}