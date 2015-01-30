<?php  
/*
*
*/
Class IndexAction extends Action
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
		session_unset();
		session_destroy();
		redirect(U('Login/index'));
	}
}
?>