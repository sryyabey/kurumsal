<div>
    <section id="social-section" class="parallax-section parallax-banner-4 parallax-background social-section">
        <div class="parallax-overlay parallax-overlay-4"></div><!-- parallax overlay -->
        <div class="grid-container parallax-content">
            <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">

                <!-- parallax header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="parallax-header">
                        <h2 class="parallax-title"><span>{{ $setting->social_title }}</span></h2>
                        <p class="parallax-slogan">{!! $setting->social_description !!}</p>
                    </header>
                </div>
                <!-- close parallax header -->

                <div class="clear"></div>

                <!-- social network -->
                <ul class="social-network">
                    @forelse($socials as $social)
                        <li class="{{ $social->title }} grid-20 tablet-grid-20 mobile-grid-50">
                            <a class="social-link" href="{{ $social->link }}" target="_blank">
                                <span class="social-icon"><i class="icon-{{ $social->title }} icon-4x"></i></span>
                                <h3 class="social-title">{{ $social->title }}</h3>
                                <span class="social-info">Katıl</span>
                            </a>
                        </li>
                    @empty
                        <li class="facebook grid-20 tablet-grid-20 mobile-grid-50">

                        </li>
                    @endforelse
                    <!--
                        <li class="twitter grid-20 tablet-grid-20 mobile-grid-50">
                            <a class="social-link" href="#" target="_blank">
                                <span class="social-icon"><i class="icon-twitter icon-4x"></i></span>
                                <h3 class="social-title">Twitter</h3>
                                <span class="social-info">Get the Latest News</span>
                            </a>
                        </li>
                        <li class="google-plus grid-20 tablet-grid-20 mobile-grid-50">
                            <a class="social-link" href="#" target="_blank">
                                <span class="social-icon"><i class="icon-google-plus icon-4x"></i></span>
                                <h3 class="social-title">Google Plus</h3>
                                <span class="social-info">Join Our Circle</span>
                            </a>
                        </li>
                        <li class="youtube grid-20 tablet-grid-20 mobile-grid-50">
                            <a class="social-link" href="#" target="_blank">
                                <span class="social-icon"><i class="icon-youtube icon-4x"></i></span>
                                <h3 class="social-title">YouTube</h3>
                                <span class="social-info">View Exclusive Videos</span>
                            </a>
                        </li>
                        <li class="instagram grid-20 tablet-grid-20 mobile-grid-50">
                            <a class="social-link" href="#" target="_blank">
                                <span class="social-icon"><i class="icon-instagram icon-4x"></i></span>
                                <h3 class="social-title">Instagram</h3>
                                <span class="social-info">Latest Images</span>
                            </a>
                        </li>
                        -->
                </ul><!-- close social network -->

            </div><!-- close grid-100 -->
        </div><!-- close grid container -->
    </section><!-- close social section -->

</div>
