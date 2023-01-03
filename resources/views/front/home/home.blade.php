@extends('front.master')

@section('title')
    Professional Full Stack Developer
@endsection

@section('body')
    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home" style="height:80vh;  background:rgba(0,0,0,1) url({{$header->bg_image}}) no-repeat right top / cover;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 py-6 pb-0 pt-lg-0">
                    <h3 class="default-color mb-3">I'm</h3>
                    <h1 class="display-4 mb-3 text-capitalize">{{$header->name}}</h1>
                    <h2 class="typed-text-output d-inline text-primary"></h2>
                    <div class="typed-text d-none">{{$header->designation}}</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="{{url($header->resume)}}" class="btn btn-primary default-bg-color py-3 px-4 me-2">Download CV</a>
                        <h5 class="ms-2 mb-0 d-none d-sm-block">Follow Me :
                            <a href="{{$header->social_linkedin}}"><i class="fab fa-linkedin text-info fs-3"></i></a>
                            <a href="{{$header->social_github}}"><i class="fab fa-github text-info fs-3 ms-2"></i></a>

                        </h5>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid " src="{{asset($header->profile_image)}}" alt="" >
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid rounded" src="{{asset($about->image)}}" alt="">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-2">
                        <h2 class="display-5 text-capitalize">{{$about->title}}</h2>
                    </div>
                    <p class="mb-4">
                        {!! $about->description !!}
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <h6 class="">My preferred tech-stack:</h6>
                    <div class="mb-4 d-flex gap-4 flex-wrap">
                        <div class="item"><img src="https://icongr.am/devicon/laravel-plain.svg?color=e62d2d" alt=""></div>
                        <div class="item"><img src="https://icongr.am/devicon/php-original.svg?color=e62d2d" alt=""></div>
                        <div class="item"><img src="https://icongr.am/devicon/mysql-original-wordmark.svg?color=e62d2d" alt=""></div>
                        <div class="item"><img src="https://icongr.am/devicon/javascript-original.svg?color=e62d2d" alt=""></div>
                        <div class="item"><img src="https://icongr.am/devicon/jquery-original-wordmark.svg?color=e62d2d" alt=""></div>
                        <div class="item"><img src="https://icongr.am/devicon/html5-original.svg?color=currentColor" alt=""></div>
                        <div class="item"><img src="https://icongr.am/devicon/css3-original.svg?color=currentColor" alt=""></div>
                        <div class="item"><img src="https://icongr.am/devicon/sass-original.svg?color=e62d2d" alt=""></div>
                        <div class="item"><img src="https://icongr.am/devicon/bootstrap-plain.svg?color=e62d2d" alt=""></div>

                    </div>

                    <h6 >Tools I use:</h6>
                    <div class="mb-4 d-flex gap-4 flex-wrap">
                        <div class="item"><img src="https://icongr.am/devicon/git-original.svg?color=e62d2d" alt="git"></div>
                        <div class="item"><img src="https://icongr.am/devicon/github-original.svg?color=e62d2d" alt="github"></div>
                        <div class="item"><img src="https://icongr.am/devicon/phpstorm-original.svg?color=e62d2d" alt="phpstorm"></div>
                        <div class="item"><img src="https://icongr.am/devicon/visualstudio-plain.svg?color=e62d2d" alt="visualstudio"></div>
                    </div>

                    <h6 >I also love:</h6>
                    <div class="mb-4 d-flex gap-4 flex-wrap">
                        <div class="item"><img src="https://icongr.am/devicon/c-original.svg?color=currentColor" alt="c"></div>
                        <div class="item"><img src="https://icongr.am/devicon/python-original.svg?color=currentColor" alt="python"></div>
                        <div class="item"><img src="https://icongr.am/devicon/angularjs-original.svg?color=currentColor" alt="angularjs"></div>
                        <div class="item"><img src="https://icongr.am/devicon/wordpress-plain.svg?color=currentColor" alt="wordpress"></div>

                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Training & Certification</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-12">
                                    <h5>PHP with Laravel Framework</h5>
                                    <hr class="text-primary my-2">
                                    <h6 class="mb-0">Basis Institute of Technology & Management (BITM)</h6>
                                    <p class="text-primary small mb-0">Under the Skills for Employment Investments Program (SEIP)</p>
                                    <p class="mb-0"><b>Duration:</b> 240 hours</p>
                                    <p><b>Covered topics:</b>
                                        <small class="bg-secondary px-2">PHP</small>
                                        <small class="bg-secondary px-2">OOP</small>
                                        <small class="bg-secondary px-2">MVC</small>
                                        <small class="bg-secondary px-2">Laravel</small>
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <h5>Responsive Web Design</h5>
                                    <hr class="text-primary my-2">
                                    <h6 class="mb-0">Freecodecamp.org</h6>
                                    <p class="mb-0"><b>Duration:</b> 300 hours</p>
                                    <p><b>Covered topics:</b>
                                        <small class="bg-secondary px-2">HTML</small>
                                        <small class="bg-secondary px-2">CSS</small>
                                        <small class="bg-secondary px-2">Flexbox</small>
                                        <small class="bg-secondary px-2">Grid</small>
                                        <small class="bg-secondary px-2">Responsive Design</small>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-12">
                                    <h5>BSc in Computer Science & Engineering</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2017 - 2021</p>
                                    <h6 class="mb-0">University of Scholars</h6>
                                </div>
                                <div class="col-sm-12">
                                    <h5>Higher Secondary School Certificate</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - 2015</p>
                                    <h6 class="mb-0">Jahangirnagar University School & College</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->

    <!-- Projects Start -->
    <div class="container-xxl bg-light py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">{{$projectTitle->name}}</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Projects</li>
                        <li class="mx-3" data-filter=".first">UI/UX Design</li>
                        <li class="mx-3" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}front/assets/img/project-1.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}front/assets/img/project-2.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}front/assets/img/project-3.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}front/assets/img/project-4.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}front/assets/img/project-5.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/')}}front/assets/img/project-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">123 Street, New York, USA</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+012 345 6789</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">info@example.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
