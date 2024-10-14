<div>
    <section id="service-section" class="parallax-section parallax-banner-3 parallax-background service-section">
        <div class="parallax-overlay parallax-overlay-3"></div>
        <div class="grid-container parallax-content">
            <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">

                <!-- entry header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="parallax-header">
                        <h2 class="parallax-title"><span>{{ $setting->services_title }}</span></h2>
                        <p class="parallax-slogan">{!! $setting->services_description !!}</p>
                    </header>
                </div>
                <!-- close entry header -->

                <!-- icon box 1 -->
                @forelse($services as $service)
                    <div class="grid-33 mobile-grid-100 tablet-grid-100">
                        <div class="box-fade icon-box">
                            <div class="arrow-right"></div>
                            <i class="{{ $service->icon }} icon-4x service-icon"></i>
                        </div>
                        <div class="box-fade info">
                            <h3>{{ $service->title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($service->description,50) }}</p>
                        </div>
                    </div>
                @empty
                    <div class="grid-33 mobile-grid-100 tablet-grid-100">
                        <div class="box-fade icon-box">
                            <div class="arrow-right"></div>
                            <i class="icon-time icon-4x service-icon"></i>
                        </div>
                        <div class="box-fade info">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                @endforelse
                <!-- close icon box -->

                <!-- icon box 2
                <div class="grid-33 mobile-grid-100 tablet-grid-100">
                    <div class="box-fade icon-box">
                        <div class="arrow-right"></div>
                        <i class="icon-globe icon-4x service-icon"></i>
                    </div>
                    <div class="box-fade info">
                        <h3>Systems Integration</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    </div>

                </div><!-- close icon box -->

                <!-- icon box 3
                <div class="grid-33 mobile-grid-100 tablet-grid-100">
                    <div class="box-fade icon-box">
                        <div class="arrow-right"></div>
                        <i class="icon-umbrella icon-4x service-icon"></i>
                    </div>
                    <div class="box-fade info">
                        <h3>Support</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    </div>
                </div><!-- close icon box -->

            </div><!-- close grid-100 -->
        </div><!-- close grid container -->
    </section><!-- close service section -->

</div>
