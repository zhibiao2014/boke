<?php  
Class LoginAction extends Action {
	public function index(){
		$this->display();
	}
	public function reg(){
		$this->display();
	}
	public function common(){		
		$this->display();
	}
	public function addCommon(){
		$data=array(
			'name' => $this->_post('name'),
			'number' => $this->_post('number'),
			'email' => $this->_post('email'),
			'content' => $this->_post('content'),
			'create_at' => date('Y-m-d H:i',time()),
			'utitle' => $this->_post('title'),
			);
		if(M('comment')->data($data)->add()){
			$this->success('提交成功');
		}else{
			$this->error('提交失败，请重试...');
		}
	}
}
?>