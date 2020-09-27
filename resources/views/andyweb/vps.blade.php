<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-image: url("https://kuguacloud.oss-cn-qingdao.aliyuncs.com/img/wallhaven-355884.jpg");
            color: #636b6f;
            background-size: 1920px 1080px;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;

        }

        .title {
            font-size: 84px;
            color: lawngreen;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;

        }
        #info{

            color: red;
            font-size: 30px;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth

        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            订购列表
        </div >
        @foreach($vip as $h)
            <div id="info">
            {{$h->id}}--{{$h->name}}--{{$h->type}}--{{$h->price}}--{{$h->bandwidth}}--{{$h->core}}

            </div>

        @endforeach
        <div>
            <p style="color: #38c172">
                {{session('mess')}}
            </p>
        </div>
        <form method="get" action="/add">

            <button> 去订购！</button>
        </form>
    </div>
</div>
<div>

</div>
</body>
</html>
