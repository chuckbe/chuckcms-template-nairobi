<!DOCTYPE html>
<html dir="ltr" lang="{{ LaravelLocalization::getCurrentLocale()}}" itemscope itemtype="http://schema.org/Article">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
@yield('meta')
<!-- Stylesheets -->
@if(array_key_exists('raw', $template->fonts))
<link href="https://fonts.googleapis.com/css?family={{ $template->fonts['raw'] }}" rel="stylesheet" type="text/css" />
@endif
@foreach($template->css as $cssKey => $cssValue)
	@if($cssValue['asset'] == 'true')
	<link rel="stylesheet" href="{{ asset($cssValue['href']) }}" type="text/css" />
	@endif
	@if($cssValue['asset'] == 'false')
	<link rel="stylesheet" href="{{ $cssValue['href'] }}" type="text/css" />
	@endif
@endforeach
@yield('css')
<!-- Document Title -->
<title>
@yield('title')
</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@include('chuckcms-template-nairobi::templates.' . $template->slug . '.includes.header')
			@yield('content')
		@include('chuckcms-template-nairobi::templates.' . $template->slug . '.includes.footer')

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	@foreach($template->js as $jsKey => $jsValue)
		@if($jsValue['asset'] == 'true')
			<script src="{{ asset($jsValue['href']) }}"></script>
		@endif
		@if($jsValue['asset'] == 'false')
			<script src="{{ $jsValue['href'] }}"></script>
		@endif
	@endforeach
	@yield('scripts')
</body>
</html>