<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src='/js/jquery.min.js'></script>
</head>
<body>
	<form action="/form/add" method="post">
		{{ csrf_field()}}
		姓名: <input type="text">
		<input type="submit" value="提交">
	</form>
	<button>ajax</button>
	<script>
	// alert($);
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		$('button').eq(0).click(function(){

			$.post('/form/ajax',{},function(data){
				console.log(data);
			})

		})
	</script>
</body>
</html>