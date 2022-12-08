<!doctype html>
<html>
    <head>
	<title>phptest02-简单计算器</title>
	<meta charset="utf-8" />
    </head>
    <body>
	<table border="1" align="center" with="400">
	    <caption>
		<h1>计算器</h1>
	    </caption>
	    <form action="" method="post">
		<tr>
		    <td>
			<input type="text" size="4" name="num1" />
		    </td>
		    <td>
			<select name="opt" >
			    <option value="+">+</option>
			    <option value="-">-</option>
			    <option value="x">x</option>
			    <option value="/">/</option>
			    <option value="%">%</option>
			</select>
		    </td>
		    <td>
			<input type="text" size="4" name="num2" />
		    </td>
		    <td>
			<input type="submit" name="sub" value="计算">
		    </td>
		</tr>
	    </form>
	    <?php
	    $mess = "";
	    if(isset($_POST['sub'])){
		if($_POST['num1']==""){
		    $mess = "第一个数不能为空!<br />";
		}
		elseif(!is_numeric($_POST['num1'])){
		    $mess = "第一个数必须是数字";
		}
		elseif($_POST['num2']==""){
	            $mess = "第二个数不能为空!<br />";
		}
		elseif(!is_numeric($_POST['num2'])){
		    $mess = "第二个数必须是数字";
		}
		elseif($_POST['opt'] == "/" && $_POST['num2'] == 0){
		    $mess = "除数不能为0";
		}
	    }
	    echo '<tr><td colspan="4">';
	    if($mess == "")
	    {
		$sum = 0;
		
		switch ($_POST['opt']){
		    case "+":
			$sum = $_POST['num1'] + $_POST['num2'];
		    case "-":
			$sum = $_POST['num1'] - $_POST['num2'];
		    case "x":
			$sum = $_POST['num1'] * $_POST['num2'];
		    case "/":
			$sum = $POST['num1'] / $_POST['num2'];
		    case "%":
			$sum = $_POST['num1'] % $_POST['num2'];
		}
		echo $sum;
	    }else{
		echo $mess;
		}
	    echo '</td></tr>';
	    	    
	    	    
	    ?>
	</table>
    </body>
</html>
