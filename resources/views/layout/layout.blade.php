<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ app()->getLocale() }}"> <!--<![endif]-->
@include('layout.head')

<body data-spy="scroll" data-target=".navbar-collapse">
<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>


<div class="culmn">
    <!--Home page style-->


    <nav class="navbar navbar-default bootsnav navbar-fixed black no-background">
        <!-- Start header nav -->
    @include('layout.header')
    <!-- end header nav -->

        <!-- Start Side Menu -->
    @include('layout.side_bar')
    <!-- End Side Menu -->
    </nav>


    <!--Home Sections-->
    <section id="home" class="home">
        <div class="container">
            <div class="row">
                <div class="main_home">
                    <div class="col-sm-6">
                        <div class="home-shadow text-right">
                            <img src="{{asset('images/shadow-img.png')}}" alt=""/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="home_text text-left">
                            <h4>Hello fellas, I’m a freelance</h4>
                            <h1 class="text-black">#webdesigner</h1>
                        </div>

                        <div class="home_btns m-top-40 text-center">
                            <a href="" class="btn btn-primary m-top-20">about me</a>
                        </div>

                        <a class="mouse-scroll" href="#about">
                                    <span class="mouse">
                                        <span class="mouse-movement"></span>
                                    </span>
                            <span class="mouse-message fadeIn">scroll</span>
                        </a>
                    </div>
                </div>


            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->


    <!--About Section-->
    <section id="about" class="about bg-light roomy-150">
        <div class="container">
            <div class="row">
                <div class="main_about">
                    <div class="col-md-5 col-md-offset-1">
                        <div class="about_content">
                            <div class="head_right">
                                <h2>About me</h2>
                            </div>
                            <div class="about_content_text">
                                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                                    Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues
                                    differe solmen in li grammatic.</p>

                                <div class="divider1 m-top-10"></div>

                                <div class="about_content_item m-top-30">
                                    <h6><i class="fa fa-graduation-cap"></i> Education History</h6>
                                    <ul>
                                        <li><a href=""><i class="fa fa-chevron-right"></i>School of Design</a></li>
                                    </ul>
                                </div>
                                <div class="about_content_item m-top-20">
                                    <h6><i class="fa fa-briefcase"></i> Work Experiences</h6>
                                    <ul>
                                        <li><i class="fa fa-chevron-right"></i>London Studio | 2012</li>
                                        <li><i class="fa fa-chevron-right"></i>Envato Designer | 2013</li>
                                        <li><i class="fa fa-chevron-right"></i>Dribbble | 2015</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off col-md-6 -->

                    <div class="col-md-5 col-md-offset-1 sm-m-top-50">
                        <div class="head_title text-right">
                            <h5><span class="divider"></span> my name is john doe</h5>
                        </div>
                        <div class="about_left_item m-top-50">
                            <img src="{{asset('images/about-img1.jpg')}}" alt=""/>
                        </div>

                        <div class="about_socail m-top-50">
                            <ul class="list-inline">
                                <li><span class="divider"></span></li>
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- End off col-md-6 -->

                </div><!-- End off Main About -->

            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off About us Section -->


    <!--Portfolio Section-->
    <section id="portfolio" class="portfolio bg-white roomy-150">
        <div class="container">
            <div class="row">
                <div class="main_portfolio">
                    <div class="col-md-5">
                        <div class="portfolio_item">
                            <div class="head_title">
                                <h5><span class="divider"></span> my latest works</h5>
                            </div>
                            <div class="row m-top-60">
                                <div class="col-sm-6">
                                    <div class="portf_item_text photography">
                                        <a href="{{asset('images/portfolio-1.jpg')}}" class="popup-img"><img
                                                    src="{{asset('images/portfolio-1.jpg')}}" alt=""/></a>
                                        <h5 class="m-top-30">Photography</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="portf_item_text branding xs-m-top-40">
                                        <a href="{{asset('images/portfolio-1.jpg')}}" class="popup-img"><img
                                                    src="{{asset('images/portfolio-2.jpg')}}" alt=""/></a>
                                        <h5 class="m-top-30">Branding</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off col-md-6  -->

                    <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                        <div class="portfolio_content">
                            <div class="head_right">
                                <h2>portfolio</h2>
                            </div>

                            <div class="portfolio_content_text">
                                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                                    Por scientie,
                                    musica, sport etc, litot Europa usa li sam vocabular.
                                    Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                    vocabules.</p>
                                <p>Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar
                                    payar custosi traductores.</p>
                            </div>
                        </div>

                        <div class="may_client m-top-50">
                            <div class="head_title text-right">
                                <h5><span class="divider"></span> my clients</h5>
                            </div>
                            <div class="client_brand m-top-60 text-right">
                                <ul class="list-inline">
                                    <li><img src="{{asset('images/clogo1.png')}}" alt=""/></li>
                                    <li><img src="{{asset('images/clogo2.png')}}" alt=""/></li>
                                    <li><img src="{{asset('images/clogo3.png')}}" alt=""/></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End off col-md-6  -->

                    <div class="portfolio_btn text-center fix m-top-100">
                        <a href="" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </div><!-- End off row -->
        </div><!-- End off container -->
    </section><!-- End off portfolio Section -->


    <!--Choose Section-->
    <section id="choose" class="choose bg-light roomy-150">
        <div class="container">
            <div class="row">
                <div class="main_choose">
                    <div class="col-md-5">
                        <div class="choose_item">
                            <div class="head_right">
                                <h2>what I do</h2>
                            </div>
                            <div class="choose_item_text">
                                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                                    Por scientie,
                                    musica, sport etc, litot Europa usa li sam vocabular.
                                    Li lingues differe solmen in li grammatica, li pronunciation e li plu commun
                                    vocabules.</p>
                                <p>Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar
                                    payar custosi traductores.</p>
                            </div>
                            <div class="choose_btn text-center m-top-100">
                                <a href="" class="btn btn-primary">hire me</a>
                            </div>
                        </div>
                    </div> <!-- End off col-md-6 -->

                    <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                        <div class="choose_list fix">
                            <div class="choose_list_item fix">
                                <div class="choose_icon">
                                    <i class="fa fa-diamond"></i>
                                </div>
                                <div class="list_item_text">
                                    <h5>Branding Identity</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque </p>
                                </div>
                            </div>
                            <div class="choose_list_item fix m-top-40">
                                <div class="choose_icon">
                                    <i class="fa fa-tablet"></i>
                                </div>
                                <div class="list_item_text">
                                    <h5>UI/UX Design</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque </p>
                                </div>
                            </div>
                            <div class="choose_list_item fix m-top-40">
                                <div class="choose_icon">
                                    <i class="fa fa-send-o"></i>
                                </div>
                                <div class="list_item_text">
                                    <h5>Logo Design</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque </p>
                                </div>
                            </div>
                            <div class="choose_list_item fix m-top-40">
                                <div class="choose_icon">
                                    <i class="fa  fa-pencil"></i>
                                </div>
                                <div class="list_item_text">
                                    <h5>Illustration</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End off row -->
        </div> <!-- End off container -->
    </section> <!-- End off Choose Section-->


    <!--Contact Section-->
    <section id="contact" class="contact bg-white roomy-150">
        <div class="container">
            <div class="row">
                <div class="main_contact">
                    <div class="head_title">
                        <h5><span class="divider"></span> Get enquiries now</h5>
                    </div>
                    <div class="col-md-5">
                        <form class="m-top-50">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your e-mail">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your budget">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>type of proroject</option>
                                    <option>type</option>
                                    <option>proroject</option>
                                    <option>of</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="you message"></textarea>
                            </div>
                            <div class="form_btn text-right m-top-50">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                        <div class="contact_content">
                            <div class="head_right">
                                <h2>contact me</h2>
                            </div>

                            <div class="contact_content_text">
                                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
                                    Por scientie, musica, sport etc, litot Europa usa li sam vocabular.</p>

                                <ul class="m-top-50">
                                    <li>Lorem ipsum street 123 <br/>
                                        London.
                                    </li>
                                    <li class="phone">+62818 0977 3430</li>
                                    <li class="info">info@email.com</li>
                                </ul>

                                <div class="author_text text-right">
                                    <h5>Regards!</h5>
                                    <h1>John Doe</h1>
                                    <h6>UI/UX & Web Designer</h6>
                                </div>
                                <div class="copyright text-right m-top-80">
                                    <p class="wow fadeInRight">Made with <i class="fa fa-heart"></i> by <a
                                                href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All
                                        Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
</div><!--End off Preloader -->
@include('layout.script')
</body>

</html>