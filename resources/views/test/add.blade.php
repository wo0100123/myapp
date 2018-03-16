<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>我是test控制器的create</h1>
	<form action="/test" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		文件上传: <input type="file" name="myfile">
		<input type="submit">
	</form>
</body>
</html>