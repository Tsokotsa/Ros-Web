
<!DOCTYPE html>
<html lang="en" data-style-switcher-options="{'showBordersStyle': true, 'showLayoutStyle': false, 'showBackgroundColor': false, 'borderRadius': '0', 'changeLogo': false, 'colorPrimary': '#E04622', 'colorSecondary': '#EEAB26', 'colorTertiary': '#EAEFF3', 'colorQuaternary': '#080808'}">

@include('includes.head')

	<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}">

		<div class="body">
            
			@include('includes.header')

			<div role="main" class="main">
				
				@yield('content')
				
			</div>

			@include('includes.footer')

		</div>
<!--
		<a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="master/less/skin-construction.less" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher" aria-label="Style Switcher"><i class="fas fa-cogs"></i><div class="style-switcher-tooltip"><strong>Style Switcher</strong><p>Check out different color options and styles.</p></div></a>
		
		<a class="envato-buy-redirect" href="https://ros.co.mz" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Buy Porto"><i class="fas fa-shopping-cart"></i></a>
		<a class="demos-redirect" href="index.html#demos" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Demos"><img alt="Demos" src="img/icons/demos-redirect.png" class="img-fluid" /></a>
		
-->
		<!-- Vendor -->		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="{{ url('assets/vendor/plugins/js/plugins.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ url('assets/js/theme.js') }}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{ url('assets/js/view.contact.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ url('assets/js/theme.init.js') }}"></script>
	</body>
</html>