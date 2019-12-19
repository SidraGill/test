<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">--}}
{{--    <meta charset="utf-8">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Laravel</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{--    <!-- Bootstrap Core CSS -->--}}
{{--    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">--}}

{{--    <!-- Custom CSS -->--}}
{{--    <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">--}}

    <!-- Custom Fonts -->
{{--    <link href="{{asset('admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">--}}


</head>
<body>
<div id="app"></div>
<script src="{{ asset('js/app.js') }}"></script>

{{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
{{--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}

{{--<script src="{{asset('admin/js/jquery.js')}}"></script>--}}

{{--<!-- Bootstrap Core JavaScript -->--}}
{{--<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>--}}

</body>

</html>


