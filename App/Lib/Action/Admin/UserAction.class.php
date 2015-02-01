<?php  
Class UserAction extends Action {
	public function addAdmin(){
		$this->display();
	}
	public function admin(){
		$this->display();
	}
	public function editPwd(){
		$this->display();
	}
	public function index(){
		$db=M('users');
		$this->users=$db->select();
		$this->display();
	}
	public function sechUser(){
		$this->display();
	}
}
?>