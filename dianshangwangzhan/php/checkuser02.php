<?php
	header("Content-type:text/html;charset=utf-8");
	
	//一、接收数据
	$denid = $_GET['denid'];
	
	//二、从数据库中查询
	$conn = mysql_connect("localhost","root","root");
	if(!$conn){
		//die("连接失败".mysql_error());
		//三、响应
	}else{
		//2、选择数据库
		mysql_select_db("test",$conn);
		
		//3、执行SQL语句

		$sqlstr="select * from  denglu where denid='$denid'";
		$result = mysql_query($sqlstr,$conn);		
		//4、关闭数据库
		mysql_close($conn);
		
		if(mysql_num_rows($result)==0){			
			//三、响应
			echo "0";//没有人注册
		}else{
			echo "1";//已经有人注册了
		}
	}
?>