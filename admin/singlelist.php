<?php
	require './init.php';
	

$a=getData('a','get','string');
if($a=='del'){
	$delID=getData('id','get','int');
	db_stmt_exec('delete from single where id=?','i',$delID);
	display([true,'删除成功']);
}else{
	display();
}

function display($msg=null){
		//取数据库出多选题
		$data=db_fetch('select * from single');
		require'./view/singlelist.html';
		//var_dump($data);
		exit();
	}  



?>