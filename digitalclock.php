<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1" />
<title>Current Time of Server</title>
<style>
p {
color: black; font-size: 90px;
position: absolute; top: 50%;
left: 50%;
transform: translate (-50%, -50%);
}
body {
background-color: white;
}
</style>
<h1 style="text-align: center; color: blue;">Current Time of Server</h1>
<hr>
<p>
<?php
date_default_timezone_set('Asia/Kolkata');
echo date ("h: i : s A");
?>
</p>
</head>