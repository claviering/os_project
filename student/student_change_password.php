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
	$id = $_POST["id_input"];
	$new_password = $_POST["pw"];

	//数据库数据选择,读信息
	$sql_check = "SELECT user FROM login_info WHERE id='$id'";
	mysqli_select_db( $conn, 'tmp' );  //选择数据库
	$cheack_link = mysqli_query( $conn, $sql_check ); 
	while($check_row = mysqli_fetch_array($cheack_link, MYSQLI_ASSOC))
	{
		if ($check_row['user'] != "student")
		{
			echo "id错误";
			return 0;
		}
	}

	$sql = "UPDATE login_info SET password='$new_password' WHERE id='$id' and user='student'";  // 选择字段
	mysqli_select_db( $conn, 'tmp' );  //选择数据库
	$retval = mysqli_query( $conn, $sql ); 
	if(!$retval )
	{
	    die('无法修改密码: ' . mysqli_error($conn));
	}

	echo '修改成功';
?>