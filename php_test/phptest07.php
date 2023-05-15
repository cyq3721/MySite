<?php
$contact = array("ID" => 1,
                 "姓名" => "高某",
                 "公司" => "A公司",
                 "地址" => "北京市",
                 "电话" => "(010)98765432",
                 "EMAIL" => "gao@brophp.com"
);
echo '<dl>一个联系人信息:';
while (list($key, $value) = each($contact)){
    echo "<dd>$key : $value </dd>";
}
echo '</dl>';

reset($contact);
echo '第一个元素：' . key($contact) . '=>' . current($contact) . '<br>';

next($contact);
echo '第二个元素：' . key($contact) . '=>' . current($contact) . '<br>';

?>
