
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	
	<title>joost van veen blog - Tutsplus</title>

	{{ HTML::style('css/admin.css')}}


</head>
<body>
	

	<header>

		<div class="container">
			<h1> Admin Panel </h1>

		</div>	

	</header>

	<main class="container">
		@yield('content')

	</main>
	
	<footer>
		<div class="container">
			&copy {{ date('Y') }} My Awesome Company
		</div>
	</footer>

</body>
</html>
