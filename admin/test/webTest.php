<from action="webTest.php">
	<fieldset>
		<legend>注册信息</legend>
	姓名:<input type="text"  name="name"/><br/>
	年龄:<input type="text"  name="age" /><br/>
	性别:<input type="radio"  name="gen" value="male"/>男<input type="radio" name="gen" value="female" />女<br/>
	爱好:<input type="checkbox"  name="hobby" value="reading"/>看书
	    <input type="checkbox"  name="hobby" value="muisc"/>音乐
		<input type="checkbox"  name="hobby" value="game"/>游戏
	<br/>
	个人简历:<textarea   name="des"></textarea><br/>
	</fieldset>
	<input type="submit" />
</from>
<!-- 通过地址栏提交数据  -->
<?php
if($_POST){//判断用户是否点击了提交按钮
	var_dump($_POST);
}
if($_GET){//判断用户是否点击了超链接
	var_dump($_GET);
}

//某一项数据.数据提交方式,数据类型默认值
function  getData($var,$method,$type='string',$default=''){
	switch($method){
		case 'get' :  $method=$_GET;
		break;
		case 'post':  $method=$_POST;
	}
	$value =isset($method[$var])?$method[$var]:$default;//取到的数据项
   //处理数据项
   switch($type){
	   case 'string' : $value=is_string($value)?$value:'';
	   break;
	   case 'int' :$value=(int)$value;
	   break;
	   case 'float' :$value=(float)$value;
	   break;
	   case 'id' :$value=max((int)$value,0);
	   break;
       case 'bool' :$value=(bool)$value:'';
       break;
	   case 'array' :$value=is_array($value)?$value:[];
	   break;
	   case 'html' :$value=str_replace(' ','&nbsp;',trim(htmlspecialchars($value)));
	   break;
   
   }
   return $value;
}
?>