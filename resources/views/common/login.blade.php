<html>
<head>
    <title>猪猪教学管理平台</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/teach.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="login_color">
    {{--错误反馈--}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="val_ul">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login_top">
        <div>
        </div>
    </div>
    <div class="login_bg">
        <div class="login_target">
            @section('form_target')
                @show
        </div>
    </div>
</div>
</body>


</html>