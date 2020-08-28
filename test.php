<?php
require 'init.php';
//从数据库得到试卷设置信息
$set=db_fetch('select * from testpaper order by id desc limit 1',1);
$_SESSION['set']=$set;
//从数据库取题目
//判断题
$bin=db_fetch('select * from judge order by rand() limit ?',0,'i',$set['bin']);
//保存判断题的答案
$_SESSION['binAnswer']=array_column($bin,'answer');
//单选题
$sin=db_fetch('select * from single order by rand() limit ?',0,'i',$set['sin']);
$_SESSION['sinAnswer']=array_column($sin,'answer');
//多选题
$mul=db_fetch('select * from multiple order by rand() limit ?',0,'i',$set['mul']);
$_SESSION['mulAnswer']=array_column($mul,'answer');
require './view/test.html';

?>