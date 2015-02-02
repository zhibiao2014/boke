<?php  
/*
*
*/
Class IndexAction extends CommonAction
{	
	public function index()
	{	
		$db = M('users');
		$this->user=$db->find($id);
		$this->display();
	}
	public function copy()
	{
		$db = M('users');
		$this->user=$db->count();
		$this->lock=$db->where( array( 'lock'=>1 ) )->count();
		$this->display();
	}


	public function loginOut(){
		$id=$_SESSION['uid'];
		$db=M('users');
		$db->logintime=$_SESSION['now'];
		$db->where(array('user_id' =>$id))->save();
		session_unset();
		session_destroy();
		redirect(U('Login/index'));
	}
}
?>