<section id="home" class="home">
    <div class="container">
        <div class="row">
            <div class="main_home">
                <div class="col-sm-6">
                    <div class="home-shadow text-right">
                        <img src="{{ getSliderImage($settings['main-image']->value)}}" alt=""/>
                    </div>
                </div>
                <div class="col-sm-6 text-slider">
                    <div class="home_text text-left">
                        <h4>{{$settings['slider-main-title']->value}}</h4>
                        <h1 class="text-black">{{$settings['first-hash-tag']->value}}</h1>
                        <h1 class="text-black">{{$settings['second-hash-tag']->value}}</h1>
                    </div>

                    <div class="home_btns m-top-30 text-center">
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