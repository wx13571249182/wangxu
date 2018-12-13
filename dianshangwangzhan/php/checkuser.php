<?php
	header("Content-type:text/html;charset=utf-8");
	
	//一、接收数据
	$username = $_GET['user'];
	
	//二、从数据库中查询
	$conn = mysql_connect("localhost","root","root");
	if(!$conn){
		//die("连接失败".mysql_error());
		//三、响应
	}else{
		//2、选择数据库
		mysql_select_db("mydb1808",$conn);
		
		//3、执行SQL语句

		$sqlstr="select * from  usertable where username='$username'";
		$result = mysql_query($sqlstr,$conn);		
		//4、关闭数据库
		mysql_close($conn);
		
		if(mysql_num_rows($result)==0){			
			//三、响应
			echo "亲，恭喜您，该名字没有人用，赶紧注册吧！";
		}else{
			echo "亲，不好意思，已经被人使用！";
		}
	}
?>