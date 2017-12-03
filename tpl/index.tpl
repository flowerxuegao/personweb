<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{$css}index.css">
</head>
<body>
	{foreach $aaa as $v}
	<ul>
		<li><a href="index.php?m=admin&c=show&a=show&id={$v['id']}">{$v["title"]}</a></li>
	</ul>
	{/foreach}
</body>
</html>