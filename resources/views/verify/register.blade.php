@extends('common.login')
@section('form_target')
    <form action="{{route('register')}}" method="post">
        {{ csrf_field() }}
        <div class="login_form">
            <input name="username" placeholder="账号" type="text" class="form-control "/>
            <input name="password" placeholder="密码" type="password" class="form-control "/>
            <input name="password_confirmation" placeholder="确认密码" type="password" class="form-control "/>
            <input type="submit" name="submit" value="确定" class="btn btn-success" />
        </div>
    </form>
@stop