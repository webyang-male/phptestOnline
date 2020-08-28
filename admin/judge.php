<?php
	require './init.php';
	//取id
	$id=getData('id','get','int');
	
	if($_POST){
		$in=[
			'question'=>getData('question','post','html'),
			'answer'=>getData('answer','post','html') ,
		];
		if($id==0){//添加
			db_stmt_exec('insert into judge(question,answer)value(?,?)','ss',$in);
		}else{//编辑
			$in['id']=$id;
			db_stmt_exec('update judge set question=?,answer=? where id=?','ssi',$in);
		}
		display($id,[true,'数据提交成功']);
	}else{
		display($id,null);
	}
	
	display($id);
	
	function display($id=0,$msg=null){//如果$id==0，添加；否则为编辑
		//
		if($id==0){
			$data=['question'=>'','answer'=>''];
		}else{
			//根据id取对应的多选题数据
			$data=db_fetch('select * from judge where id=?',1,'i',$id);
		}
		
		require'./view/judge.html';
		exit();
	}  



?>