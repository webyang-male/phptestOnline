<?php
	require 'init.php';
	
	if($_POST){
		$user=getData('username','post','string');
		$pwd=getData('password','post','string');
		$sql='select * from student where name=? and password=?';
		$result=db_fetch($sql,1,'ss',[$user,$pwd]);		//db_stmt_exec($sql,'ss',[$user,$pwd])
	
	if(!empty($result)){
		// echo 'success';
		$_SESSION['name']=$result['name'];
		$_SESSION['stuno']=$result['stuno'];
		//var_dump($result);
		header('location:index.php');
		}else{
			display([false,'登录失败']);
		}
	}else{
		display();
	}
	
 function display($msg=null){
		 	   require('./view/login.html');
			   exit();
		 }   
 	 
?>