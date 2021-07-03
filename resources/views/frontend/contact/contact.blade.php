@extends('frontend.master')

@section('title')
    Contact us
@endsection

@section('content')
    <!-- Home Design Inner Pages -->
    <div class="ulockd-inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ulockd-icd-layer">
                        <ul class="list-inline ulockd-icd-sub-menu">
                            <li><a href="#"> HOME </a></li>
                            <li><a href="#"> > </a></li>
                            <li> <a href="#"> CONTACT US </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inner Pages Main Section -->
    <section class="ulockd-contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="ulockd-cp-title">
                        <h2 class="text-uppercase">CONTACT DETAILS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-details one">
                            <ul class="contact-place one">
                                <li><span class="flaticon-black-back-closed-envelope-shape" title="Bclinico@email.com"> <small>Bclinico@email.com </small></span></li>
                                <li><span class="flaticon-old-handphone" title="99 55 66 88 526"> <small> +99 55 66 88 526 </small></span></li>
                                <li><span class="flaticon-map-marker" title="Victoria 8007 Australia Envato HQ 121 King Street, Melbourne"> <small>Victoria 8007 Australia Envato  </small></span></li>
                                <li><span class="flaticon-checkbox-pen-outline" title="Written Your Message"> <small>Left Some Word </small></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ulockd-contact-form">
                        <form id="contact_form" name="contact_form" class="contact-form" action="{{ url('/contact/store') }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_name" name="name" class="form-control ulockd-form-fg required" placeholder="Your name" required="required" data-error="Name is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_email" name="email" class="form-control ulockd-form-fg required email" placeholder="Your email" required="required" data-error="Email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_phone" name="phone" class="form-control ulockd-form-fg required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_subject" name="subject" class="form-control ulockd-form-fg required" placeholder="Subject" required="required" data-error="Subject is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control ulockd-form-tb required" rows="12" placeholder="Your massage" required="required" data-error="Message is required."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center" id="success_message"></div>
                                        <div class="col-md-12 text-center" id="error_message"></div>
                                    </div>
                                    <div class="form-group ulockd-contact-btn">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
                                        <button type="button" class="btn btn-default ulockd-btn-thm2" onclick="contact()" data-loading-text="Getting Few Sec...">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="container-fluid ulockd-padz">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="ulockd-google-map">--}}
{{--                        <div class="" id="map-location" style="height: 312px;"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>

    <script>
        function contact(){
            let data = {
                name: document.getElementById('form_name').value,
                email: document.getElementById('form_email').value,
                phone: document.getElementById('form_phone').value,
                message: document.getElementById('form_message').value,
                subject: document.getElementById('form_subject').value,
            }

            axios.post('/contact/store', data)
                .then(response => {
                    if (response.status == 200){
                        let div = document.createElement("div")
                        div.setAttribute("class", "alert alert-success")
                        div.setAttribute("role", "alert")
                        let txt = document.createTextNode('Your contact has been successfully submitted. Stay with us. Thank you')
                        div.appendChild(txt)

                        // document.getElementById('success_message_'+key).innerHTML = ''
                        document.getElementById('error_message').innerHTML = ''
                        document.getElementById('success_message').appendChild(div)

                        document.getElementById('form_name').value = '';
                        document.getElementById('form_email').value = '';
                        document.getElementById('form_phone').value = '';
                        document.getElementById('form_message').value = '';
                        document.getElementById('form_subject').value = '';
                    }
                    setTimeout(function() {
                        $('#success_message').fadeOut('fast');
                    }, 2000); // <-- time in milliseconds

                }).catch(error => {
                if (error.response.status == 422){
                    let div = document.createElement("div")
                    div.setAttribute("class", "alert alert-success")
                    div.setAttribute("role", "alert")
                    let txt = document.createTextNode('Something is wrong. Please try again')
                    div.appendChild(txt)

                    // document.getElementById('success_message_'+key).innerHTML = ''
                    document.getElementById('error_message').appendChild(div)
                    document.getElementById('success_message').innerHTML = ''

                    if(error.response.data.name && error.response.data.name.length > 0){
                        document.getElementById("name_error").innerHTML = error.response.data.name[0]
                    }
                    if(error.response.data.email && error.response.data.email.length > 0){
                        document.getElementById("email_error").innerHTML = error.response.data.email[0]
                    }
                    if(error.response.data.phone && error.response.data.phone.length > 0){
                        document.getElementById("phone_error").innerHTML = error.response.data.phone[0]
                    }
                    if(error.response.data.subject && error.response.data.subject.length > 0){
                        document.getElementById("subject_error").innerHTML = error.response.data.subject[0]
                    }
                    if(error.response.data.message && error.response.data.message.length > 0){
                        document.getElementById("message_error").innerHTML = error.response.data.message[0]
                    }
                }
            })
        }
    </script>
@endsection
