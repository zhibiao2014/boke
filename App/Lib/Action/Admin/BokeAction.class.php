<?php  

Class BokeAction extends Action {
	public function comment(){
		$db=M('comment');
		$this->datas=$db->order('create_at desc,id desc')->select();
		$this->display();
	}
	public function index(){
		$db=M('boke');
		import('ORG.Util.Page');// 导入分页类
		$this->users=M('users')->select();
		$Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		$this->datas=$db->order('create_at desc,id desc')->select();
		$this->assign('page',$show);// 赋值分页输出
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
		var_dump($config);
		$this->display();
	}
	public function delBoke(){
		if(IS_POST){
			$ids = $_POST['ids'];
			if (!empty($ids) && is_array($ids)) {
				foreach ($ids as $key => $value) {
					M('boke')->where(array('id' => $value ) )->delete();
				}
				$this->success('删除成功',U('index'));
			}else{$this->error("您没有勾选信息");}
			}else{
			$id=$this->_get('id');
			if(M('boke')->delete($id)){
				$this->success('删除成功',U('index'));
			}else{
				$this->error('删除失败，请重试...');
			}
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
			'tag' => $this->_post('tag'),
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
		import("ORG.Util.Form");
		$id=$this->_get('id');
		$this->data=M('boke')->find($id);
		$this->display();
	}
	public function runEditBoke(){
		$data=array(
			'title' => $this->_post('title'),
			'tag' => $this->_post('tag'),
			'type' => $this->_post('type'),
			'ispass' => $this->_post('ispass'),
			'content' => $this->_post('content'),
			'update_at'=>date('Y-m-d H:i',time()),
			'uname'=>$_SESSION['username'],
			);
		if(M('boke')->where(array('id'=>$this->_post('id')))->save($data)){
			$this->success('更新成功',U('index'));
		}else{
			$this->error('更新失败');
		}
	}
	function s(){

	}
	function uploadImg() {
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$savepath='./uploads/'.date('Ymd').'/';
		if (!file_exists($savepath)){
			mkdir($savepath);
		}
		$upload->savePath =  $savepath;// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			$msg=date('Ymd').'/'.$info[0]['savename'];
			$this->msg=$msg;
		}
		$load=M('photo');
		$load->create();
		$load->photo=$msg;
		$load->add();
		print_r(J(__ROOT__.'/'.$info[0]['savepath'].'/'.$info[0]['savename']));
	}

	function del() {
		$src=str_replace(__ROOT__.'/', '', str_replace('//', '/', $_GET['src']));
		if (file_exists($src)){
			unlink($src);
		}
		print_r($_GET['src']);
		exit();
	}
}
?>