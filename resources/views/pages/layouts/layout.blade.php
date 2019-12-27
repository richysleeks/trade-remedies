<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<title>{{ env("APP_NAME") }} | Dashboard</title>
		
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		@include('pages.partials.style')
		@include('notify::messages')
	</head>

	<body class="kt-page--loading-enabled kt-page--loading kt-page--fluid kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--skin-light kt-aside__brand--skin-light kt-aside--static kt-page--loading">

		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__brand">
				<a class="kt-header-mobile__logo" href="index.html">
					<img alt="Logo" src="{{asset('assets/media/logos/logo-5-sm.png')}}" />
					Some text here
				</a>
			</div>

			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler">
					<span></span>
				</button>

				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler">
					<i class="flaticon-more-1"></i>
				</button>
			</div>
		</div>

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
					@include("pages.partials.header")

					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
						<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">

							@include("pages.partials.aside")

							@yield("content")
						</div>
					</div>

					@include("pages.partials.footer")
				</div>
			</div>
		</div>

		@include("pages.partials.notification")
		@include('pages.partials.script')
		@yield("script")
	</body>
</html>