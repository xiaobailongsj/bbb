<?php
$key = "abc";
//print_r($_GET);
$hash_str=hash("sha256",$_GET['data'].$key);
if($hash_str==$_GET['sing']){
    echo "签名通过";
}else{
    echo "签名未通过缺少参数";
}