<?php
	require './init.php';
	//display();
	if($_POST){
		//保存表单数据
		$in=[
			'setter'=>$_SESSION['username'],
			'setdate'=>date('Y-m-d'),
			'bin'=>getData('bin','post','int'),
		    'bin1'=>getData('bin1','post','int'),
			'sin'=>getData('sin','post','int'),
			'sin1'=>getData('sin1','post','int'),
			'mul'=>getData('mul','post','int'),
			'mul1'=>getData('mul1','post','int'),
			
		];
		//var_dump($in);
		//保存数据到数据库
		db_stmt_exec('insert into testpaper(setter,setdate,bin,bin1,sin,sin1,mul,mul1)values(?,?,?,?,?,?,?,?)','ssiiiiii',$in);
		display([true,'试卷设置完成']);
	}else{
		display();
	}


function display($msg=null){
		
		
		require './view/testset.html';
		exit();
	}  



?>