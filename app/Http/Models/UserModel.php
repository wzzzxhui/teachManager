<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class UserModel extends Model
{
    protected $table = 'users';
    public $timestamps = false;

//    //验证规则
//    protected $rules = [
//        'username' => 'required|unique:users',
//        'password' => 'required | between:6,20|confirmed',
//        'password_confirmation' => 'required'
//    ];
//
//    protected $messages = [
//        'required'    => 'The :attribute is required',
//         'username.unique' => '已有重复用户名',
//        'between' => 'The :attribute must be between :min - :max.',
//        'password.confirmed' => '两次密码不匹配',
//    ];
//
//    //字段验证
//    public function verify($data)
//    {
//
//        return Validator::make($data, $this->rules, $this->messages);
//    }

    //查找一条记录
    public function findOne($username,$field='*')
    {

        return $this->where('username',$username)->select($field)->get();
    }

    //增加一条记录
    public function addOne($request)
    {
        $this->username = $request->username;
        $this->password = md5_2($request->password);
        $this->role = 1;//只有老师可以注册
        $this->enable = 0;
        $this->createTime = time();
        return $this->save();

    }
}
