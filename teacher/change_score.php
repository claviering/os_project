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
	$score = $_POST["score"];

	//数据库数据选择,读信息
	$sql = "UPDATE student_score SET score='$score' WHERE name='$name' and subject='$subject'";
	mysqli_select_db( $conn, 'tmp' );  //选择数据库
	$retval = mysqli_query( $conn, $sql ); 
	if(!$retval )
	{
	    die('无法修改成绩: ' . mysqli_error($conn));
	}

	echo '修改成功';
?>