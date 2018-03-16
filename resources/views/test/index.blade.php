<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>我是列表页</h1>
	<form action="/test/111" method="post">
	{{ method_field('DELETE') }}
	{{ csrf_field() }}
	<button>删除</button>
	</form>
</body>
</html>