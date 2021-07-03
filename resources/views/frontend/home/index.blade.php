@extends('frontend.master')

@section('title')
    Home
@endsection

@section('content')
    <!-- Home Design -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1" class=""></li>
						<li data-target="#carousel" data-slide-to="2" class=""></li>
					</ol>
					<!-- Carousel items -->

					<div class="carousel-inner carousel-zoom">
                        @foreach($data['banner'] as $info)
                        <div class="item {{ $loop->first ? ' active' : '' }}">
                            <img class="img-responsive" src="{{ $info->image }}" alt="h7.jpg">
                            <div class="carousel-caption style1">
                                <h1 data-animation="animated zoomInLeft" class="cap-txt">{{ $info->name }}</h1>
                                <p data-animation="animated bounceInDown">Giving The Best Solution</p>
                                <!-- <p class="style2" data-animation="animated bounceInUp">Thousand of people satisfied our medical treatment</p> -->
                                <button data-animation="animated bounceInUp" class="btn btn-lg ulockd-btn-thm2 hidden-xs"><span>More Info</span></button>
                            </div>
                        </div>
                        @endforeach
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
						<a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our About -->
	<section class="ulockd-about bgc-snowshade2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2><span class="text-thm2">Bclini<span class="color-nightblue">C</span>o</span> Your Medical Assist</h2>
						<p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
						<div class="mt-separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-box text-center">
						<div class="ab-icn"><span class="flaticon-sign ulockd-bgthm"></span></div>
						<h3>Since 1970</h3>
						<p>Laboriosam dolores aut inventore cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur..</p>
						<button type="submit" class="btn btn-default ulockd-btn-thm2"> More Info <i class="fa fa-info"></i></button>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-box text-center">
						<div class="ab-icn"><span class="flaticon-emergency-ambulance ulockd-bgthm"></span></div>
						<h3>Emergency Calls</h3>
						<p>Laboriosam dolores aut inventore cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
						<button type="submit" class="btn btn-default ulockd-btn-thm2"> Call Us <i class="fa fa-phone"></i></button>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-box text-center">
						<div class="ab-icn"><span class="flaticon-people-8 ulockd-bgthm"></span></div>
						<h3>Apointments</h3>
						<p>Laboriosam dolores aut inventore cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
						<a href="#appointment_view" data-toggle="modal" class="btn btn-default ulockd-btn-thm2"> Make An Apointment <i class="flaticon-people-8"></i></a>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="about-box">
						<div class="ab-icn text-center"><span class="flaticon-clock-2 ulockd-bgthm"></span></div>
						<h3 class="text-center">Opening Hour</h3>
						<ul class="list-group">
							<li class="list-group-item"><strong>Mon - Fri </strong> <span class="badge ulockd-bgthm"> 8:00 - 20:30</span></li>
							<li class="list-group-item"><strong>Saturday </strong> <span class="badge ulockd-bgthm"> 8:30 - 18:00</span></li>
							<li class="list-group-item"><strong>Sunday </strong> <span class="badge ulockd-bgthm"> 9:00 - 20:30</span></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Our Service -->
	<section class="ulockd-service bgc-snowshade2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-uppercase">Our <span class="text-thm2">Service</span></h2>
						<p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
						<div class="mt-separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-medical-4 text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Qualified Doctors</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-person-1 text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>24/7 Service</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-medical-1 text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Cancer Clinic</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-medical-3 text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Blood Test</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-folder text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Medical counselling</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-sign text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Rehabilitation</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-tool text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Pathology</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-circle text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Medicine Facilities</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-kidney text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Kidney Disease</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-signs text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Smoke Prohibited</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-people-2 text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Primary Checkup</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3 ulockd-pad395">
					<div class="ficon-box text-center hvr-shadow">
						<div class="ficon">
							<span class="flaticon-medical-2 text-thm2" title="Feature Icon Box"></span>
						</div>
						<div class="fib-details">
							<h4>Orthopedic</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, iste.</p>
							<a href="page-service-details">Read More <i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Team -->
	<section class="ulockd-team bgc-icebluelight">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-uppercase">Our <span class="text-thm2">Doctor's</span></h2>
						<p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
						<div class="mt-separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs team-tab" role="tablist">
                        @foreach($data['doctors'] as $key => $doctor)
                            <li role="presentation" class="{{ $loop->first ? ' active' : '' }}">
                                <a href="#team{{ $key+1 }}" aria-controls="team{{ $key+1 }}" role="tab" data-toggle="tab">
                                    <img src="{{ $doctor->avatar }}" height="100" width="90" alt="s1.jpg">
                                </a>
                            </li>
                        @endforeach
					</ul>
				</div>
			</div>
			<div class="row">
				<!-- Tab panes -->
				<div class="tab-content">
                    @foreach($data['doctors'] as $key => $doctor)
			  		    <div role="tabpanel" class="tab-pane {{ $loop->first ? ' active' : '' }} team1" id="team{{ $key+1 }}">
						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
							<div class="ulockd-team-member">
								<div class="team-thumb">
									<img class="img-responsive img-whp" src="{{ $doctor->avatar }}" style="object-fit: cover" alt="1.jpg">
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
									<h3>{{ $doctor->department ? $doctor->department->name : '' }} <small class="text-thm2">- {{ $doctor->first_name. ' ' .$doctor->last_name }}</small> </h3>
									<a href="#appointment_view{{ $key+1 }}" data-toggle="modal" class="btn btn-default ulockd-btn-thm2"> Make An Apointment <i class="flaticon-people-8"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
							<div class="team-overview">
								<h3 class="tm-ovv-title">Overview for {{ $doctor->first_name. ' ' .$doctor->last_name }}</h3>
								<strong>Experience:</strong> {{ $doctor->experience }} years<br>
								<strong>Expertise:</strong> {{ $doctor->expertise }}<br>
								<strong>Board Certification:</strong> {{ $doctor->board_certification }}.<br>
								<strong>Appointment:</strong> {{ $doctor->appointment }}. <br>
								<strong>Schdule:</strong> {{ $doctor->schdule }}. <br>
								<address>
									<strong>Primary Address.</strong><br>
                                    {{ $doctor->address }}
									<br>
									<abbr title="Phone">P:</abbr> {{ $doctor->phone }}
								</address>
								<address>
									<strong>{{ $doctor->first_name. ' ' .$doctor->last_name }}</strong><br>
									<a href="mailto:#">{{ $doctor->email }}</a>
								</address>
							</div>
						</div>
			  		</div>

                        <!-- Product Popup View Start-->
                        <div class="modal fade appointment_view" id="appointment_view{{ $key+1 }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                        <h3 class="modal-title">Appointment Form. {{ $doctor->first_name. ' ' .$doctor->last_name }}</h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <!-- Appointment Form Starts -->
                                                <form id="appointment_form_{{ $key+1 }}" name="appointment_form" class="appointment_form text-center" action="{{ url('/send/appointment') }}" method="post" novalidate="novalidate">
                                                    @csrf
                                                    <div class="messages"></div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h2 class="text-thm2">Appointment with Expert</h2>
                                                            <p>Let's Appointment With our Exparts Who Try to Solved Your Problem.</p>
                                                            <div class="form-group text-left">
                                                                <label for="form_name"><i class="fa fa-user-o"></i> Name <small>*</small></label>
                                                                <input id="form_name_{{ $key+1 }}" name="name" class="form-control" placeholder="enter a name" required="required" data-error="Name is required." type="text">
                                                                <input name="doctor_id" id="doctor_id_{{ $key+1 }}" class="form-control" type="hidden" value="{{ $doctor->id }}">
                                                                <div class="help-block with-errors"></div>
                                                                <small class="text-danger error" id="name_error_{{ $key+1 }}"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group text-left">
                                                                <label for="form_email"><i class="fa fa-envelope-open-o"></i> Email</label>
                                                                <input id="form_email_{{ $key+1 }}" name="email" class="form-control required email" placeholder="enter an email" required="required" data-error="Email is required." type="email">
                                                                <div class="help-block with-errors"></div>
                                                                <small class="text-danger error" id="email_error_{{ $key+1 }}"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group text-left">
                                                                <label for="form_date"><i class="fa fa-calendar-check-o"></i> Date <small>*</small></label>
                                                                <input id="form_date_{{ $key+1 }}" name="appointment_date" class="form-control required" placeholder="enter a date" required="required" data-error="Date is required." type="date">
                                                                <div class="help-block with-errors"></div>
                                                                <small class="text-danger error" id="appointment_error_{{ $key+1 }}"></small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group text-left">
                                                                <label for="form_phone"><i class="fa fa-phone"></i> Phone <small>*</small></label>
                                                                <input id="form_phone_{{ $key+1 }}" name="phone" class="form-control required" placeholder="enter a phone" required="required" data-error="Phone Number is required." type="text">
                                                                <div class="help-block with-errors"></div>
                                                                <small class="text-danger error" id="phone_error_{{ $key+1 }}"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text-left">
                                                        <label for="form_message"><i class="fa fa-file-text-o"></i> Message</label>
                                                        <textarea id="form_message_{{ $key+1 }}" name="message" class="form-control required" rows="5" placeholder="type in a message" required="required" data-error="Message is required."></textarea>
                                                        <div class="help-block with-errors"></div>
                                                        <small class="text-danger error" id="message_error_{{ $key+1 }}"></small>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center" id="success_message_{{ $key+1 }}"></div>
                                                        <div class="col-md-12 text-center" id="error_message_{{ $key+1 }}"></div>
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
                                                        <button type="button" id="sendAppintment_{{ $key+1 }}" onclick="appointment({{ $key+1 }})" class="btn btn-lg ulockd-btn-thm2 sendAppintment" data-loading-text="Getting Few Sec...">Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Popup View End-->
                    @endforeach
				</div>
			</div>
		</div>
	</section>

	<!-- Our Gallery -->
	<section class="ulockd-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-uppercase">Our Special <span class="text-thm2">Department</span></h2>
						<div class="mt-separator"></div>
					</div>
				</div>
			</div>
            <div class="row">
	            <div class="col-md-12">
	                <!-- Masonry Filter -->
	                <ul class="list-inline masonry-filter text-center">
	                    <li><a href="#" class="active" data-filter="*">All</a></li>
                        @foreach($data['departments'] as $key => $department)
	                    <li><a href="#" data-filter=".creative{{ $key+1 }}" class="">{{ $department->name }}</a></li>
                        @endforeach
	                </ul>
	                <!-- End Masonry Filter -->

	                <!-- Masonry Grid -->
	                <div id="grid" class="masonry-gallery grid-4 clearfix">

		                <!-- Masonry Item -->
		                <div class="isotope-item creative corporate">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/gallery/9.jpg" alt="9.jpg">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Baby Care</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{ asset('/frontend/') }}/images/gallery/9.jpg" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item corporate design coding">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/gallery/10.jpg" alt="10.jpg">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Dental Department</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{ asset('/frontend/') }}/images/gallery/10.jpg" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item corporate coding design">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/gallery/11.jpg" alt="11.jpg">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Gynecology Department</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{ asset('/frontend/') }}/images/gallery/11.jpg" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item creative development">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/gallery/12.jpg" alt="12.jpg">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Emergency Department</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{ asset('/frontend/') }}/images/gallery/12.jpg" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item corporate coding">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/gallery/13.jpg" alt="13.jpg">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Surgery Department</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{ asset('/frontend/') }}/images/gallery/13.jpg" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>

		                <!-- Masonry Item -->
		                <div class="isotope-item design development coding">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/gallery/14.jpg" alt="14.jpg">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Nurology Department</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="{{ asset('/frontend/') }}/images/gallery/14.jpg" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div>
		                <!-- Masonry = Masonry Item -->
	                </div>
	                <!-- Masonry Gallery Grid Item -->
	            </div>
            </div>
		</div>
	</section>

	<!-- Our First Divider -->
	<section class="ulockd-frst-divider parallax ulockd_bgi3" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h3 class="color-white ulockd-mrgn120 ulockd-mrgn640">Bclinico Proud to Say, After Providing You The Best Medical & Health Care Support.</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-xs-6 col-sm-6 col-md-3 text-center">
					<div class="ulockd-ffact-one">
						<span class="flaticon-people-10 text-thm2"></span>
                        <p>Total User</p>
                        <div class="timer">55860</div>
					</div>
				</div>
				<div class="col-xs-6 col-xs-6 col-sm-6 col-md-3 text-center">
					<div class="ulockd-ffact-one">
						<span class="flaticon-medal text-thm2"></span>
                        <p>Total Award</p>
                        <div class="timer">2052</div>
					</div>
				</div>
				<div class="col-xs-6 col-xs-6 col-sm-6 col-md-3 text-center">
					<div class="ulockd-ffact-one">
						<span class="flaticon-interface text-thm2"></span>
                        <p>Successful Projects</p>
                        <div class="timer">22780</div>
					</div>
				</div>
				<div class="col-xs-6 col-xs-6 col-sm-6 col-md-3 text-center">
					<div class="ulockd-ffact-one">
						<span class="flaticon-checked-mark text-thm2"></span>
                        <p>Total Supported</p>
                        <div class="timer">707400</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Blog -->
	<section class="ulockd-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="text-uppercase">LATEST <span class="text-thm2">NEWS</span></h2>
						<p>Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accusan.</p>
						<div class="mt-separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<article class="ulockd-blog-post">
						<div class="post-thumb">
							<img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/blog/1.jpg" alt="1.jpg">
						</div>
						<div class="bp-details one text-left">
							<ul class="list-inline">
								<li><a href=""><span class="flaticon-people-5 text-thm2"></span> UDesign</a></li>
								<li><a href=""><span class="flaticon-chat text-thm2"></span> 9</a></li>
								<li><a href=""><span class="flaticon-thumbs-up-hand-symbol text-thm2"></span> 19</a></li>
								<li><a href=""><span class="flaticon-folder text-thm2"></span> Medical</a></li>
							</ul>
							<h3 class="post-title">Our Latest Post</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus consequatur hic, harum aliquid aperiam fuga beatae.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
					</article>
				</div>
				<div class="col-sm-6 col-md-4">
					<article class="ulockd-blog-post">
						<div class="post-thumb">
							<img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/blog/2.jpg" alt="2.jpg">
						</div>
						<div class="bp-details one text-left">
							<ul class="list-inline">
								<li><a href=""><span class="flaticon-people-5 text-thm2"></span> UDesign</a></li>
								<li><a href=""><span class="flaticon-chat text-thm2"></span> 9</a></li>
								<li><a href=""><span class="flaticon-thumbs-up-hand-symbol text-thm2"></span> 19</a></li>
								<li><a href=""><span class="flaticon-folder text-thm2"></span> Medical</a></li>
							</ul>
							<h3 class="post-title">Our Latest Post</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus consequatur hic, harum aliquid aperiam fuga beatae.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
					</article>
				</div>
				<div class="col-sm-6 col-md-4">
					<article class="ulockd-blog-post">
						<div class="post-thumb">
							<img class="img-responsive img-whp" src="{{ asset('/frontend/') }}/images/blog/3.jpg" alt="3.jpg">
						</div>
						<div class="bp-details one text-left">
							<ul class="list-inline">
								<li><a href=""><span class="flaticon-people-5 text-thm2"></span> UDesign</a></li>
								<li><a href=""><span class="flaticon-chat text-thm2"></span> 9</a></li>
								<li><a href=""><span class="flaticon-thumbs-up-hand-symbol text-thm2"></span> 19</a></li>
								<li><a href=""><span class="flaticon-folder text-thm2"></span> Medical</a></li>
							</ul>
							<h3 class="post-title">Our Latest Post</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus consequatur hic, harum aliquid aperiam fuga beatae.</p>
							<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partner -->
    <script>
        function appointment(key){
            let data = {
                doctor_id: document.getElementById('doctor_id_'+key).value,
                name: document.getElementById('form_name_'+key).value,
                email: document.getElementById('form_email_'+key).value,
                phone: document.getElementById('form_phone_'+key).value,
                message: document.getElementById('form_message_'+key).value,
                appointment_date: document.getElementById('form_date_'+key).value,
            }

            axios.post('/send/appointment', data)
                .then(response => {
                    if (response.status === 200){
                        let div = document.createElement("div")
                        div.setAttribute("class", "alert alert-success")
                        div.setAttribute("role", "alert")
                        let txt = document.createTextNode('Your appointment has been successfully submitted. Stay with us. Thank you')
                        div.appendChild(txt)

                        // document.getElementById('success_message_'+key).innerHTML = ''
                        document.getElementById('error_message_'+key).innerHTML = ''
                        document.getElementById('success_message_'+key).appendChild(div)

                        document.getElementById('doctor_id_'+key).value = '';
                        document.getElementById('form_name_'+key).value = '';
                        document.getElementById('form_email_'+key).value = '';
                        document.getElementById('form_phone_'+key).value = '';
                        document.getElementById('form_message_'+key).value = '';
                        document.getElementById('form_date_'+key).value = '';
                    }
                    setTimeout(function() {
                        $('#success_message_'+key).fadeOut('fast');
                    }, 2000); // <-- time in milliseconds

                }).catch(error => {
                if (error.response.status == 422){
                    let div = document.createElement("div")
                    div.setAttribute("class", "alert alert-success")
                    div.setAttribute("role", "alert")
                    let txt = document.createTextNode('Something is wrong. Please try again')
                    div.appendChild(txt)

                    // document.getElementById('success_message_'+key).innerHTML = ''
                    document.getElementById('error_message_'+key).appendChild(div)
                    document.getElementById('success_message_'+key).innerHTML = ''

                    if(error.response.data.name && error.response.data.name.length > 0){
                        document.getElementById("name_error_"+key).innerHTML = error.response.data.name[0]
                    }
                    if(error.response.data.email && error.response.data.email.length > 0){
                        document.getElementById("email_error_"+key).innerHTML = error.response.data.email[0]
                    }
                    if(error.response.data.phone && error.response.data.phone.length > 0){
                        document.getElementById("phone_error_"+key).innerHTML = error.response.data.phone[0]
                    }
                    if(error.response.data.appointment_date && error.response.data.appointment_date.length > 0){
                        document.getElementById("appointment_error_"+key).innerHTML = error.response.data.appointment_date[0]
                    }
                    if(error.response.data.message && error.response.data.message.length > 0){
                        document.getElementById("message_error_"+key).innerHTML = error.response.data.message[0]
                    }
                }
            })
        }
    </script>
@endsection
