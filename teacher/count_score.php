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
	$selected = $_POST["select"];

	switch ($selected) 
	{
		case '合格':
			$sql = "SELECT name, subject, score FROM student_score WHERE score>59";
			break;
		case '不合格':
			$sql = "SELECT name, subject, score FROM student_score WHERE score<60";
			break;
		case '最高分':
			$sql = "SELECT name, subject, score FROM student_score ORDER BY score DESC";
			break;
		case '最低分':
			$sql = "SELECT name, subject, score FROM student_score ORDER BY score ASC";
			break;
		case '平均分':
			$sql = "SELECT score FROM student_score";
			break;
	}

	mysqli_select_db( $conn, 'tmp' );  //选择数据库
	$retval = mysqli_query( $conn, $sql ); 
	if(!$retval )
	{
	    die('无法查询成绩: ' . mysqli_error($conn));
	}

	if ($selected == '平均分')
	{
		$num = 0;
		$sum = 0;
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
		{
			$sum = $sum + $row['score'];
			$num = $num + 1;
		}
		echo "平均分：".$sum/$num;

	}
	else
	{
		$display = "";
		$display = $display.'<table border="1"<tr><td>姓名</td><td>科目</td><td>成绩</td></tr>';
		// echo '<table border="1"<tr><td>科目</td></tr>';
		while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
		{
			$display = $display . "<tr><td>{$row['name']}</td><td>{$row['subject']}</td><td>{$row['score']}</td></tr>";
		}

		$display = $display.'</table>';
		echo $display;
	}
?>