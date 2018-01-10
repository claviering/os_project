<?php
	$dbhost = 'localhost:3306';  // mysql服务器主机地址
	$dbuser = 'root';            // mysql用户名
	$dbpass = '';          // mysql用户名密码
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	    die('Could not connect: ' . mysqli_error());
	}
	// $tmp = "数据库连接成功!";
	// echo $tmp;

	$add_subject = $_POST["score"];
	//数据库数据选择,读信息
	$sql = 'SELECT subject FROM test_subject';  // 选择字段
	mysqli_select_db( $conn, 'tmp' );  //选择数据库
	$retval = mysqli_query( $conn, $sql ); 
	if(!$retval )
	{
	    die('无法读取数据: ' . mysqli_error($conn));
	}

	$display = "";
	$display = $display.'<table border="1"<tr><td>科目</td></tr>';
	// echo '<table border="1"<tr><td>科目</td></tr>';
	while($row = mysqli_fetch_array($retval, MYSQLI_NUM))
	{
		$display = $display . "<tr><td>{$row[0]}</td>"."</tr>";
	}

	$display = $display."<tr><td>{$add_subject}</td>"."</tr>";
	$display = $display.'</table>';
	echo $display;
	$insect_sql = "INSERT INTO test_subject (subject) VALUES ('$add_subject')";
	$result_insert = mysqli_query($conn, $insect_sql);
	if(! $result_insert )
	{
	  die('无法插入数据: ' . mysqli_error($conn));
	}
	echo "数据插入成功\n";
?>
