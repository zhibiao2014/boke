<?php  
Class LoginAction extends Action 
{
	public function index()
		{
			$this->display();
		}

		Public function login () {
		if (!$this->isPost()) {
			halt('页面不存在');
		}

		if (!isset($_POST['submit'])) {
			return false;
		}

		//验证码对比
		if ($_SESSION['verify'] != md5($_POST['verify'])) {
			$this->error('验证码错误');
		}

		$name = $this->_post('uname');
		$password = $this->_post('pwd', 'md5');
		$db = M('users');
		$user = $db->where(array('name' => $name))->find();
		if (!$user || $user['password'] != $pwd) {
			$this->error('账号或密码错误');
		}

		if ($user['lock']) {
			$this->error('账号被锁定');
		}

		$data = array(
			'id' => $user['id'],
			'logintime' => time(),
			'loginip' => get_client_ip()
			);
		$db->save($data);

		session('uid', $user['id']);
		session('username', $user['username']);
		session('logintime', date('Y-m-d H:i', $user['logintime']));
		session('now', date('Y-m-d H:i', time()));
		session('loginip', $user['loginip']);
		session('admin', $user['admin']);
		$this->success('正在登录...', __APP__.'/Admin/Index/index');
	}
		
	Public function verify () 
		{
			import('ORG.Util.Image');
			Image::buildImageVerify();
		}
	}
?>