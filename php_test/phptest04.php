<!doctype html>
<html>
    <head>
        <title>简单计算器</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <table border="1" align="center" width="400">
            <form action="" method="post">
                <caption><h1>计算器</h1></caption>
                <tr>
                    <td><input type="text" size="8" name="num1"  >"></td>
                    <td>
                        <select name="opt">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="X">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>
                        </select>
                    </td>
                    <td><input type="text" size="8" name="num2"></td>
                    <td><input type="submit" name="submit" value="计算"></td>
                </tr>
                <tr>
                    <?php
                    $mess = "";
                    if(isset($_POST['submit'])){
                        if($_POST['num1'] == ""){
                            $mess .="第一个数不能为空!<br>";
                        }else{
                            if(!is_numeric($_POST['num1'])){
                                $mess .="第一个数必须是数字!<br>";
                            }
                        }
                        if($_POST['num2'] == ""){
                            $mess .="第二个数不能为空!<br>";
                        }else{
                            if(!is_numeric($_POST['num2'])){
                                $mess .="第二个数必须是数字!<br>";
                            }else{
                                if($_POST['opt'] =="/" && $_POST['num2'] == 0)                                 {
                                    $mess .= "除数不能为0";
                                }
                            }
                        }
                        
                    }
                    if($mess == ""){
                        if($_POST['opt'] == "+"){
                            $mess = $_POST['num1'] + $_POST['num2'];
                        }
                        elseif($_POST['opt'] == "-"){
                            $mess = $_POST['num1'] - $_POST['num2'];
                        }
                        elseif($_POST['opt'] == "X"){
                            $mess = $_POST['num1'] * $_POST['num2'];
                        }
                        elseif($_POST['opt'] == "/"){
                            $mess = $_POST['num1'] / $_POST['num2'];
                        }
                        elseif($_POST['opt'] == "%"){
                            $mess = $_POST['num1'] % $_POST['num2'];
                        }
                    }

                    ?>
                    <td colspan="4"><?php echo $_POST['num1']. $_POST['opt'].$_POST['num2']." = " . $mess; ?></td>
                </tr>
            </form>
        </table>
      
    </body>
</html>
