<!doctype html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8" />
  </head>
  <body>
    <form action="" method="post">
      <select type='radio' name="q">
        <option value="">选择一个站点：</option>
        <option value="RUNOOB">Runoob</option>
        <option value="GOOGLE">Google</option>
        <option value="TAOBAO">Taobao</option>
      </select>
      <br>
      <input type="submit" value=" 提交">
    </form>
    <?php
     // $q=isset($_POST['q']) ? htmlspecialchars($_POST['q']) : '';
     $q = htmlspecialchars($_POST['q']);

if($q){
  
    echo $q;
    echo "<br>";
    
}


     ?>
        
  </body>
</html>
