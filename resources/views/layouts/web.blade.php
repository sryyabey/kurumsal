<!DOCTYPE html>
<html lang="tr">

<!--
=======================================================================================
 Brooklyn HTML Template by United Themes (http://www.unitedthemes.com)
 Marcel Moerkens & Matthias Nettekoven
=======================================================================================
-->

<head>
   @include('layouts.web_partials.header')
    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            padding: 10px 15px;
            border-radius: 50%;
            font-size: 24px;
            z-index: 1000;
        }

        .siteback {
            background-color: #efebde;
        }
        .textcolor{
            color: #5f5143;
        }



         @foreach ($backgroundImages as $key => $backgroundImage)
                        .parallax-banner-{{ $key + 1 }} {
             background: url('{{ $backgroundImage->getFirstMediaUrl('images') }}') no-repeat center center;
             background-size: cover;
         }
        @endforeach
    </style>


    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body id="mainsite">

<a id="top"></a>

<!-- Page Layout
================================================== -->
<a href="https://wa.me/905335942025" class="whatsapp-button" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
<!-- header section -->
<header id="header-section" class="ha-header ha-header-hide">
    <div class="grid-container">
        <div class="ha-header-perspective">
            <div class="ha-header-front">
                <div class="grid-20 tablet-grid-20 hide-on-mobile">
                    <h1 class="logo">
                        <a href="#top"><img src="{{ asset('web/images/logo.png') }}" alt="logo"></a>
                    </h1>
                </div>
                <nav id="ut-navigation" class="grid-80 tablet-grid-80 hide-on-mobile textcolor">
                    <a class="selected" href="#top">Anasayfa</a>
                    <a href="#about-section">Hakkımızda</a>
                    <a href="#team-section">Ekibimiz</a>
                    <a href="#service-section">Hizmetlerimiz</a>
                    <a href="#portfolio-section">Galeri</a>
                    <a href="#testimonial-section">Yorumlar</a>
                    <a href="#contact-section">İletişim</a>
                </nav>
            </div>
        </div><!-- close .ha-header-perspective -->
    </div><!-- close grid container -->
</header><!-- close header -->

<div class="clear"></div>

<!-- hero section -->
<section class="hero ha-waypoint parallax-section parallax-banner-1 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
    <div class="parallax-overlay parallax-overlay-1"></div>
    <div class="grid-container">

        <!-- hero holder -->
        <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
            <div class="hero-inner">
                <span class="hero-description">Efruz Psikoloji</span>
                <div class="hero-title-holder">
                    <h1 class="hero-title">
                        @forelse($sliders as $key => $slider)
                            @if($key == 0)
                                {!! $slider->title !!}
                            @endif
                        @empty
                            ----
                        @endforelse
                    </h1>
                </div>
                <span class="btn-holder"><a id="to-about-section" class="hero-btn">Denizli</a></span>
            </div>
        </div><!-- close hero-holder -->
    </div>
</section><!-- close hero section -->

<div class="clear"></div>

<div id="main-content" class="wrap">

    <!-- about section -->
    <div class="nav-waypoint">
        <section id="about-section" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
            <div class="grid-container">

                <!-- section header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="section-header">
                        <h2 class="section-title"><span>{{ $setting->about_title ?? '' }}</span></h2>
                        <p class="section-slogan">{!! $setting->about_description ?? '' !!}</p>
                    </header>
                </div>
                <!-- close section header -->
                @forelse($pages as $page)
                <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box" >
                    <figure class="about-icon siteback" ><img src="{{ $page->getFirstMediaUrl('images', 'thumb') }}" alt="app-development"></figure>

                    <div class="about-box" >
                        <h3>{{ $page->title }}</h3>
                        <p class="textcolor">{{ $page->content  }}</p>
                    </div>
                </div>
                @empty
                    <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                        <figure class="about-icon"><img src="{{ asset('web/images/app-development.png') }}" alt="app-development"></figure>

                        <div class="about-box">
                            <h3></h3>
                            <p> </p>
                        </div>
                    </div>
                @endforelse
                <!--
                <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                    <figure class="about-icon"><img src="{{ asset('web/images/ui-design.png') }}" alt="ui-design"></figure>

                    <div class="about-box">
                        <h3>UI Design</h3>
                        <p>Praesent faucibus nisl sit amet nulla sollicitudin pretium a sed purus. Nullam bibendum porta magna.</p>
                    </div>
                </div>

                <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                    <figure class="about-icon"><img src="{{ asset('web/images/brand-identity.png') }}" alt="brand-identity"></figure>

                    <div class="about-box">
                        <h3>Brand & Identity</h3>
                        <p>Praesent faucibus nisl sit amet nulla sollicitudin pretium a sed purus. Nullam bibendum porta magna.</p>
                    </div>
                </div>

                <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                    <figure class="about-icon"><img src="{{ asset('web/images/consultancy.png') }}" alt="consultancy"></figure>

                    <div class="about-box">
                        <h3>Consultancy</h3>
                        <p>Praesent faucibus nisl sit amet nulla sollicitudin pretium a sed purus. Nullam bibendum porta magna.</p>
                    </div>
                </div>
                -->
            </div><!-- close grid-container -->
        </section><!-- close about section -->

        <div class="clear"></div>

        <!-- parallax banner 2-->
        <section id="parallax-section-2" class="parallax-section parallax-banner-2 parallax-background parallax-section-2 ha-waypoint">
            <div class="parallax-overlay parallax-overlay-2"></div>
            <div class="grid-container parallax-content">

                <!-- parallax header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="parallax-header">
                        <h2 class="parallax-title"><span>{{ $setting->slogan_title ?? '' }}</span></h2>
                        <p class="parallax-slogan">{!! $setting->slogan_description ?? '' !!}</p>
                    </header>
                </div>
                <!-- close parallax header -->

            </div><!-- close grid container -->
        </section><!-- close parallax banner 2-->

    </div><!-- close nav-waypoint -->

    <div class="clear"></div>

    <!-- team section -->
    <div class="nav-waypoint">
        <x-teams :$teams ?? [] :$setting ?? [] />
        <div class="clear"></div>

        <!-- Counter Section -->
        <section id="counter-section" class="counter-section parallax-section parallax-banner-6 parallax-background">
            <div class="parallax-overlay parallax-overlay-6"></div>
            <div class="grid-container parallax-content">

            </div><!-- close grid container -->
        </section><!-- close parallax banner 3-->

        <!-- cta section -->
        <section id="cta-section" class="cta-section content-section">
            <div class="grid-container">
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <span class="cta-btn cl-effect-18"><a href="#contact-section" class="cl-effect-18">Bize Ulaşın !!</a></span>
                </div>
            </div>
        </section><!-- close cta section -->
    </div><!-- close nav-waypoint -->

    <div class="clear"></div>

    <!-- service section -->
    <div class="nav-waypoint">
       <x-services :$services ?? [] :$setting ?? [] />
    </div><!-- close nav-waypoint -->

    <div class="clear"></div>

    <!-- portfolio section -->
    <div class="nav-waypoint">
        <section id="portfolio-section" class="portfolio-section content-section">
            <div class="grid-container">

                <!-- section header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="section-header">
                        <h2 class="section-title"><span>{{ $setting->gallery_title ?? '' }}</span></h2>
                        <p class="section-slogan">{{ $setting->gallery_description ?? '' }}</p>
                    </header>
                </div>
                <!-- close section header -->

                <div class="clear"></div>

                <!-- portfolio box 1 -->
                @forelse($galleries as $gallery)
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup" href="{{ $gallery->getFirstMediaUrl('gallery_images') }}">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="{{ $gallery->getFirstMediaUrl('gallery_images') }}" alt="portfolio image"></figure><!-- close portfolio image -->
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">{{ $gallery->title }}<span class="portfolio-category">{{ $gallery->title }}</span></h3>
                            </div><!-- close portfolio caption -->
                        </div>
                    </a>
                </div>
                @empty
                    <div class="grid-33 mobile-grid-50 tablet-grid-50">
                        <a class="portfolio-popup" href="{{ asset('web/images/portfolio/large/p1.jpg') }}">
                            <div class="portfolio-box">
                                <figure class="portfolio-image"><img src="{{ asset('web/images/portfolio/thumb/p1.jpg') }}" alt="portfolio image"></figure><!-- close portfolio image -->
                                <div class="portfolio-caption">
                                    <h3 class="portfolio-title">Camera<span class="portfolio-category">Photography</span></h3>
                                </div><!-- close portfolio caption -->
                            </div>
                        </a>
                    </div>
                @endforelse<!-- close portfolio -->

                <!-- portfolio box 2
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup" href="images/portfolio/large/p2.jpg">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="images/portfolio/thumb/p2.jpg" alt="portfolio image"></figure><!-- close portfolio image
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">Angelica<span class="portfolio-category">Photography</span></h3>
                            </div><!-- close portfolio caption -->
                        </div>
                    </a>
                </div><!-- close portfolio -->

                <!-- portfolio box 3
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup-video" href="http://www.youtube.com/watch?v=ZouARplh7iY">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="images/portfolio/thumb/p3.jpg" alt="portfolio image"></figure><!-- close portfolio image
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">iMac<span class="portfolio-category">Video</span></h3>
                            </div><!-- close portfolio caption -->
                        </div>
                    </a>
                </div><!-- close portfolio

                <!-- portfolio box 4
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup" href="images/portfolio/large/p4.jpg">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="images/portfolio/thumb/p4.jpg" alt="portfolio image"></figure><!-- close portfolio image
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">Brooklyn<span class="portfolio-category">Logo Design</span></h3>
                            </div><!-- close portfolio caption
                        </div>
                    </a>
                </div><!-- close portfolio -->

                <!-- portfolio box 5
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup" href="images/portfolio/large/p5.jpg">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="images/portfolio/thumb/p5.jpg" alt="portfolio image"></figure><!-- close portfolio image
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">Street<span class="portfolio-category">Photography</span></h3>
                            </div><!-- close portfolio caption
                        </div>
                    </a>
                </div><!-- close portfolio -->

                <!-- portfolio box 6
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup" href="images/portfolio/large/p6.jpg">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="images/portfolio/thumb/p6.jpg" alt="portfolio image"></figure><!-- close portfolio image
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">Cecilia<span class="portfolio-category">Photography</span></h3>
                            </div><!-- close portfolio caption
                        </div>
                    </a>
                </div><!-- close portfolio -->

                <!-- portfolio box 7
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup" href="images/portfolio/large/p7.jpg">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="images/portfolio/thumb/p7.jpg" alt="portfolio image"></figure><!-- close portfolio image
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">Tree<span class="portfolio-category">Photography</span></h3>
                            </div><!-- close portfolio caption
                        </div>
                    </a>
                </div><!-- close portfolio -->

                <!-- portfolio box 8
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup" href="images/portfolio/large/p8.jpg">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="images/portfolio/thumb/p8.jpg" alt="portfolio image"></figure><!-- close portfolio image
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">Bridge<span class="portfolio-category">Photography</span></h3>
                            </div><!-- close portfolio caption
                        </div>
                    </a>
                </div><!-- close portfolio -->

                <!-- portfolio box 9
                <div class="grid-33 mobile-grid-50 tablet-grid-50">
                    <a class="portfolio-popup" href="images/portfolio/large/p9.jpg">
                        <div class="portfolio-box">
                            <figure class="portfolio-image"><img src="images/portfolio/thumb/p9.jpg" alt="portfolio image"></figure><!-- close portfolio image
                            <div class="portfolio-caption">
                                <h3 class="portfolio-title">Headphone<span class="portfolio-category">Photography</span></h3>
                            </div><!-- close portfolio caption
                        </div>
                    </a>
                </div><!-- close portfolio -->

            </div><!-- close grid-container -->
        </section><!-- close portfolio section -->

        <div class="clear"></div>

        <!-- social section -->
        <x-social :$socials ?? [] :$setting ?? []/>
    </div><!-- close nav-waypoint -->

    <div class="clear"></div>

    <!-- testimonial section -->
    <div class="nav-waypoint">
        <section id="testimonial-section" class="testimonial-section content-section">

            <div class="grid-container">

                <!-- section header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="section-header">
                        <h2 class="section-title"><span>{{ $setting->preview_title ?? '' }}</span></h2>
                        <p class="section-slogan textcolor">{!! $setting->preview_description ?? '' !!}</p>
                    </header>
                </div>
                <!-- close section header -->

                <div class="clear"></div>

                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">

                    <div class="ut-testimonials">
                        <div id="avatarSlider" class="ut-rotate-avatar">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('web/images/member1.jpg') }}" class="ut-quote-avatar" alt="avatar">
                                </li>
                                <li>
                                    <img src="{{ asset('web/images/member1.jpg') }}" class="ut-quote-avatar" alt="avatar">
                                </li>

                            </ul>
                        </div><!-- close avatarSlider -->

                        <div id="quoteSlider" class="ut-rotate-quote">
                            <ul class="slides">
                                @forelse($comments as $comment)
                                <li>
                                    <span class="ut-quote-comment textcolor">{{ Str::limit($comment->comment, 250) }}</span>
                                    <h3 class="ut-quote-name textcolor">{{ $comment->first_name }}</h3>
                                </li>
                                @empty
                                    <li>
                                        <span class="ut-quote-comment"></span>
                                        <h3 class="ut-quote-name"></h3>
                                    </li>
                                @endforelse

                            </ul>
                        </div><!-- close quoteSlider -->
                    </div><!-- close ut-testimonials -->

                </div><!-- close grid-70 prefix-15 mobile-grid-100 tablet-grid-100 -->

            </div><!-- close container -->
        </section><!-- close testimonial section -->

        <div class="clear"></div>

        <!-- client section -->
        <section id="client-section" class="client-section content-section">

            <div class="grid-container">

                <div class="client-holder grid-parent grid-100 tablet-grid-100 mobile-grid-100">

                    <div class="container">
                        <div class="row">
                            @foreach ($logos as $logo)
                                <!-- client box -->
                                <div class="grid-20 tablet-grid-20 mobile-grid-50">
                                    <div class="client-logo">
                                        <a href="#">
                                            @if($logo->getFirstMediaUrl('logos'))
                                                <img src="{{ $logo->getFirstMediaUrl('logos') }}" alt="{{ $logo->alt }}" width="100px">
                                            @else
                                                <img src="{{ asset('web/images/default-logo.png') }}" alt="default logo">
                                            @endif
                                        </a>
                                    </div>
                                </div><!-- close client box -->
                            @endforeach
                        </div>
                    </div>


                </div><!-- close client-holder -->

            </div><!-- close container -->
        </section><!-- close client section -->

    </div><!-- close nav-waypoint -->

    <div class="clear"></div>

    <!-- contact section -->
    <div class="nav-waypoint">
        <section id="contact-section" class="contact-section parallax-section parallax-banner-5 parallax-background">
            <div class="parallax-overlay parallax-overlay-5"></div><!-- parallax overlay -->
            <div class="grid-container parallax-content">

                <!-- parallax header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="parallax-header">
                        <h2 class="parallax-title"><span>{{ $setting->contact_title ?? '' }}</span></h2>
                        <p class="parallax-slogan">{!! $setting->contact_description ?? '' !!}</p>
                    </header>
                </div>
                <!-- close parallax header -->

                <div class="clear"></div>

                <!-- contact wrap -->
                <div class="grid-100 mobile-grid-100 tablet-grid-100">
                    <div class="contact-wrap">


                        <!-- contact message -->
                        <div class="grid-parent grid-40 suffix-5 mobile-grid-100 tablet-grid-100">
                            <div class="contact-message">
                                <h3 class="grid-100">Adresimiz</h3>
                                <ul class="icons-ul">
                                    <li><i class="icon-li icon-home"></i>{{ $address->description ?? ''  }}</li>
                                    <li><i class="icon-li icon-home"></i>{{ $address->district ?? ''  }} | {{ $address->city ?? '' }} | {{ $address->country ?? '' }}</li>
                                    <li><i class="icon-li icon-phone"></i>{{ $address->phone ?? '' }}</li>
                                    <li><i class="icon-li icon-envelope-alt"></i>{{ $address->email ?? '' }}</li>
                                    <li><i class="icon-li icon-globe"></i>{{ $address->website_link ?? '' }}</li>
                                </ul>
                            </div>
                        </div><!-- close contact message -->

                        <!-- contact form -->
                        <div class="grid-parent grid-55 mobile-grid-100 tablet-grid-100">
                            <div class="contact-form-holder clearfix">


                                <h3 class="grid-100">Bize Ulaşın</h3>

                                <!-- contact form -->
                                <form class="contact-form" href="{{ route('contact_me') }}">

                                    <ul class="grid-50">

                                        <li><input id="name" class="name" type="text" name="name" placeholder="Ad:"></li>
                                        <li><input id="email" class="email" type="email" name="email" placeholder="E-Mail:"></li>
                                        <li><input id="phone" class="phone" type="text" name="phone" placeholder="Telefon:"></li>

                                    </ul>

                                    <ul class="grid-50">
                                        <li><textarea id="message" class="message" name="message" placeholder="Mesajınız:"></textarea></li>
                                    </ul>

                                    <div class="grid-100">
                                        <button type="submit" class="">
                                            Gönder
                                        </button>
                                    </div>
                                </form><!-- close contact form -->

                            </div>
                        </div><!-- close contact-form-holder -->

                    </div>
                </div><!-- close contact wrap -->


            </div><!-- close container -->
        </section><!-- close contact section -->

    </div><!-- close nav-waypoint -->

    <div class="clear"></div>

    <!-- Footer Section -->
    <footer class="footer">
        <a href="#top" class="toTop"><i class="icon-angle-up"></i></a>
        <div class="grid-container">
            <div class="grid-100 mobile-grid-100 tablet-grid-100">
                <h3>{!!  $setting->footer_title ?? '' !!} </h3>
                <span class="copyright">Powered by <a href="htts://taibadijital.com" target="_blank">TaibaDijital | sryya.dev</a></span>
            </div>
        </div><!-- close container -->
    </footer><!-- close footer -->
</div>

@include('layouts.web_partials.footer')
<script type="text/javascript">
    var ut_word_rotator = function() {

        // Blade üzerinden gelen verileri JSON formatına çevirip JavaScript'e aktarıyoruz
        var ut_rotator_words = {!! json_encode($sliders->map(function($word) {
            return $word->title ;
        })) !!};

        var counter = 0;

        setInterval(function() {
            $(".hero-title").fadeOut(function(){
                $(this).html(ut_rotator_words[counter=(counter+1)%ut_rotator_words.length]).fadeIn();
            });
        }, 3000 );
    };

    // Sayfa yüklendikten sonra fonksiyonu çalıştırıyoruz
    $(document).ready(function() {
        ut_word_rotator();
    });
</script>

<!-- End Document
================================================== -->
</body>
</html>
