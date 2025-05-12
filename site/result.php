<!doctype html>
<html>
    <head>
	<title>Book-O-Rama Search results</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<h1>Book-O-Rama Search results</h1>
	<?php
	$searchtype = $_POST['searchtype'];
	$searchterm = trim($_POST['searchterm']);

	if(!$searchtype || !$searchterm ){
	    echo '<p>You have not entered search detail. <br />
	          please go back and try again. </p>' ;
	    exit;
	}

	switch ($searchtype){
	    case 'Title':
	    case 'Author':
	    case 'ISBN':
		break;
	    default:
		echo '<p>That is not a valid search type. <br />
		      Please go back and try again. </p>';
		exit;
	}
	//以下开始连接数据库
	$db = new mysqli('localhost', 'root', 'cyq1980112', 'books');
	if(mysqli_connect_errno()){
	    echo '<p>Error: Could not connect to database. <br />
	          Please try again late. </p>';
	    exit;
	}

	$query = "select ISBN,Author,Title,Price from books where $searchtype=?";
	$stmt = $db->prepare($query);      //在预处理中加载查询语句
	$stmt->bind_param('s',$searchterm);     //绑定占位符参数
	$stmt->execute();       //执行查询
	$stmt->store_result();   //保存查询结果

	$stmt->bind_result($isbn, $author, $title, $price);  //绑定查询结果

	echo "<p>Number of books found: " .$stmt->num_rows. "</p>";

	while($stmt->fetch()){   //利用循环和fetch（）逐个读取查询结果
	    echo "<p><strong>Title: ". $title ."</strong><br />";
	    echo "Author: " . $author."<br />";
	    echo "ISBN: " . $isbn ."<br />";
	    echo "Price: " . number_format($price , 2) ."</p>";
	}

	$stmt->free_result(); //释放预处理
	$db->close();     //关闭数据库
	?>
    </body>
</html>
