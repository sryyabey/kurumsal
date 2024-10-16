<div>
    <section id="team-section" class="team-section content-section">
        <div class="grid-container">

            <!-- section header -->
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="section-header">
                    <h2 class="section-title"><span>{{ $setting->team_title }}</span></h2>
                    <p class="section-slogan textcolor">{!! $setting->team_description !!}</p>
                </header>
            </div>
            <!-- close section header -->

            <div class="clear"></div>

            <!-- member 1 -->
            @forelse($teams as $team)
                <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                    <figure class="member-photo"><img src="{{ $team->getProfileImageUrl() }}" alt="member"></figure>

                    <div class="member-box">
                        <h3>{{ $team->getFullNameAttribute() }}</h3>
                        <span class="textcolor">{{ $team->position }}</span>
                    </div>

                </div>
            @empty
                <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                    <figure class="member-photo"><img src="images/member1.jpg" alt="member"></figure>

                    <div class="member-box">
                        <h3></h3>
                        <span></span>
                    </div>

                </div>
            @endforelse
            <!-- close member -->

            <!-- member 2
            <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                <figure class="member-photo"><img src="images/member2.jpg" alt="member"></figure>

                <div class="member-box">
                    <h3>Jesse Pinkman</h3>
                    <span>Manufacturer</span>
                </div>

            </div><!-- close member -->

            <!-- member 3
            <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                <figure class="member-photo"><img src="images/member3.jpg" alt="member"></figure>

                <div class="member-box">
                    <h3>Mike Ehrmantraut</h3>
                    <span>Private Investigator</span>
                </div>

            </div><!-- close member -->

            <!-- member 4
            <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                <figure class="member-photo"><img src="images/member4.jpg" alt="member"></figure>

                <div class="member-box">
                    <h3>Gustavo Fring</h3>
                    <span>Philanthropist</span>
                </div>

            </div><!-- close member -->

            <!-- member 5
            <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                <figure class="member-photo"><img src="images/member5.jpg" alt="member"></figure>

                <div class="member-box">
                    <h3>Wendy S.</h3>
                    <span>The Crossroads Motel</span>
                </div>

            </div><!-- close member -->

            <!-- member 6
            <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                <figure class="member-photo"><img src="images/member6.jpg" alt="member"></figure>

                <div class="member-box">
                    <h3>Skyler White</h3>
                    <span>Bookkeeper</span>
                </div>

            </div><!-- close member -->

            <!-- member 7
            <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                <figure class="member-photo"><img src="images/member7.jpg" alt="member"></figure>

                <div class="member-box">
                    <h3>Saul Goodman</h3>
                    <span>Manager</span>
                </div>

            </div><!-- close member -->

            <!-- member 8
            <div class="member-box grid-25 mobile-grid-100 tablet-grid-50">
                <figure class="member-photo"><img src="images/member8.jpg" alt="member"></figure>

                <div class="member-box">
                    <h3>Todd Alquist</h3>
                    <span>Lab assistant for Mr. White</span>
                </div>

            </div><!-- close member -->

        </div><!-- close grid-container -->
    </section><!-- close team section -->

</div>
