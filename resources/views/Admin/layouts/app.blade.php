<!DOCTYPE html>
<html lang="en">
<head>
	@include('Admin.layouts.headContent')
</head>
<body class="hold-transition skin-red sidebar-mini">
	<div class="wrapper">
		@include('Admin.layouts.header')

		@include('Admin.layouts.sidebar')

		<div class="content-wrapper">
			@section('body')
				@show
		</div>

		@include('Admin.layouts.footer')
	</div>

	@include('Admin.layouts.loadScripts')
</body>
</html>