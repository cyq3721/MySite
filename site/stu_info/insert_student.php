<!doctype html>
<html>
    <head>
	<title>insert_student_php</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<h1>插入学生信息</h1>
	<?php
	$stu_name = $_POST['stu_name'];
	$stu_number = $_POST['stu_number'];
	$stu_gender = $_POST['stu_gender'];

	echo $stu_name . "<br />" . $stu_number . "<br />". $stu_gender;
	if(!isset($_POST['stu_name']) || !isset($_POST['stu_number']) || !isset($_POST['stu_gender'])){
	    echo "<p>你必须输入所有的信息！<br />
	            请返回重新输入学生信息！</p>";
	    exit;
	}


	$db = new mysqli('localhost', 'root','cyq1980112', 'stu_info');
	if(mysqli_connect_errno()){
	    echo "<p>Error: 无法连接到数据库。<br />
	          请重新尝试! </p>";
	}

	$query = "insert into stu_info value (?,?,?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param('sss',$stu_name,$stu_number,$stu_gender);
	$stmt->execute();

	if($stmt->affected_rows > 0){
	    echo "<p>成功插入数据库！</p>";
	}else{
	    echo "<p>插入数据库失败! </p>";
	}
	$db->close();
	?>
    </body>
</html>
