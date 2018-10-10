
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>

        Basic Website


    </title>
    {{--<style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111111;
        }
    </style>
--}}
    <link rel="stylesheet" href="/css/app.css" type="text/css">

</head>

<body>

@include('inc.navbar')







<div class="container">
    @if(Request::is('/'))
    @include('inc.showcase')

    @endif

<div class="row">
    <div class="col-md-8 col-lg-8">

        @include('inc.messages')

        @yield('content')
    </div>
    <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
    </div>
</div></div>




</body>


</html>
