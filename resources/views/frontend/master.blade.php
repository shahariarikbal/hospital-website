<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('/frontend/') }}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('/frontend/') }}/css/style.css">
<link rel="stylesheet" href="{{ asset('/frontend/') }}/css/colors/default.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('/frontend/') }}/css/responsive.css">
<!-- Title -->
<title>@yield('title')</title>
<!-- Favicon -->
<link href="{{ asset('/frontend/') }}/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('/frontend/') }}/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>
  	@include('frontend.includes.header')
    <!--Home page-->
    @yield('content')
    <!---Home page end--->
	<!-- Our Footer -->
	@include('frontend.includes.footer')

<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/bootsnav.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/parallax.js"></script>
{{--<script type="text/javascript" src="{{ asset('/frontend/') }}/js/scrollto.js"></script>--}}
{{--<script type="text/javascript" src="{{ asset('/frontend/') }}/js/jquery-scrolltofixed-min.js"></script>--}}
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/gallery.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/wow.min.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/slider.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/video-player.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/jquery.barfiller.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/timepicker.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/tweetie.js"></script>
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/validator.js"></script>
<!-- Custom script for all pages -->
{{-- <script type="text/javascript" src="{{ asset('/frontend/') }}/js/color-switcher.js"></script> --}}
<script type="text/javascript" src="{{ asset('/frontend/') }}/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- Contact Form Validation-->
<script type="text/javascript">
    $(function () {
        $('#appointment_form').validator();
        $('#appointment_form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var url = "includes/appointment.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(this).serialize(),
                    success: function (data)
                    {
                        var messageAlert = 'alert-' + data.type;
                        var messageText = data.message;

                        var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                        if (messageAlert && messageText) {
                            $('#appointment_form').find('.messages').html(alertBox).fadeIn('slow');
                            $('#appointment_form')[0].reset();
                            setTimeout(function(){ $('.messages').fadeOut('slow') }, 6000);
                        }
                    }
                });
                return false;
            }
        })
    });
</script>
</body>
</html>
