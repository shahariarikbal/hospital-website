@extends('frontend.master')

@section('title')
    Doctor list
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
                            <li> <a href="#"> Doctors </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ulockd-team-one">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <div class="ulockd-main-title">
                        <h2 class="text-uppercase">OUR <span class="text-thm2">Doctors</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa doloribus, hic eaque asperiores saepe aspernatur quibusdam beatae?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data['doctors'] as $key => $doctor)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="ulockd-team-member">
                        <div class="team-thumb">
                            <img class="img-responsive img-whp" src="{{ $doctor->avatar }}" style="height: 470px;" alt="team1.jpg">
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
                            <h3 class="member-name">{{ $doctor->first_name. ' ' . $doctor->last_name }}</h3>
                            <h5 class="member-post">- {{ $doctor->department ? $doctor->department->name: '' }}</h5>
                            <strong>Board Certification:</strong> {{ $doctor->board_certification }}.<br>
                            <strong>Appointment:</strong> {{ $doctor->appointment }}. <br>
                            <strong>Schdule:</strong> {{ $doctor->schdule }}. <br>
                            <a href="#appointment_view{{ $key+1 }}" data-toggle="modal" class="btn btn-default ulockd-btn-thm2"> Make An Apointment <i class="flaticon-people-8"></i></a>
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
    </section>

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
