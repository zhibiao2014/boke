<?php  
Class CommonAction extends Action {
	Public function _initialize () 
	{
		if (!isset($_SESSION['uid']) || !isset($_SESSION['username'])) 
		{
			redirect(U('Admin/Login/index'));
		}
}
?>