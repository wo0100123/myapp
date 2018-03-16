<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/test/100" method="post">
		<h1>edit嗯嗯</h1>
		{{ method_field('PUT') }}
		{{ csrf_field()}}
		<button>修改</button>
	</form>
</body>
</html>