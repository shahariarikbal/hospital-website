@extends('frontend.master')

@section('title')
    About us
@endsection

@section('content')
    <!-- Home Design Inner Pages -->
    <div class="ulockd-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ulockd-icd-layer">
                        <ul class="list-inline ulockd-icd-sub-menu">
                            <li><a href="{{ url('/') }}"> HOME </a></li>
                            <li><a href="#"> > </a></li>
                            <li> <a href="#"> ABOUT US </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our About -->
    <section class="ulockd-about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <div class="ulock-about">
                        <h1 class="title-bottom ulockd-mrgn630">We Are <span class="text-thm2"> Bclinico</span></h1>
                        <p>Bclinico Is a Health & Medical Bootstrap Template. Now Bclinico  Is a Biggest organizations In This Globe. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo repudiandae sunt delectus praesentium adipisci voluptatem sed, consectetur!</p>
                        <h4>Nemo repudiandae sunt delectus praesentium adipisci voluptatem sed</h4>
                        <p class="ulockd-mrgn620">Consectetur adipisicing elit. Assumenda in, animi facere illum culpa autem minima nostrum doloribus dignissimos! consectetur adipisicing elit. Nemo repudiandae sunt delectus praesentium adipisci voluptatem sed, consectetur!</p>
                        <ul class="list-unstyled ulockd-mrgn625">
                            <li><i class="fa fa-caret-right ulockd-pad310"></i> Consectetur adipisicing elit. Assumenda in</li>
                            <li><i class="fa fa-caret-right ulockd-pad310"></i> animi facere illum culpa autem minima nostrum doloribus dignissimos!</li>
                            <li><i class="fa fa-caret-right ulockd-pad310"></i> consectetur adipisicing elit. Nemo repudiandae sunt delectus praesentium voluptatem sed</li>
                            <li><i class="fa fa-caret-right ulockd-pad310"></i> consectetur adipisicing elit. Nemo repudiandae sunt delectus.</li>
                        </ul>
                        <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="ulockd-about-box ulockd-mrgn1260">
                        <div class="ab-thumb">
                            <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/about/2.jpg" alt="5.jpg">
                        </div>
                        <p class="text-center ulockd-mrgn1210">Bclinico Health & Medical html template can change your online life. You can make excellent site with usine Bclinico.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="ulockd-team-two">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <div class="ulockd-main-title">
                        <h2 class="text-uppercase"><span class="text-thm2">WHO WE ARE</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit necessitatibus maiores fugiat eaque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <img src="{{ asset('/frontend/') }}/images/about/2.jpg" alt="2.jpg">
                    <h3>Our Mision</h3>
                    <p>Consectetur adipisicing elit. Aliquam totam cupiditate iste doloribus, unde minima vero quidem. Porro, laborum obcaecati architecto ex nostrum doloremque magni. Culpa sunt, incidunt eos atque officia harum impedit asperiores tempora, quam amet quaerat.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <img src="{{ asset('/frontend/') }}/images/about/3.jpg" alt="3.jpg">
                    <h3>Our Vision</h3>
                    <p>Consectetur adipisicing elit. Vero laboriosam aperiam quasi nihil, obcaecati ducimus accusantium corporis deserunt neque, adipisci consequatur repellat natus, veritatis, sed! Ipsam repellendus molestiae quaerat quia officiis neque. Necessitatibus facilis ex suscipit commodi reprehenderit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our About Page faq Section -->
    <section class="ulockd-ap-faq">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="ulockd-faq-box">
                        <div class="ulockd-faq-title clearfix">
                            <h2>Frequently Asked  <span class="text-thm2">Questions</span></h2>
                        </div>
                        <div class="ulockd-faq-content">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-angle-down icon-1"></i>
                                                <i class="fa fa-angle-up icon-2"></i>
                                                What is Bclinico?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non laboriosam dolores qui unde sequi nulla facilis neque. Molestiae ducimus, ad quam similique, minus nulla sunt pariatur vitae eligendi voluptatem voluptas voluptatibus nisi porro nemo nihil expedita eos repellat nobis delectus blanditiis libero.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fa fa-angle-down icon-1"></i>
                                                <i class="fa fa-angle-up icon-2"></i>
                                                What about Bclinico?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint quos unde, commodi consequuntur quas, error aperiam nemo vitae maiores illum voluptate repudiandae sed assumenda aliquam, ipsum praesentium alias. Itaque illo, rem maiores!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-angle-down icon-1"></i>
                                                <i class="fa fa-angle-up icon-2"></i>
                                                About Bclinico Medical?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p>Yes. Administrations are accessible for as meager as a couple of hours a visit up to 24 hours, 7 days seven days, 365 days a year.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h2 class="ulockd-mrgn120">Bclinico  <span class="text-thm2">Activity</span></h2>
                    <div class="ulockd-about-video ulockd-mrgn1225">
                        <div class="ulockd-avdo-thumb">
                            <iframe width="100%" height="265px" src="http://www.youtube.com/embed/qKoVto0Wegg?autoplay=0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our First Divider -->
    <section class="ulockd-frst-divider style1 parallax" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-12 text-center">
                    <div class="subscriber-form subscribe">
                        <h1 class="color-white ulockd-mrgn120">Don???t miss out on the Latest News</h1>
                        <h4>We won???t spam you and we respect your privacy.</h4>
                        <input placeholder="Your Email">
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="ulockd-team-two">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <div class="ulockd-main-title">
                        <h2 class="text-uppercase">OUR <span class="text-thm2">Team</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit necessitatibus maiores fugiat eaque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="ulockd-team-member">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/team/1.jpg" alt="team1.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">James Williams</h3>
                            <h5 class="member-post">- Neurologist</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="ulockd-team-member">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/team/2.jpg" alt="team2.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Ana Smith</h3>
                            <h5 class="member-post">- Dentist</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="ulockd-team-member">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/team/3.jpg" alt="3.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="mailto:name@email.com"><i class="fa fa-envelope"></i> Email</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Jhon Smith</h3>
                            <h5 class="member-post">- Cardiologist</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="ulockd-team-member">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/team/4.jpg" alt="4.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">James Williams</h3>
                            <h5 class="member-post">- Neurologist</h5>
                            <p>Lorem ipsum dolor sit amet, esse consectetur adipisicing elit.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="ulockd-team-member">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/team/5.jpg" alt="5.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Ana Smith</h3>
                            <h5 class="member-post">- Dentist</h5>
                            <p>Lorem ipsum dolor sit amet, esse consectetur adipisicing elit.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="ulockd-team-member">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/team/6.jpg" alt="6.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Jhon Smith</h3>
                            <h5 class="member-post">- Cardiologist</h5>
                            <p>Lorem ipsum dolor sit amet, esse consectetur adipisicing elit.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="ulockd-team-member">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/team/7.jpg" alt="7.jpg">
                            <div class="team-overlay">
                                <ul class="list-inline team-icon style2">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-details text-left">
                            <h3 class="member-name">Jhon Smith</h3>
                            <h5 class="member-post">- Cardiologist</h5>
                            <p>Lorem ipsum dolor sit amet, esse consectetur adipisicing elit.</p>
                            <button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="flip-container text-left">
                        <div class="flipper">
                            <div class="front" style="background: url(images/team/8.jpg) 0 0 no-repeat;"></div>
                            <div class="back">
                                <div class="back-logo"></div>
                                <h3 class="name">John Smith</h3>
                                <h5 class="back-title">Volunteer</h5>
                                <p>Consectetur adipisicing elit. Nisi rem nihil dolores enim consequatur, aperiam quos odit explicabo mollitia quisquam esse. Provident assumenda officiis, commodi cupiditate cumque.</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-phone color-black33"></i> Phone: +45 21 750 7201</a></li>
                                    <li><a href="#"><i class="fa fa-fax color-black33"></i> Fax: +45 21 750 7200 </a></li>
                                    <li><a href="#"><i class="fa fa-envelope color-black33"></i> info@contactus.com</a></li>
                                </ul>
                                <ul class="list-inline team-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="flip-container text-left">
                        <div class="flipper">
                            <div class="front" style="background: url(images/team/2.jpg) 0 0 no-repeat;"></div>
                            <div class="back">
                                <h3 class="name">Ana Smith</h3>
                                <h5 class="back-title">Volunteer</h5>
                                <p>Consectetur adipisicing elit. Nisi rem nihil dolores enim consequatur, aperiam quos odit explicabo mollitia quisquam esse. Provident assumenda officiis, commodi cupiditate cumque.</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-phone color-black33"></i> Phone: +45 21 750 7201</a></li>
                                    <li><a href="#"><i class="fa fa-fax color-black33"></i> Fax: +45 21 750 7200 </a></li>
                                    <li><a href="#"><i class="fa fa-envelope color-black33"></i> info@contactus.com</a></li>
                                </ul>
                                <ul class="list-inline team-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="flip-container text-left">
                        <div class="flipper">
                            <div class="front" style="background: url(images/team/3.jpg) 0 0 no-repeat;"></div>
                            <div class="back">
                                <div class="back-logo"></div>
                                <h3 class="name">Jhon Smith</h3>
                                <h5 class="back-title">Volunteer</h5>
                                <p>Consectetur adipisicing elit. Nisi rem nihil dolores enim consequatur, aperiam quos odit explicabo mollitia quisquam esse. Provident assumenda officiis, commodi cupiditate cumque.</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fa fa-phone color-black33"></i> Phone: +45 21 750 7201</a></li>
                                    <li><a href="#"><i class="fa fa-fax color-black33"></i> Fax: +45 21 750 7200 </a></li>
                                    <li><a href="#"><i class="fa fa-envelope color-black33"></i> info@contactus.com</a></li>
                                </ul>
                                <ul class="list-inline team-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
