<?php  
Class IndexAction extends Action {
	public function index(){
		$db=D('Boke');
		$this->lists=$db->where(array('ispass'=>1))->order('create_at desc')->limit('5')->select();
		$this->tags=$db->where( array( 'ispass'=>1,'type'=>2 ) )->order('create_at desc')->limit('4')->select();
		$this->hots=$db->where( array( 'ispass'=>1,'type'=>1 ) )->order('create_at desc')->limit('4')->select();
		$this->photos=M('photo')->order('id desc')->limit('6')->select();
		$this->display();
	}
	public function blog(){
		$db=M('boke');
		$this->data=$db->where(array('ispass'=>1))->order('create_at desc')->select();
		$this->tags=$db->where( array( 'ispass'=>1,'type'=>2 ) )->order('create_at desc')->limit('4')->select();
		$this->hots=$db->where( array( 'ispass'=>1,'type'=>1 ) )->order('create_at desc')->limit('4')->select();
		$this->display();
	}
	public function contact(){
		$this->display();
	}
	public function details(){
		$id=$this->_get('id');
		$this->detail=M('boke')->find($id);
		$this->tags=M('boke')->where( array( 'ispass'=>1,'type'=>2 ) )->order('create_at desc')->limit('4')->select();
		$this->hots=M('boke')->where( array( 'ispass'=>1,'type'=>1 ) )->order('create_at desc')->limit('4')->select();
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