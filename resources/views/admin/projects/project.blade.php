@extends('admin.layout')
@section('title', $project->name.' | Panel de Administación SinSis')
@section('body')
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1100');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                <!-- start page title -->
                <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">{{ $project->name }}</h1>
                <span class="text-white-2 opacity6 alt-font">{{ $project->description }}</span>
                <!-- end page title --> 
            </div>
        </div>
    </div>
</section>
<!-- end page title section --> 
<!-- start blog content section --> 
<section>
    <div class="container">
        <div class="row">
            <aside class="col-12 col-lg-3">               
                <div class="margin-45px-bottom sm-margin-25px-bottom">
                    <div class="margin-45px-bottom sm-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Estado</span></div>
                        <a class="btn btn-very-small btn-transparent-white border text-uppercase w-100" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
                    </div> 
                    <div class="margin-45px-bottom sm-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>Administradores</span></div>
                        <ul class="latest-post position-relative">
                        @foreach ($project->users as $user)
                            <li class="media">                          
                                <div class="media-body text-small"><a href="blog-post-layout-01.html" class="text-extra-dark-gray"><span class="d-block margin-5px-bottom">{{ $user->name }}</span></a> <span class="d-block text-medium-gray text-small">{{ $user->email }}</span></div>
                            </li>     
                        @endforeach
                        </ul>
                    </div>
                    <form action="" id="add-users-prject">
                        <select name="" id="">
                            @foreach ($users as $user)
                                <option value="">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>                
                <div class="margin-45px-bottom sm-margin-25px-bottom">
                    <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Contenido</span></div>
                    <ul class="list-style-6 margin-50px-bottom text-small">
                        <li><a href="blog-masonry.html">Entrevistas</a><span>12</span></li>
                        <li><a href="blog-masonry.html">Diagnosticos</a><span>05</span></li>
                        <li><a href="blog-masonry.html">Propuestas</a><span>08</span></li>                       
                    </ul>   
                </div>                                              
                <div class="margin-45px-bottom sm-margin-25px-bottom">
                    <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Empresa</span></div>
                    <ul class="list-style-6 margin-20px-bottom text-small">
                        <li><a href="blog-grid.html">{{ $enterprise->name }}</a><span>12</span></li>                        
                    </ul>   
                </div>
            </aside>
            <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom md-padding-15px-lr">
                <!-- start post item --> 
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-standard-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-standard-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Design is thinking made visual</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Emily Wright</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Design</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-standard-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end post item -->  
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image no-padding md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-gallery-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-gallery-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">The world’s business leaders</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Jennifer Smith</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Branding</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-gallery-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end post item -->  
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-slider-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-slider-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">You are what you are seen to be</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Willie Clark</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Branding</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-slider-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end post item --> 
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-html5-video-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-html5-video-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Design is creativity with strategy</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">John Doe</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Quotes</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-html5-video-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end post item --> 
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-youtube-video-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-youtube-video-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Simple design, intense content</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Geoffrey Weaver</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Branding</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-youtube-video-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end post item -->   
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-vimeo-video-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-vimeo-video-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Design is intelligence made visible</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Geoffrey Weaver</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Advertisement</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-vimeo-video-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end blog item -->  
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-standard-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-standard-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Math is easy; design is hard</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Jay Benjamin</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Blog</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-standard-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end post item -->  
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-html5-video-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left ">
                            <a href="blog-html5-video-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">The world’s business leaders</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Jay Benjamin</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Design</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-html5-video-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end post item -->  
                <!-- start post item -->
                <div class="blog-post-content d-flex align-items-center flex-wrap text-center text-md-left">
                    <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                        <a href="blog-blog-gallery-post.html-post.html"><img src="http://placehold.it/1200x840" alt=""></a>
                    </div>
                    <div class="col-12 col-lg-6 blog-text p-0">
                        <div class="content margin-20px-bottom md-no-padding-left">
                            <a href="blog-blog-gallery-post.html-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">Good design is good business</a>
                            <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Jessica Hart</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Design</a></div>
                            <p class="m-0 width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-gallery-post.html">Continue Reading</a>
                    </div>
                </div>
                <!-- end post item -->  
                <!-- start pagination -->
                <div class="col-12 text-center margin-100px-top md-margin-50px-top position-relative wow fadeInUp">
                    <div class="pagination text-small text-uppercase text-extra-dark-gray">
                        <ul class="mx-auto">
                            <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end pagination -->
            </main>            
        </div>
    </div>
</section>
<!-- end blog content section -->  
<!-- start footer --> 
<footer class="footer-classic-dark bg-extra-dark-gray padding-five-bottom sm-padding-30px-bottom">
    <div class="bg-dark-footer padding-50px-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row align-items-center">
                <!-- start slogan -->
                <div class="col-lg-4 col-md-5 text-center alt-font sm-margin-15px-bottom">
                    London based highly creative studio
                </div>
                <!-- end slogan -->
                <!-- start logo -->
                <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                    <a href="index.html"><img class="footer-logo" src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Pofo"></a>
                </div>
                <!-- end logo -->
                <!-- start social media -->
                <div class="col-lg-4 col-md-5 text-center">
                    <span class="alt-font margin-20px-right">On social networks</span>
                    <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                        <ul class="small-icon mb-0">
                            <li><a class="facebook text-white-2" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="twitter text-white-2" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="google text-white-2" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="instagram text-white-2" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end social media -->
            </div>
        </div>
    </div>
    <div class="footer-widget-area padding-five-top padding-30px-bottom sm-padding-30px-top">
        <div class="container">
            <div class="row">
                <!-- start about -->
                <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom text-center text-md-left last-paragraph-no-margin">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">About Agency</div>
                    <p class="text-small width-95 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the and typesetting industry. </p>
                </div>
                <!-- end about -->
                <!-- start blog post -->
                <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600 text-center text-md-left">Latest Blog Post</div>
                    <ul class="latest-post position-relative">
                        <li class="media border-bottom border-color-medium-dark-gray">
                            <figure>
                                <a href="blog-post-layout-01.html"><img src="http://placehold.it/700x403" alt=""></a>
                            </figure>
                            <div class="media-body text-small"><a href="blog-post-layout-01.html" class="d-block mb-1">Design is not just what looks...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                        </li>
                        <li class="media border-bottom border-color-medium-dark-gray">
                            <figure>
                                <a href="blog-post-layout-02.html"><img src="http://placehold.it/700x403" alt=""></a>
                            </figure>
                            <div class="media-body text-small"><a href="blog-post-layout-02.html" class="d-block mb-1">A lot of care, effort & passion...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                        </li>
                        <li class="media">
                            <figure>
                                <a href="blog-post-layout-03.html"><img src="http://placehold.it/700x403" alt=""></a>
                            </figure>
                            <div class="media-body text-small"><a href="blog-post-layout-03.html" class="d-block mb-1">I love making the stuff, that's...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                        </li>
                    </ul>
                </div>
                <!-- end blog post -->
                <!-- start newsletter -->
                <div class="col-lg-3 col-md-6 widget md-margin-30px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">Subscribe Newsletter</div>
                    <p class="text-small width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <form id="subscribenewsletterform" action="javascript:void(0)" method="post">
                        <div class="position-relative newsletter width-95">
                            <div id="success-subscribe-newsletter" class="mx-0"></div>
                            <input type="text" id="email" name="email" class="bg-transparent text-small m-0 border-color-medium-dark-gray" placeholder="Enter your email...">
                            <button id="button-subscribe-newsletter" type="submit" class="btn btn-arrow-small position-absolute border-color-medium-dark-gray"><i class="fas fa-caret-right no-margin-left"></i></button>
                        </div>   
                    </form>
                </div>
                <!-- end newsletter -->
                <!-- start instagram -->
                <div class="col-lg-3 col-md-6 widget md-margin-5px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Follow us Instagram</div>
                    <div class="instagram-follow-api">
                        <ul id="instaFeed-footer"></ul>
                    </div>
                </div>
                <!-- end instagram -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-bottom border-top border-color-medium-dark-gray padding-30px-top">
            <div class="row">
                <!-- start copyright -->
                <div class="col-lg-6 col-md-6 text-small text-md-left text-center">POFO - Portfolio Concept Theme</div>
                <div class="col-lg-6 col-md-6 text-small text-md-right text-center">&COPY; 2019 POFO is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" title="ThemeZaa">ThemeZaa</a></div>
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
@endsection