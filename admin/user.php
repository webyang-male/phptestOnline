<?php
	require  './init.php';
	$a=getData('a','get','string');
	if($a=='del'){//用户点击删除
		$delID=getData('id','get','int');
		db_stmt_exec('delete from student where id=?','i',$delID);
		display([true,'数据删除成功']);
	}else{
		if($_POST){
		//var_dump($_POST);
		//添加
		addData();
		//修改
		saveData();
		if(isset($_FILES['imp'])){
						if(move_uploaded_file($_FILES['imp']['tmp_name'],'../upload/'.$_FILES['imp']['name'])){
							$filepath='../upload/'.$_FILES['imp']['name'];
							$resultdata=importExecl($filepath,$sheet=0);
							//ar_dump($resultdata);
							//将得到的数据添加到数据库表中
							foreach($resultdata as $v){
							db_stmt_exec('insert into student(stuno,name,password) values(?,?,?)','sss',[$v['A'],$v['B'],$v['B']]);
							}
						}
					}
					display([true,'数据提交成功']);
				}else{
					display();
				}
			}
	
	
	//添加
	function addData(){
		$data=getData('add','post','array');
		if(!empty($data)){
			foreach($data as $v){
				db_stmt_exec('insert into student(name,stuno,password)values(?,?,?)','sss',[$v['name'],$v['stuno'],md5($v['stuno'])]);
			}
		}
	}
	//修改
	function saveData(){
		$data=getData('save','post','array');
		if(!empty($data)){
			foreach($data as $k=>$v){
				db_stmt_exec('update student set name=? where id=?','si',[$v['name'] ,$k]);
			}
		}
	}
	
	function display($msg=null){
		//取得考生信息（和数据库相关 链接--预处理--绑定参数--处理结果集）
		$data=db_fetch('select * from student');
		//var_dump($data);
		require'./view/user.html';
		exit();
	}   
?>