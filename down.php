<?php
$u = isset($_GET['u'])?trim($_GET['u']):'';
$file = '';
if(!$u)
{
	die('error');
}
$arr = explode('/',$u);
$filename = $arr[count($arr)-1];
//$requestUrl = 'ip138.com';
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $u);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$body = curl_exec($ch);
curl_close($ch);
down($body,$filename);

function down($body, $filename)
{
	Header("Content-type: application/octet-stream");
	Header("Accept-Ranges: bytes");
	Header("Accept-Length: ".strlen($body));
	Header("Content-Disposition: attachment; filename=" . $filename);
	echo $body;
}
?>
