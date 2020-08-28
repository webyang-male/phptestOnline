<?php
	require './init.php';
	//取id
	$id=getData('id','get','int');
	
	if($_POST){
		$in=[
			'question'=>getData('question','post','html'),
			'option1'=>getData('option1','post','html'),
			'option2'=>getData('option2','post','html'),
			'option3'=>getData('option3','post','html'),
			'option4'=>getData('option4','post','html'),
			'answer'=>getData('answer','post','html') ,
		];
		if($id==0){
			db_stmt_exec('insert into single(question,option1,option2,option3,option4,answer)value(?,?,?,?,?,?)','ssssss',$in);
		}else{
			$in['id']=$id;
			db_stmt_exec('update single set question=?,option1=?,option2=?,option3=?,option4=?,answer=? where id=?','ssssssi',$in);
		}
		display($id,[true,'数据提交成功']);
	}else{
		display($id,null);
	}
	
	display($id);
	
	function display($id=0,$msg=null){//如果$id==0，添加；否则为编辑
		//
		if($id==0){
			$data=['question'=>'','option1'=>'','option2'=>'','option3'=>'','option4'=>'','answer'=>''];
		}else{
			//根据id取对应的多选题数据
			$data=db_fetch('select * from single where id=?',1,'i',$id);
		}
		
		require'./view/single.html';
		exit();
	}  



?>