<!doctype html>
<html lang="en">
	<head>
	    <title>File Upload</title>
	</head>
	
	<body>
	@if (Session::has("message"))
	    {{ Session::get("message") }}
	@endif
	<hr />
	{{ Form::open(array('url' => '/', 'files' => true)) }}
	{{ Form::file('image'); }}
	{{ Form::submit('Upload File'); }}
	</body>
</html>