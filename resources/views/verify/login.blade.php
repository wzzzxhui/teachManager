@extends('common.login')
@section('form_target')
<form action="{{route('login')}}" method="post">
    {{ csrf_field() }}
    <div class="login_form">
        <input name="username" placeholder="账号" type="text" class="form-control "/>
        <input name="password" placeholder="密码" type="password" class="form-control "/>
        <a class="fr" href="{{route('registerIndex')}}">无账号到此注册</a>
        <input type="submit" name="submit" value="确定" class="btn btn-success" />
    </div>
</form>
@stop