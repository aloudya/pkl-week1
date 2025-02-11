@extends('layouts.app')

@section('title', 'All posts')

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(img/slide/slide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animated fadeInDown">Welcome to <span>Hidayah</span></h2>
                        <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et
                            est quaerat
                            sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                            doloremque
                            accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                        <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et
                            est quaerat
                            sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                            doloremque
                            accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et
                            est quaerat
                            sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                            doloremque
                            accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div
                    class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                </div>

                <div
                    class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                    <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima
                        temporibus
                        laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id
                        nulla
                        tenetur. Suscipit aut voluptate.</p>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint
                            occaecati cupiditate non provident</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-atom"></i></div>
                        <h4 class="title"><a href="">Dine Pad</a></h4>
                        <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis
                            odit. Sunt aut
                            deserunt minus aut eligendi omnis</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container-fluid">

            <div class="row justify-content-center skills-content">

                <div class="col-xl-5 col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-5 col-lg-6">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container-fluid">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Services</h2>
                <h3>Check our <span>Services</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae
                    autem.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="ri-pie-chart-line"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="ri-stack-line"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea
                                commodo consequat tarad limino ata</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="ri-markup-line"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu
                                fugiat nulla pariatur</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="ri-shape-line"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia
                                deserunt mollit anim id est laborum</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="ri-fingerprint-line"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                                praesentium voluptatum deleniti atque</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="ri-body-scan-line"></i></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum
                                soluta nobis est eligendi</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="text-center">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est
                    laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Portfolio</h2>
                <h3>Check our <span>Portfolio</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae
                    autem.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container justify-content-center">

                <div class="col-xl-10">
                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 2</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 2</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 1</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 3</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="./img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="./img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End portfolio item -->

                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Testimonials</h2>
                <h3>What They <span>Are Saying</span> About Us</h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae
                    autem.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                <img src="./img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus.
                                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                    semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial-item -->

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4 mt-lg-0">
                                <img src="./img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis
                                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial-item -->

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4">
                                <img src="./img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim
                                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial-item -->

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4">
                                <img src="./img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit
                                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                    illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial-item -->

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4">
                                <img src="./img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim
                                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                    nisi cillum
                                    quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial-item -->

                        <div class="col-lg-6">
                            <div class="testimonial-item mt-4">
                                <img src="./img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
                                <h3>Emily Harison</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci
                                    eius. Accusamus
                                    qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial-item -->

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hard Working <span>Team</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae
                    autem.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="member">
                                <img src="./img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Member Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                            <div class="member">
                                <img src="./img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Sarah Jhonson</h4>
                                        <span>Product Manager</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Member Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                            <div class="member">
                                <img src="./img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>William Anderson</h4>
                                        <span>CTO</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Member Item -->

                        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                            <div class="member">
                                <img src="./img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Amanda Jepson</h4>
                                        <span>Accountant</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Member Item -->

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Contact</h2>
                <h3>Get In Touch With <span>Us</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae
                    autem.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">

                        <div class="col-lg-6">

                            <div class="row justify-content-center">

                                <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                    <i class="bx bx-map"></i>
                                    <h4>Address</h4>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                                <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                    <i class="bx bx-phone"></i>
                                    <h4>Call Us</h4>
                                    <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
                                </div>
                                <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                    <i class="bx bx-envelope"></i>
                                    <h4>Email Us</h4>
                                    <p>contact@example.com<br>info@example.com</p>
                                </div>
                                <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                    <i class="bx bx-time-five"></i>
                                    <h4>Working Hours</h4>
                                    <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" name="message" rows="8" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- @section('content')

<div class="row">
    <div class="col-12">
        @include('partials.navbar')
        <br><br>
        <hr>
        <span>
            <h1>All Posts</h1>
        </span>
        <br>

        <a href="{{route('posts.create')}}">
            <btn class="btn btn-success">Add post</btn>
        </a>
        <hr>

        <!-- Alert messages -->
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
@elseif (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="role">
        {{ session('error') }}
    </div>
@else


@endif



<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID User</th>
            <th>Title</th>
            <th>Body</th>
            <th class="w-25">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $nomor = 1;
        @endphp
        @foreach($posts as $post)
            <tr>
                <td>{{$nomor++}}</td>
                <td>{{ $post->id_user }}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <div class="d-flex justify-center items-center text-center">
                        <!-- edit button -->
                        <a href="{{ route('posts.edit', $post->id) }}">
                            <button class="btn btn-primary me-2"><i class="ai-edit"></i> Edit</button>
                        </a>
                        <!-- delete button -->
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger me-2"
                                onclick="return confirm('Sure Want to Delete?')"><i class="ai-trash-can"></i>
                                Delete</button>
                        </form>
                        <a href="{{route('posts.show', $post->id)}}">
                            <button class="btn btn-warning me-2"><i class="ai-eye-open"></i> Show</button>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot></tfoot>
</table>
</div>
</div>
@endsection -->


<!-- @section('footer')
@endsection -->