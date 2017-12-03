<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	{foreach $aaa as $v}
	<h3>{$v["title"]}</h3>
	<p>{$v["con"]}</p>
	<img src="{$v['imgurl']}" alt="">
	{/foreach}
</body>
</html>