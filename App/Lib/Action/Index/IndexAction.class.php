<?php  
Class IndexAction extends Action {
	public function index(){
		$db=M('boke');
		$this->bokes=$db->select();
		$this->display();
	}
	public function blog(){
		$this->display();
	}
	public function contact(){
		$this->display();
	}
	public function details(){
		$this->display();
	}
	public function service(){
		$this->display();
	}
	public function about(){
		$this->display();
	}
}
?>