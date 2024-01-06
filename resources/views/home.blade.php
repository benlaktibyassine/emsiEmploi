@include('component.head')
    <body>

       @include("component.load")

      @include("component.header")

        <!-- Start Banner Area -->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="single-banner-content">
                            <span>École reconnue par l'État.</span>
                            <h1>Emsi</h1>
                            <p>Nous donnons à nos élèves ingénieurs une formation de qualité et des expériences qui les préparent au succès dans leurs carrières. Nous les aidons aussi à découvrir un domaine qui les passionne et à oser le diriger. Nos écoles sont reconnues par l’Etat.</p>
                            <div class="banner-btn d-flex align-items-center">
                                <a href="contact.html" class="default-btn">Je candidate</a>
                                
                            </div>
                            <div class="banner-shape-6">
                                <img src="{{asset('assets/images/banner/banner-shape-6.webp')}}" alt="banner">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-banner-image">
                            <div class="banner-image3s">
                                <div class="banner-main-img">
                                    <img src="{{asset('assets/images/banner/banner-1.webp')}}" alt="banner-1">
                                </div>
                                <div class="banner-shape">
                                    <img src="{{asset('assets/images/banner/banner-shape-1.webp')}}" alt="banner-shape">
                                </div>
                                <div class="banner-shape-1">
                                    <img src="{{asset('assets/images/banner/banner-shape-2.webp')}}" alt="banner-shape">
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape-3">
                <img src="{{asset('assets/images/banner/banner-shape-3.webp')}}" alt="banner">
            </div>
            <div class="banner-shape-4">
                <img src="{{asset('assets/images/banner/banner-shape-4.webp')}}" alt="banner">
            </div>
            <div class="banner-shape-5">
                <img src="{{asset('assets/images/banner/banner-shape-5.webp')}}" alt="banner">
            </div>
            <div class="banner-shape-7">
                <img src="{{asset('assets/images/banner/banner-shape-7.webp')}}" alt="banner">
            </div>
        </div>
        <!-- End Banner Area -->

        <!-- Start Our Features area -->
        <div class="features-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="top-title">Our Features</span>
                    <h2>Nous donnons à nos élèves ingénieurs une formation de qualité et des expériences qui les préparent au succès dans leurs carrières. Nous les aidons aussi à découvrir un domaine qui les passionne et à oser le diriger. Nos écoles sont reconnues par l’Etat.</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-features-card">
                            <div class="features-icon">
                                <img src="{{asset('assets/images/features/features-icon-1.svg')}}" alt="features-1">
                            </div>
                            <h3>35 ans
                                d'expérience</h3>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-features-card bg-color-1">
                            <div class="features-icon">
                                <img src="{{asset('assets/images/features/features-icon-2.svg')}}" alt="features-1">
                            </div>
                            <h3>Reconnue par l'état</h3>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-features-card bg-color-2">
                            <div class="features-icon">
                                <img src="{{asset('assets/images/features/features-icon-3.svg')}}" alt="features-1">
                            </div>
                            <h3>16 500
                                Lauréats</h3>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-features-card bg-color-3">
                            <div class="features-icon">
                                <img src="{{asset('assets/images/features/features-icon-4.svg')}}" alt="features-1">
                            </div>
                            <h3>11 000
                                Elèves ingénieurs</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Features area -->

        <!-- Start Panther Area -->
        
        <!-- End Panther Area -->

        <!-- Start About Area -->
        <div class="about-area pt-100 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="single-about-image">
                            <img src="{{asset('assets/images/about/about-1.webp')}}" alt="about-1">
                            <div class="about-shape">
                                <img src="{{asset('assets/images/about/about-shape-1.webp')}}" alt="about-shape">
                            </div>
                            <div class="about-shape-1">
                                <img src="{{asset('assets/images/about/about-shape-2.webp')}}" alt="about-shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-about-content">
                            <div class="section-title left-title">
                                <span class="top-title">A propos de notre école</span>
                                <h2>La pratique dans le métier d’Ingénieur étant primordiale</h2>
                                <p>Les manipulations durant ces travaux permettent la compréhension et l’assimilation des cours théoriques qui leur sont enseignés. De plus, des mini-projets et projets sont programmés tout le long du cursus, pour inciter l’étudiant, seul ou en binôme, à proposer et apporter des solutions aux problèmes auxquels il sera confronté dans sa vie active.</p>
                            </div>
                            <ul>
                                <li class="list-inline"><img src="{{asset('assets/images/about/about-icon.svg')}}" alt="about-icon">L'Excellence Académique</li>
                                <li class="list-inline"><img src="{{asset('assets/images/about/about-icon.svg')}}" alt="about-icon">L'Employabilité</li>
                                <li class="list-inline"><img src="{{asset('assets/images/about/about-icon.svg')}}" alt="about-icon">L'Ouverture à l'International</li>
                            </ul>
                            <div class="about-btn d-flex align-items-center">
                                <a href="about.html" class="default-btn">Renseignement</a>
                                <div class="call-experts">
                                    <div class="phone-call">
                                        <img src="{{asset('assets/images/phone-call.svg')}}" alt="phone-call">
                                    </div>
                                    <span>Appelez-nous</span>
                                    <a href="tel:(+212)76898708">(+212) 768 98708</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-shape3">
                <img src="{{asset('assets/images/about/about-shape-3.webp')}}" alt="image">
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start Our Services Area -->
        <div class="services-area pt-100 pb-70">
            <div class="container">
                <div class="services-top-item d-flex align-items-end justify-content-between">
                    <div class="section-title left-title">
                        <span class="top-title">Nos Filieres</span>
                        <h2>Nous donnons à nos élèves ingénieurs une formation de qualité et des expériences</h2>
                    </div>
                    <a href="services.html" class="default-btn">Tous Nos Filieres</a>
                </div>
                <div class="row" data-cues="slideInUp">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-services-card d-flex align-items-center">
                            <div class="services-icon">
                                <img src="{{asset('assets/images/services/couple.svg')}}" alt="couple">
                            </div>
                            <h3><a href="services-details.html">GÉNIE INDUSTRIEL</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-services-card d-flex align-items-center">
                            <div class="services-icon">
                                <img src="{{asset('assets/images/services/home.svg')}}" alt="home">
                            </div>
                            <h3><a href="services-details.html">INGÉNIERIE FINANCIÈRE ET AUDIT</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-services-card d-flex align-items-center">
                            <div class="services-icon bg-icon-color">
                                <img src="{{asset('assets/images/services/lightbulb.svg')}}" alt="lightbulb">
                            </div>
                            <h3><a href="services-details.html">INGÉNIERIE INFORMATIQUE ET RÉSEAUX</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-services-card d-flex align-items-center">
                            <div class="services-icon bg-icon-color1">
                                <img src="{{asset('assets/images/services/heart.svg')}}" alt="heart">
                            </div>
                            <h3><a href="services-details.html">GÉNIE CIVIL, BÂTIMENTS ET TRAVAUX PUBLICS (BTP)</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-services-card d-flex align-items-center">
                            <div class="services-icon bg-icon-color2">
                                <img src="{{asset('assets/images/services/car.svg')}}" alt="car">
                            </div>
                            <h3><a href="services-details.html">INGÉNIERIE AUTOMATISMES ET INFORMATIQUE INDUSTRIELLE</a></h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Our Services Area -->

        <!-- Start Free Quote Area -->
        <div class="free-quote-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-free-quote-form">
                            <div class="section-title left-title">
                                <span class="top-title"> Chats</span>
                                <h2>Chat en ligne
                                    Les inscriptions sont ouvertes</h2>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Entrer votre question">
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="default-btn">Envoyer</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="free-quote-image">
                            <div class="free-quote-main">
                                <img src="{{asset('assets/images/free-quote-1.webp')}}" alt="free-quote">
                            </div>
                            <div class="free-quote-shape">
                                <img src="{{asset('assets/images/free-quote-shape-1.webp')}}" alt="shape3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="free-quote-shape1">
                <img src="{{asset('assets/images/free-quote-shape-2.webp')}}" alt="shape3">
            </div>
            <div class="free-quote-shape2">
                <img src="{{asset('assets/images/free-quote-shape-3.webp')}}" alt="shape3">
            </div>
        </div>
        <!-- End Free Quote Area -->

        <!-- Start Odometer area -->
        <div class="odometer-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="row">
                            <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                                <div class="single-odometer-item">
                                    <h2>
                                        <span class="odometer" data-count="16">00</span>
                                        <span class="target">Campus</span>
                                    </h2>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                                <div class="single-odometer-item">
                                    <h2>
                                        
                                        <span class="target">Reconnue par l'état</span>
                                    </h2>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-4 col-sm-4 col-md-4">
                                <div class="single-odometer-item">
                                    <h2>
                                        <span class="odometer" data-count="16 500">00</span>
                                        <span class="target">Lauréats</span>
                                    </h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-odometer-item-2">
                            <h2>
                                <span class="odometer" data-count="35">00</span>
                            </h2>
                            <p>Years Experience </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="odometer-shape1">
                <img src="{{asset('assets/images/odometer-bg-img.webp')}}" alt="odometer1">
            </div>
        </div>
        <!-- End Odometer area -->

        
        <!-- End Blog Area -->

        <!-- Start Subscribe Area -->
        <div class="subscribe-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title left-title">
                            <span class="top-title">Sign Up For Email</span>
                            <h2>Signup Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="subscribe-from">
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Your Email" name="EMAIL" required autocomplete="off">

                                <button class="default-btn" type="submit">
                                    Subscribe
                                </button>

                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                            <div class="subscribe-shape">
                                <img src="{{asset('assets/images/subscribe-bg-shape-1.webp')}}" alt="subscribe1">
                            </div>
                            <div class="subscribe-shape13">
                                <img src="{{asset('assets/images/subscribe-bg-shape-2.webp')}}" alt="subscribe1">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->

        <!-- Start Footer Area -->
    @include('component.foot')
    @include("component.jslinks")
    </body>
</html>
