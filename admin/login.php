<?php
  define('NEED_CHECK',false);
  require 'init.php'; 
  $a=getData('a','get');
  if($a=='logout'){//用户点击退出
	  //清除用户的session
	  unset($_SESSION['username']);
	  display();
  }else{
	  //如果用户提交登陆数据,取数据--验证
	  if($_POST){
	  	   //取数据项,先验证验证码.如果验证码正确,在进行用户名和密码的验证,否则重新输入
	  	   $code=getData('captcha','post');
	  	   $code2=$_SESSION['code'];//系统生成的验证码
	  	   if(strtoupper($code)==$code2){//如果验证码正确则进行用户名和密码的验证
	  		       $name=getData('username','post');
	  		 	   $pwd=getData('password','post');
	  		 	   //验证
	  			   $conn=db_connect();
	  		 	   $sql='select * from admin where name=? and password=?';
	  		 	   $stmt =$conn->prepare($sql);
	  		 	   $stmt->bind_param('ss',$name,$pwd);
	  		 	   $stmt->execute();
	  		 	   $result=$stmt->get_result();
	  		 	   if($result->num_rows>0){//登陆成功
	  			     //将用户名存在session
	  				 //$_SESSION['username']=($result->fetch_assoc())['name'];
	  			      $_SESSION['username']=$name;
	  		 		   header('location:index.php');		   
	  		 	   }else{//登陆失败
	  		 		   display([false,'用户或密码错误!']);
	  		 	   }
	  			   }else{
	  				   display([false,'验证码不正确!']);
	  			   }
	  		 }else{
	  		 	   display();
  }
  }
		 function display($msg=null){
		 	   require('./view/login.html');
		 }   
?>