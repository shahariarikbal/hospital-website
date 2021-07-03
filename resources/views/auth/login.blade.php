
<!DOCTYPE html>
<html lang="en">
<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend/') }}/login/favicon.ico">
    <title>Admin | Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/') }}/login/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/') }}/login/style.css">
</head>

<body style="background-color: whitesmoke">
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                    <form action="{{ route('login') }}" method="POST" class="form-signin">
                        @csrf
						<div class="account-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('/frontend/') }}/login/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" autofocus="" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
</body>
<!-- login23:12-->
</html>
