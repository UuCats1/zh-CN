<?php

// 获取客户端IP地址
$ip = $_SERVER['REMOTE_ADDR'];

// 准备JSON响应
$response = array();
$response['ip'] = $ip;

// 输出JSON响应
header('Content-Type: application/json');
echo json_encode($response);

?>
