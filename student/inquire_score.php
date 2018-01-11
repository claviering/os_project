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
	$selected_subject = $_POST["select"];

	//数据库数据选择,读信息
	if ($selected_subject == "all")
		$sql = "SELECT subject, score FROM student_score";  // 选择字段
	else
		$sql = "SELECT subject, score FROM student_score WHERE subject='$selected_subject'";  // 选择字段
	mysqli_select_db( $conn, 'tmp' );  //选择数据库
	$retval = mysqli_query( $conn, $sql ); 
	if(!$retval )
	{
	    die('无法查询成绩: ' . mysqli_error($conn));
	}

	$display = "";
	$display = $display.'<table border="1"<tr><td>科目</td><td>成绩</td></tr>';
	// echo '<table border="1"<tr><td>科目</td></tr>';
	while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
	{
		$display = $display . "<tr><td>{$row['subject']}</td><td>{$row['score']}</td></tr>";
	}

	$display = $display.'</table>';
	echo $display;
	echo '查询成功';
?>