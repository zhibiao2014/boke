<?php  
Class UserAction extends Action {
	public function addAdmin(){
		$this->display();
	}
	public function runAddAdmin(){
		if ($_POST['pwd']!=$_POST['pwded']){
			echo "两次密码不相同";
		}
		$data = array(
			'name' =>  $this->_post('username'),
			'password' => $this->_post('pwd','md5'),
			'logintime' => time(),
			'loginip' => get_client_ip(),
			'admin' => $this->_post('admin'),
			);
		if(M('users')->data($data)->add()){
			$this->success('添加成功',U('admin'));
		}else{
			$this->error('添加失败');
		}
	}
	public function admin(){
		$db=M('users');
		$this->users=$db->select();
		$this->display();
	}
	public function editPwd(){
		$this->display();
	}
	public function index(){
		$this->display();
	}
	public function sechUser(){
		$this->display();
	}
	Public function delAdmin(){
		$id=$this->_get('id', 'intval');
		if(M('users')->delete($id)){
			$this->success('删除成功',U('admin'));
		}else{
			$this->error('删除失败');
		}
	}
	public function lockAdmin(){
		$data=array(
				'user_id'=>$this->_get('id'),
				'lock'=>$this->_get('lock')
			);
		$msg=$data['lock']?'锁定':'解锁';
		if(M('users')->save($data)){
			$this->success($msg.'成功',U('admin'));
		}else{
			$this->error($msg.'失败');
		}
	}
}
?>