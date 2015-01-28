<?php  
/*
*
*/
Class IndexAction extends Action
{
	protected $db;
	function  __contruct(){
		$this->db = D('IndexModel');
	}
	public function index()
	{
		$biao = $this->db->select();
		var_dump($biao);
		exit();
		$this->display();
	}
}
?>