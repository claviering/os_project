<?php
	//数据库连接
	$dbhost = 'localhost:3306';  // mysql服务器主机地址
	$dbuser = 'root';            // mysql用户名
	$dbpass = '';          // mysql用户名密码
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	    die('Could not connect: ' . mysqli_error());
	}
	// $tmp = "数据库连接成功!";
	//echo $tmp;
	//echo "<br>";

	//从表单获取信息
	$name = $_POST["name"];
	$subject = $_POST["subject"];

	//数据库数据选择,读信息
	$sql = "DELETE FROM student_score WHERE name='$name' and subject='$subject'";  // 选择字段
	mysqli_select_db( $conn, 'tmp' );  //选择数据库
	$retval = mysqli_query( $conn, $sql ); 
	if(!$retval )
	{
	    die('无法删除成绩: ' . mysqli_error($conn));
	}

	echo '删除成功';
?>