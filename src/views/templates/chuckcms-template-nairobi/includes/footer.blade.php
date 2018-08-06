		<!-- Footer
		============================================= -->
		<footer id="footer">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; {{ date('Y') }} All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							@if(ChuckSite::getSetting('socialmedia.facebook') !== null)
							<a href="{{ ChuckSite::getSetting('socialmedia.facebook') }}" class="social-icon si-small si-light si-rounded si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							@endif
							@if(ChuckSite::getSetting('socialmedia.twitter') !== null)
							<a href="{{ ChuckSite::getSetting('socialmedia.twitter') }}" class="social-icon si-small si-light si-rounded si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							@endif
							@if(ChuckSite::getSetting('socialmedia.googleplus') !== null)
							<a href="{{ ChuckSite::getSetting('socialmedia.googleplus') }}" class="social-icon si-small si-light si-rounded si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							@endif
							@if(ChuckSite::getSetting('socialmedia.pinterest') !== null)
							<a href="{{ ChuckSite::getSetting('socialmedia.pinterest') }}" class="social-icon si-small si-light si-rounded si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>
							@endif
							@if(ChuckSite::getSetting('socialmedia.vimeo') !== null)
							<a href="{{ ChuckSite::getSetting('socialmedia.vimeo') }}" class="social-icon si-small si-light si-rounded si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>
							@endif
							@if(ChuckSite::getSetting('socialmedia.github') !== null)
							<a href="{{ ChuckSite::getSetting('socialmedia.github') }}" class="social-icon si-small si-light si-rounded si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>
							@endif
							@if(ChuckSite::getSetting('socialmedia.yahoo') !== null)
							<a href="{{ ChuckSite::getSetting('socialmedia.yahoo') }}" class="social-icon si-small si-light si-rounded si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>
							@endif
							@if(ChuckSite::getSetting('socialmedia.linkedin') !== null)
							<a href="{{ ChuckSite::getSetting('socialmedia.linkedin') }}" class="social-icon si-small si-light si-rounded si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
							@endif
						</div>

						<div class="clear"></div>

					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->