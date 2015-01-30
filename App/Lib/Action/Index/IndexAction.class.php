<?php  
Class IndexAction extends CommonAction {
	public function index(){
		$db=M('boke');
		$this->bokes=$db->select();
		$this->tags=$db->where( array( 'type'=>2 ) )->select();
		$this->hots=$db->where( array( 'type'=>1 ) )->select();
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