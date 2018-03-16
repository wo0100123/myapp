<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/admin/user/insert" method="post">
		{{ csrf_field() }}
		姓名: <input type="text">
		<input type="submit" value="提交">
	</form>
</body>
</html>