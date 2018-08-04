<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>

    <style type="text/css">
        .page-title { font-size: 18px; height: 40px; line-height: 40px; border-bottom: 1px solid #ccc  }
        .page-title-list { height: 60px; line-height: 40px }

    </style>

    <body>
    <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Home
                </a>
                @if(Auth::check())
                        <a class="navbar-brand"  href="{{ url('/profile') }}">profile</a>
                        @if(auth::user()->roles <=2)
                        <a class="navbar-brand"  href="{{ url('/control') }}">contorol</a>
                        @endif
                        @endif
                        </div>
        <div class="container" style="width:600px; padding: 25px 0 0 0;">
        	@yield('content')
        </div>

    </body>
</html>