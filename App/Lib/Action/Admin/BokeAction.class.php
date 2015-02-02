<?php  
Class BokeAction extends Action {
	public function comment(){
		$this->display();
	}
	public function index(){
		$db=M('boke');
		$this->datas=$db->order('create_at desc')->select();
		$this->display();
	}
	public function sechBoke(){
		$this->display();
	}
	public function sechComment(){
		$this->display();
	}
	public function turn(){
		$this->display();
	}
	public function addBoke(){
		$this->display();
	}
	public function runAddBoke(){
		$data=array(
			'title' => $this->_post('title'),
			'content' => $this->_post('content'),
			'create_at'=>date('Y-m-d H:i:s',time()),
			'update_at'=>date('Y-m-d H:i:s',time()),
			'uid'=>'',
			);
		if(M('boke')->data($data)->add()){
			$this->success('发布成功',U('index'));
		}else{
			$this->error('发布失败');
		}
	}
}
?>