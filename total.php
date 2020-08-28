<?php
	require 'init.php';
	$total=0;
	$set=$_SESSION['set'];
	//标准答案
	$bin=$_SESSION['binAnswer'];
	$sin=$_SESSION['sinAnswer'];
	$mul=$_SESSION['mulAnswer'];
	$bin1=null;
	$sin1=null;
	$mul1=null;
	$id=getData('id','get','int');
	if($_POST){//用户提交答案
	$in=[
		'stuno'=>getData('stuno','post','html'),
		'score'=>getData('score','post','html'),
	];
	$bin1=getData('binary','post','array');
	foreach($bin1 as $k=>$v){
		if($v==$bin[$k]){
			$total=$total+$set['bin1'];
		}
	}
	$sin1=getData('single','post','array');
	foreach($sin1 as $k=>$v){
		if($v==$sin[$k]){
			$total=$total+$set['sin1'];
		}
	}
	$mul1=getData('multiple','post','array');
	foreach($mul1 as $k=>$v){
		if(implode($v)==$mul[$k]){
			$total=$total+$set['mul1'];
		}
	}
	//var_dump($total);
	//将成绩写入考生系统
	$in=[
				'score'=>$total,		
				'stuno'=>$_SESSION['stuno']
			];
			db_stmt_exec('update student set score=? where stuno=?','si',$in);
	}else{
			display();
		}

	require './view/total.html';

?>