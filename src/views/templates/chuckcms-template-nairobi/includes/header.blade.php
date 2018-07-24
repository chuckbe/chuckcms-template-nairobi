		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header floating-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{ URL::to('/') }}" class="standard-logo"><img src="{{ URL::to('/') }}{{ ChuckSite::getSetting('logo.href') }}" alt="ChuckCMS Logo"></a>
						<a href="{{ URL::to('/') }}" class="retina-logo"><img src="{{ URL::to('/') }}{{ ChuckSite::getSetting('logo.href') }}" alt="ChuckCMS Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">	

						{!! ChuckMenu::renderFrontEnd('chuckcms-template-nairobi') !!}

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->