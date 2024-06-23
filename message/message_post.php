<!doctype html>
<html>
    <head>
	<title>message post</title>
	<meta charset="utf-8" />
	<style type="text/css">
	 td.title {
	     height:10px;
	     background-color:#006699;
	 }
	 td.title_1 {
	     height:30;
	     background-color:#99ccff;
	 }
	 td.title_2{
	     height:23;
	 }
	 div {
	     text-align:center;
	 }
	</style>
    </head>
    <body>
	<form name="form1" method="post" action="message_process.php?check=add">
	    <table width="481" border="1" cellpadding ="0" cellspacing="0" align="center">
		<tr>
		    <td>
			<table width="480" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#000099">
			    <tr>
				<td class="title" colspan="2">
				    <div  >
					<font color="#eeeeee" size="4">访问者留言板</font>
				    </div>
				</td>
			    </tr>
			    <tr>
				<td class="title_1" >
				    <div >留言人</div>
				</td>
				<td class="title_1">
				    <input type="text" name="user" size="20">
				</td>
			    </tr>
			    <tr>
				<td class="title_2" >
				    <div>e-mail</div>
				</td>
				<td class="title_2">
				    <input type="text" name="email" size="36">
				</td>
			    </tr>
			    <tr>
				<td class="title_1">
				    <div align="center">留言主题</div>
				</td>
				<td class="title_1">
				    <input type="text" name="title" size="36">
				</td>
			    </tr>
			    <tr>
				<td height="80">
				    <div align="center">留言内容</div>
				</td>
				<td height="80">
				    <p>
					<textarea  name="contern" row="20" cols="35"></textarea>
					<br />
				    </p>
					
				</td>
			    </tr>
			    <tr>
				<td height="25" colspan="2" bgcolor="#006699">
				    <div align="center">
					<input type="reset" name="Reset" value="清除重填">
					<input type="submit" name="Submit" value="送出留言">
				    </div>
				</td>
			    </tr>
		    </td>
		</tr>
		
	    </table>
	</form>
    </body>
</html>
