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
            background-image: url("https://kuguacloud.oss-cn-qingdao.aliyuncs.com/img/壁纸48.jpg");
            background-size: 1920px 1080px;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }
        h1{

            color: aquamarine;
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
        label,name{

            color: lawngreen;

        }
        .m-b-md {
            margin-bottom: 30px;
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


    <div>
        <h1>添加add</h1>
        <form action="/vps" method="post">
            @csrf
            <label for="name">服务器编号</label>
            <input type="text" id="id" name="id">
            <label for="name">服务器名称</label>
            <input type="text" id="name" name="name">
            <label for="type">服务器类型</label>
            <select name="type">
                <option value="BGP">BGP</option>
                <option value="NTT">NTT</option>
                <option value="CN2-Gia">CN2-Gia</option>
                <option value="PCCW">PCCW</option>
                <option value="IPLC">IPLC</option>
            </select>
            <label for="type">服务器价格</label>
            <input type="text" id="price" name="price">
            <label for="type">服务器带宽</label>
            <input type="text" id="bandwidth" name="bandwidth">
            <label for="type">服务器配置</label>
            <input type="text" id="core" name="core">
            <fieldset>
                <label for="type">user</label>
                <input type="checkbox" name="user[]" value="lmy1">lmy1<br>
                <input type="checkbox" name="user[]" value="lmy2">lmy2<br>
                <input type="checkbox" name="user[]" value="lmy3">lmy3<br>
                <input type="checkbox" name="user[]" value="lmy4">lmy4<br>

            </fieldset>


            <input type="submit" value="提交">
        </form>
    </div>




</div>
<div>

</div>
</body>
</html>
