<!doctype html>
<html>
  <head>
    <title>文件上传服务器端处理</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>文件上传服务器端处理</h1>
    <?php
    $allowExts = array("gif","jpeg","jpg","png");
    $temp = explode(".",$_FILES["file"]["name"]);
    $exts = end($temp);
    if($_FILES["file"]["error"] >0 ){
      echo "错误: " . $_FILES["file"]["error"] . "<br>";
    }
    else{
      if(!in_array($exts,$allowExts)){
        echo "文件类型出错，该类型不支持上传！ <br>";
      }else{
        echo "上传文件名：" . $_FILES["file"]["name"]."<br>";
        echo "文件类型：" . $_FILES["file"]["type"]."<br>";
        echo "文件大小：" . ($_FILES["file"]["size"]/1024/1024)." mb <br>";
        echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"]."<br>";
      }
    }
    if(file_exists("upload/" . $_FILES["file"]["name"]))
    {
      echo "文件已经存在！";
    }
    else{
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);

      if(file_exists("upload/" . $_FILES["file"]["name"]))
      {
        echo "文件上传成功！";
        
      }
      else
        echo "文件上传失败！";
      }
    ?>
  </body>
</html}
