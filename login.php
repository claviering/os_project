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

	//获取登录信息
	$name = $_POST["username"];
	$password = $_POST["password"];
	$admin_user = "admin";
	$student_user = "student";
	$teacher_user= "teacher";
	// echo "username ".$name."password ".$password;

	//数据库数据选择,读信息
	$sql = 'SELECT user,id, password FROM login_info';  // 选择字段
	mysqli_select_db( $conn, 'tmp' );  //选择数据库
	$retval = mysqli_query( $conn, $sql ); 
	if(!$retval )
	{
	    die('无法读取数据: ' . mysqli_error($conn));
	}
	while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
	{
		// echo "id "."$row[id]"."password "."$row[password]";
		$db_user = $row['user'];
		$db_id = $row['id'];
		$db_passwd = $row['password'];
		if ($db_id == $name && $db_passwd == $password && $db_user == $admin_user)
		{
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=admin/admin.html">';	
			break;
		}
		else if ($db_id == $name && $db_passwd == $password && $db_user == $student_user)
		{
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=student/student.html">';	
			break;
		}
		else if ($db_id == $name && $db_passwd == $password && $db_user == $teacher_user)
		{
			echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=teacher/teacher.html">';	
			break;
		}
	}


?>