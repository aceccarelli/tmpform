<?php
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Methods:GET, POST, OPTIONS");
header("Access-Control-Allow-Origin:https:sisloc1464960274.zendesk.com");
header("Access-Control-Max-Age:3600");
header("Content-Type:application/json;charset=utf-8");
json_encode(print_R($_POST));
?>
