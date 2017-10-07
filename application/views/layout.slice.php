@php
	defined('BASEPATH') OR exit('No direct script access allowed');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Welcome to SuperAdmin')</title>

	@include('_css')
	@includeIf('_js')
</head>
<body>

<div id="container">
	@yield('page_title', '<h1>Welcome to SuperAdmin</h1>')

	<div id="body">
		@yield('content')
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
