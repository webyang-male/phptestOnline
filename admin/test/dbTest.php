<?php
$host='127.0.0.1';
$username='root';
$password='';
$dbname='mytest';
$port='3306';
//$conn=new mysqli($host,$username,$password,$dbname,$port);
$conn=mysqli_connect($host,$username,$password,$dbname,$port);
//1查询数据
$result=$conn->query('select * from admin');
/*$re=mysqli_fetch_row($result);
$re=mysqli_fetch_assoc($result);
$re=mysqli_fetch_array($result);
$re=mysqli_fetch_all($result);
var_dump($re);*/
//$re=mysqli_fetch_all($result,MYSQLI_ASSOC);


//2修改数据
//$conn->query('update admin set password="111" where name="祝雅"');

//3.添加数据
//$conn->query('insert into admin(name,password) values("ccc","333")');

//4.删除数据
$conn->query('delete from admin where name="ccc"');
$result=$conn->query('select * from admin');
$re=mysqli_fetch_all($result,MYSQLI_BOTH);
//预处理(比直接执行sql语句要安全,效率高)
?>

<table>
	<tr>
		<th>序号</th>
		<th>用户名</th>
		<th>密码</th>
	</tr>
	
	<?php
		foreach($re as $v){
			/*var_dump($v);
			echo '<br/>';*/
			echo '<tr>';
			//echo '<th>'.$v[0].'</th>'.'<th>'.$v[1].'</th>'.'<th>'.$v[2].'</th>';
			echo '<th>'.$v['id'].'</th>'.'<th>'.$v['name'].'</th>'.'<th>'.$v['password'].'</th>';
			echo '</tr>';
		}
	?>
</table>