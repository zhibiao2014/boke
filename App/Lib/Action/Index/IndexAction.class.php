<?php  
Class IndexAction extends Action {
	public function index(){
		$db=M('boke');
		$this->bokes=$db->select();
		$this->tags=$db->where( array( 'type'=>2 ) )->select();
		$this->hots=$db->where( array( 'type'=>1 ) )->select();
		$this->display();
	}
	public function blog(){
		$db=M('boke');
		$this->data=$db->order('create_at desc')->select();
		$this->display();
	}
	public function contact(){
		$this->display();
	}
	public function details(){
		$id=$this->_get('id');
		$this->detail=M('boke')->find($id);
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