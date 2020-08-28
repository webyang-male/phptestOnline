<?php
//创建数据库连接
function db_connect(){	
	static $conn=null;
	if(!$conn){
		$ini=parse_ini_file("db.ini");
			//var_dump($ini);
			$conn=new mysqli($ini['host'],$ini['username'],$ini['password'],$ini['dbname'],$ini['port']);
		}
		$conn->set_charset('utf8');
		return $conn;
	}
	//db_connect();
	
	//预处理--绑定参数--处理结果集
	//执行预处理 增删改
	//select * from admin where id>?
	//$stmt->bind_param('i',$id);
	//$id=3;[3] [$name,$pwd]
	function db_stmt_exec($sql,$type,$params){
		$conn=db_connect();
		$stmt =$conn->prepare($sql);
		if($params!=[]){
			$params=(array)$params;
			//准备参数
			$p=[$type];
			foreach($params as &$p[]){}
			//绑定
			call_user_func_array(array($stmt,'bind_param'),$p);
		}
		// $stmt->bind_param('ss',$name,$pwd);
		$stmt->execute();
		return $stmt;
		
	}
	 // db_stmt_exec('','i',3);
	 
	 //查询，有结果集		1:一行，2:一个值，所有行（二维表）
	 function db_fetch($sql,$mode=0,$type='',$params=[]){
		 //执行预处理
		 $stmt=db_stmt_exec($sql,$type,$params);
		 $result=$stmt->get_result();
		  //根据需求取不同的结果
		  switch($mode){
			case  1: return $result->fetch_assoc();
			case  2:return current($result->fetch_row());
			default:return $result->fetch_all(MYSQLI_ASSOC);
		  }
	 }
	//var_dump(db_fetch('select * from admin where id>?',0,'i',2));
	 //phpinfo();
?>