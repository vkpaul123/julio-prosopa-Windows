<!DOCTYPE html>
<html lang="en">
<head>
	@include('User.layouts.headContent')
</head>
<body class="hold-transition skin-green sidebar-mini" id="body">
	<div class="wrapper">
		@include('User.layouts.header')

		@include('User.layouts.sidebar')

		<div class="content-wrapper">
			@section('body')
				@show
		</div>

		@include('User.layouts.footer')
	</div>

	@include('User.layouts.loadScripts')
</body>
</html>