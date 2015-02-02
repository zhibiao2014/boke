<?php  
Class BokeAction extends Action {
	public function comment(){
		$this->display();
	}
	public function index(){
		$db=M('boke');
		$this->users=M('users')->select();
		$this->datas=$db->order('create_at desc,id desc')->select();
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
	public function delBoke(){
		$id=$this->_get('id');
		if(M('boke')->delete($id)){
			$this->success('删除成功',U('index'));
		}else{
			$this->error('删除失败，请重试...');
		}
	}
	public function viewBoke(){
		$id=$this->_get('id');
		$this->data=M('boke')->find($id);
		$this->display();
	}
	public function runAddBoke(){
		$data=array(
			'title' => $this->_post('title'),
			'content' => $this->_post('content'),
			'create_at'=>date('Y-m-d H:i',time()),
			'update_at'=>date('Y-m-d H:i',time()),
			'uname'=>$_SESSION['username'],
			);
		if(M('boke')->data($data)->add()){
			$this->success('发布成功',U('index'));
		}else{
			$this->error('发布失败');
		}
	}
	public function editBoke(){
		$id=$this->_get('id');
		$this->data=M('boke')->find($id);
		$this->display();
	}
	public function runEditBoke(){
		$data=array(
			'title' => $this->_post('title'),
			'content' => $this->_post('content'),
			'update_at'=>date('Y-m-d H:i',time()),
			'uname'=>$_SESSION['username'],
			);
		if(M('boke')->data($data)->add()){
			$this->success('更新成功',U('index'));
		}else{
			$this->error('更新失败');
		}
	}
}
?>