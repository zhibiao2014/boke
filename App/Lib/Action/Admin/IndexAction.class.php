<?php  
/*
*
*/
Class IndexAction extends Action
{
	protected $db;
	public function index()
	{	
		//$db = M('Admin/Index');
		$this->db = D('Admin/Index');	
		$data=$this->db->select();
		$this->assign('data',$data);
		$this->display();
	}
	public function login(){

		$this->display();

	}
}
?>