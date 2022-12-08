<?php
if($_FILES["file"]["error"] > 0 )
{
  echo "错误: " . $_FILES["file"]["error"] . "<br>";
}
else
{
  echo "上传文件名：" . $_FILES["file"]["name"] . "<br>";
  echo "文件类型：" . $_FILES["file"]["type"] . "<br>";
  echo "文件大小: " . $_FILES["file"]["size"]/1024 . "kb" .  "<br>";
  echo "文件临时存储位置: " . $_FILES["file"]["tmp_name"];
}

$temp = explode("." , $_FILES["file"]["name"]);
$extension = end($temp);
echo "<br>" . $extension;

$allowedExts = array("gif","jpeg","jpg","png");

if(($_FILES["file"]["type"] == "image/gif")
   || ($_FILES["file"]["type"] == "image/jpeg")
   || ($_FILES["file"]["type"] == "image/jpg")
   || ($_FILES["file"]["type"] == "image/png")
   & ($_FILES["file"]["size"] < 204800))
{
  if($_FILES["file"]["error"] > 0)
  {
    echo "错误：：" . $_FILES["file"]["error"] ."<br>";
  }
  else
  {
    echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
    echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
  }
}
else
{
  echo "非法的文件格式";
}

if(file_exists("upload/" . $_FILES["file"]["name"]))
{
  echo "文件已存在 <br>";
}
else
  {
move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
echo "文件存储在：" . "upload/" . $_FILES["file"]["name"];
}
?>
