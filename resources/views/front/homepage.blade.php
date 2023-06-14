@extends('front.layouts.master')
{{-- yield kullanimi asagidaki her iki formada mumkundur --}}
{{-- @section('title') Home @endsection --}}
@section('title','Home')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>{{$arr['banner_title']}} </h1>
            <h2>{{$arr['banner_description']}}</h2>
            {{--        <a href="#about" class="btn-get-started scrollto">Get Started</a>--}}
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= What We Do Section ======= -->
        <section id="what-we-do" class="what-we-do">
            <div class="container">

                <div class="section-title">
                    <h2>{{$arr['home_title']}}</h2>
                    <p>{{$arr['home_description']}}</p>
                </div>

                <div class="row">
                    @foreach($icon_card_home_items as $item)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box">
                                <div class="icon">{!! $item->icon!!}</div>
                                <h4><a href="">{{$item->title}}</a></h4>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End What We Do Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about pb-4">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('front/assets/img')}}/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>{{$about_item->title}}</h3>
                        <div>
                            {!!$about_item->description!!}
                        </div>
                        {{--                            <ul>--}}
                        {{--                                <li><i class="bx bx-check-double"></i> Lorem ipsum--}}
                        {{--                                </li>--}}
                        {{--                                <li><i class="bx bx-check-double"></i> Lorem Ipsum--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}

                    </div>
                </div>


            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>{{$arr['services_title']}}</h2>
                    <p>{{$arr['services_description']}}</p>
                </div>

                <div class="row">
                    @foreach($icon_card_services_items as $item)
                        <div class="col-md-6 mt-4">
                            <div class="icon-box">
                                <div class="icon">{!! $item->icon!!}</div>
                                <h4><a href="">{{$item->title}}</a></h4>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>{{$arr['portfolio_title']}}</h2>
                    <p>{{$arr['portfolio_description']}}</p>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            {{--                        <li data-filter="*" class="filter-active">All</li>--}}
                            {{--                        <li data-filter=".filter-app">App</li>--}}
                            {{--                        <li data-filter=".filter-card">Card</li>--}}
                            {{--                        <li data-filter=".filter-web">Web</li>--}}
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    @foreach($portfolio_items as $item)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{asset('front/assets/img')}}/portfolio/{{$item->image1}}"
                                         class="img-fluid"
                                         alt="">
                                    <a href="{{asset('front/assets/img')}}/portfolio/portfolio-1.jpg"
                                       data-gallery="portfolioGallery" class="link-preview portfolio-lightbox"
                                       title="Preview"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html">{{$item->title}} </a></h4>
                                    <p>{{$item->subtitle}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>{{$arr['testmotionals_title']}}</h2>
                    <p>{{$arr['testmotionals_description']}}</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach($image_card_testimonials_items as $item)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{$item->description}}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{asset('front/assets/img')}}/testimonials/{{$item->image}}"
                                         class="testimonial-img" alt="">
                                    <h3>{{$item->fullname}}</h3>
                                    <h4>{{$item->position}}</h4>
                                </div>
                            </div>
                    @endforeach
                    <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>{{$arr['team_title']}}</h2>
                    <p>{{$arr['team_description']}}</p>
                </div>

                <div class="row">
                    @foreach($image_card_team_items as $item)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <img src="{{asset('front/assets/img')}}/team/{{$item->image}}" alt="">
                                <h4>{{$item->fullname}}</h4>
                                <span>{{$item->position}}</span>
                                <p> {{$item->description}}  </p>
                                <div class="social">
                                    @foreach($item->social as $social)
                                    <a href="{{$social->link}}">{!! $social->icon !!}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>{{$arr['contact_title']}}</h2>
                    <p>{{$arr['contact_description']}}</p>
                </div>

                <div class="row mt-5 justify-content-center">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>{{$communication_item->address}}</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>{{$communication_item->email1}}<br>{{$communication_item->email2}}</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>{{$communication_item->phone1}}<br>{{$communication_item->phone2}}</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <form action="{{route('contact')}}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="fullname" class="form-control" id="fullname"
                                           placeholder="Full Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                          required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message d-none"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

@endsection
