@php
defined('BASEPATH') OR exit('No direct script access allowed');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'Welcome to SuperAdmin')</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	@include('_css')
</head>
<body class="hold-transition register-page">

	@yield('content')

	@includeIf('_js')

</body>
</html>