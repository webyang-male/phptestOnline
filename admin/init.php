<?php
   error_reporting(-1);
   session_start();
   require('../common/function.php');
   require('../common/db.php');
   
   //登陆状态验证
   if(!defined('NEED_CHECK')){
	   if(!isset ($_SESSION['username'])){//未登陆
	   	  
	   	   header('location:login.php');
	   }
   }
  
?>