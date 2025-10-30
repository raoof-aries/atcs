<?php include('header.php'); ?>
<section class="br-fix overflow-hidden">
    <div
        class="wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-650"
        data-image-src="./assets/img/custom/hero.jpg">
        <div class="container pt-18 pt-lg-21 pb-17 pb-lg-19 text-center">
            <div class="row">
                <div
                    class="col-md-9 col-lg-8 col-xl-7 col-xxl-8 mx-auto"
                    data-cues="zoomIn"
                    data-group="page-title"
                    data-interval="-200"
                    data-delay="500">
                    <h3 class="display-1 fs-52 text-white mb-7">
                        Welcome to Aries Trading Contracting and Services!
                    </h3>
                    <p class="text-white fs-25 lh-sm mb-7 cstm-hero-desc">
                        Trusted repair and maintenance ensuring safety, efficiency, and lasting performance.
                    </p>
                    <div>
                        <a class="btn btn-primary rounded-pill mt-2 ">Get Quote</a>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-white mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path
                        fill="currentColor"
                        d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
        <!-- /.overflow-hidden -->
    </div>
    <!-- /.wrapper -->
</section>

<!-- <section class="what-we-do-section">
    <div class="bg-elements">
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-line"></div>
        <div class="bg-line"></div>
        <div class="gear"></div>
        <div class="gear"></div>
    </div>

    <div class="container">
        <div class="section-header">
            <h2 class="display-4 section-title">What We Do</h2>
            <p class="section-subtitle">
                We specialize in OCTG maintenance and repair, offering expert pressure testing and valve repair services to guarantee the integrity of your operations. Our load testing services ensure that your equipment can handle any challenge, while our wire rope socketing and spooling services promote safe and reliable use.
            </p>
        </div>
    </div>
</section> -->


<section class="whatWeDoSection">
    <div class="bg-elements">
        <div class="bg-circle bg-circle-1"></div>
        <div class="bg-circle bg-circle-2"></div>
        <div class="bg-circle bg-circle-3"></div>
    </div>

    <div class="container">
        <div class="section-header">
            <h1 class="display-4">What We Do</h1>
            <p class="section-subtitle">Comprehensive OCTG Solutions for the Energy Industry</p>
        </div>

        <div class="services-grid">
            <div class="service-card-what-we-do">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z" />
                    </svg>
                </div>
                <h3 class="card-title">OCTG</h3>
                <a href="refacing-service">
                    <span class="card-arrow">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="service-card-what-we-do">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 6v6l4 2" />
                    </svg>
                </div>
                <h3 class="card-title">Pressure Testing and Valve Repair</h3>
                <a href="pressure-testing-services">
                    <span class="card-arrow">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="service-card-what-we-do" onclick="navigateToService('welding')">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
                    </svg>
                </div>
                <h3 class="card-title">Welding and Fabrication</h3>
                <a href="deployment-class-certified">
                    <span class="card-arrow">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="service-card-what-we-do">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                        <line x1="12" y1="22.08" x2="12" y2="12" />
                    </svg>
                </div>
                <h3 class="card-title">Load Testing</h3>
                <a href="load-testing">
                    <span class="card-arrow">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="service-card-what-we-do">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    </svg>
                </div>
                <h3 class="card-title">Corrosion Control Services</h3>
                <a href="riding-squad">
                    <span class="card-arrow">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>

            <div class="service-card-what-we-do">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3" />
                        <path d="M12 1v6m0 6v6m5.2-14.2l-4.2 4.2m-2 2l-4.2 4.2m14.2-5.2h-6m-6 0H1m14.2 5.2l-4.2-4.2m-2-2l-4.2-4.2" />
                    </svg>
                </div>
                <h3 class="card-title">Wire Rope Socketing and Spooling</h3>
                <a href="wire-rope-services">
                    <span class="card-arrow">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- <script>
        // Add subtle parallax effect to background elements
        document.addEventListener('mousemove', (e) => {
            const circles = document.querySelectorAll('.bg-circle');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            circles.forEach((circle, index) => {
                const speed = (index + 1) * 10;
                const xMove = (x - 0.5) * speed;
                const yMove = (y - 0.5) * speed;
                circle.style.transform = `translate(${xMove}px, ${yMove}px)`;
            });
        });
    </script> -->
</section>


<section class="wrapper image-wrapper bg-image bg-overlay " data-image-src="assets/esol/img/common-images/7.JPG">
    <div class="container py-18 mt-10">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="fs-16 text-uppercase text-line text-white mb-3">LET’S WORK TOGETHER</h2>
                <h3 class="display-4 mb-6 text-white pe-xxl-18">Partner with industry experts trusted by businesses worldwide.
                    Start your journey with us and elevate your operations today.</h3>
                <a href="contact" class="btn btn-primary rounded mb-0 text-nowrap">Contact Us</a>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper bg-light">
    <div class="container pt-15 pt-md-17">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-6 order-lg-2">
                <figure class="rounded"><img src="assets/esol/img/common-images/35.JPG" srcset="assets/esol/img/common-images/35.JPG 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Who We Are?</h2>
                <h3 class="display-4 mb-5">Delivering precision, safety, and reliability in every service we provide.</h3>
                <p class="mb-6">We are a team of experienced professionals dedicated to offering top-quality industrial solutions. Our mission is to support businesses in enhancing operational efficiency, minimizing downtime, and ensuring compliance with international safety standards.</p>
                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Experienced specialists delivering fast, reliable, and efficient technical service.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Comprehensive solutions tailored for every business and operational need.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Strict adherence to global safety, testing, and compliance regulations.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Proven track record of minimizing downtime and maximizing equipment life.</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
    </div>

    <!--/.row -->
</section>


</div>
<!-- /.content-wrapper -->
<section class="wrapper bg-light">
    <div class="container-card pt-15 pt-md-17">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 pb-15" data-image-src="./assets/img/photos/bg22.png">
            <div class="card-body py-14 px-0">
                <div class="container">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                        <div class="col-lg-4 text-center text-lg-start">
                            <h3 class="display-4 mb-3 pe-xxl-15">We are proud of our works</h3>
                            <p class="lead fs-lg mb-0 pe-xxl-10">We bring solutions to make life easier for our customers.</p>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-8 mt-lg-2">
                            <div class="row align-items-center counter-wrapper gy-6 text-center">
                                <div class="col-md-4">
                                    <img src="./assets/img/icons/solid/target.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3" alt="" />
                                    <h3 class="counter">1000+</h3>
                                    <p class="mb-0">Completed Projects</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-4">
                                    <img src="./assets/img/icons/solid/bar-chart.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3" alt="" />
                                    <h3 class="counter">4x</h3>
                                    <p class="mb-0">Revenue Growth</p>
                                </div>
                                <!--/column -->
                                <div class="col-md-4">
                                    <img src="./assets/img/icons/solid/employees.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3" alt="" />
                                    <h3 class="counter">99.7%</h3>
                                    <p class="mb-0">Customer Satisfaction</p>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
    </div>
    <!-- /.container-card -->
    <div class="container">
        <div class="grid mb-18">
            <div class="row isotope gy-6 mt-n18">
                <div class="item col-md-6 col-xl-3">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body">
                            <blockquote class="border-0 mb-0">
                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta. Cras mattis consectetur.”</p>
                                <div class="blockquote-details">
                                    <div class="info ps-0">
                                        <h5 class="mb-1">Coriss Ambady</h5>
                                        <p class="mb-0">Financial Analyst</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/column -->
                <div class="item col-md-6 col-xl-3">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body">
                            <blockquote class="border-0 mb-0">
                                <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa justo sit amet purus sit amet fermentum.”</p>
                                <div class="blockquote-details">
                                    <div class="info ps-0">
                                        <h5 class="mb-1">Cory Zamora</h5>
                                        <p class="mb-0">Marketing Specialist</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/column -->
                <div class="item col-md-6 col-xl-3">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body">
                            <blockquote class="border-0 mb-0">
                                <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor eu rutrum. Nulla vitae libero.”</p>
                                <div class="blockquote-details">
                                    <div class="info ps-0">
                                        <h5 class="mb-1">Nikolas Brooten</h5>
                                        <p class="mb-0">Sales Manager</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/column -->
                <div class="item col-md-6 col-xl-3">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body">
                            <blockquote class="border-0 mb-0">
                                <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus rhoncus eu tincidunt auctor nullam rutrum, pharetra augue.”</p>
                                <div class="blockquote-details">
                                    <div class="info ps-0">
                                        <h5 class="mb-1">Coriss Ambady</h5>
                                        <p class="mb-0">Financial Analyst</p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.grid-view -->


    </div>
    <!-- /.container -->
</section>


<!-- gallery -->

<section class="wrapper bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Latest Gallery</h2>
                <h3 class="display-4 mb-10">
                    Check out some of our awesome gallery items featuring creative ideas and great design.
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="container-fluid px-md-6">
        <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="rounded"><img src="assets/esol/img/slider/1.png" alt="" /></figure>
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded"><img src="assets/esol/img/slider/2.png" alt="" /></figure>
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded"><img src="assets/esol/img/slider/3.png" alt="" /></figure>
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded"><img src="assets/esol/img/slider/4.png" alt="" /></figure>
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded"><img src="assets/esol/img/slider/5.png" alt="" /></figure>
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded"><img src="assets/esol/img/slider/6.png" alt="" /></figure>
                    </div>
                    <!--/.swiper-slide -->
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded"><img src="assets/esol/img/slider/7.png" alt="" /></figure>
                    </div>
                    <!--/.swiper-slide -->
                    <!-- <div class="swiper-slide">
                        <figure class="rounded"><img src="./assets/img/photos/pp16.jpg" alt="" /></figure>
                    </div> -->
                    <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /section -->

<!-- end gallery -->

</div>

<?php include('footer.php'); ?>