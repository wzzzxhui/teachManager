<?php

namespace App\Http\Controllers\Verify;

use App\Http\Controllers\Controller;
use App\Http\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LoginController extends Controller
{
    //验证规则
    protected $rules = [
        'username' => 'required|unique:users',
        'password' => 'required | between:6,20|confirmed',
        'password_confirmation' => 'required'
    ];

    protected $messages = [
        'required'    => '信息不完整',
        'username.unique' => '已有重复用户名',
        'between' => '密码在6-20位之间',
        'password.confirmed' => '两次密码不匹配',
    ];
    //登录主页面
    public function index()
    {
        return view('verify/login');
    }

    //登录响应
    public function login(Request $request)
    {
        $userModel = new UserModel();
        $username = $request->username;
        $password = $request->password;
        $user = $userModel->findOne($username,'username,password');
        if($user->password == md5_2($password)){
            redirect()->route('person');
        }
    }

    //注册页面
    public function registerIndex(Request $request)
    {

        return view('verify/register');
    }

    //注册响应
    public function register(Request $request)
    {

        $this->validate($request, $this->rules, $this->messages);
        $session_key = Config::get('const.session_fix');
        $userModel = new UserModel();
        $result = $userModel->addOne($request);
        if($result === true){
            //自动登录
            session([$session_key.'username' => $request->username]);
            redirect()->route('person');
        }else{
            return ;
        }
    }

    //个人详情页
    public function person(Request $request){
        $session_key = Config::get('const.session_fix');
        return 'hello'.session($session_key.'username');
    }
}