<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginCotroller extends Controller
{
    //注册
    public function reg()
    {
        return view('/login/reg');
    }
    //注册执行
    public function regdo()
    {
        $u_name = request()->u_name;
        $u_pwd = request()->u_pwd;
        $u_email = request()->u_email;
        $u_pwd = MD5($u_pwd);
        $data = [
            'u_name' => $u_name,
            'u_pwd' => $u_pwd,
            'u_email' => $u_email
        ];
        $res = DB::table('user')->insert($data);
        if ($res) {
            return "<script>alert('注册成功');location.href='/admin/login'</script>";
        } else {
            return "<script>alert('注册失败');location.href='/admin/reg'</script>";
        }
    }

    //登录
    public function login()
    {
        return view('/login/login');
    }

    //登录添加执行
    public function loginDo()
    {
        $u_name=request()->u_name;
        $u_pwd=md5(request()->u_pwd);
        $where=[
            'u_name'=>$u_name
        ];
        $userInfo=DB::table('user')->where($where)->first();
        $en_pwd=$userInfo->u_pwd;
        if($u_pwd!=$en_pwd){
            //echo "用户错误1";
            return ['code'=>0,'count'=>'用户或密码错误'];
        }else{
            // echo "用户正确";
            $id=$userInfo->id;
            $u_name=$userInfo->u_name;
            if($userInfo->u_pwd==$u_pwd){
                // echo "密码正确";
                session(['id'=>$id]);
                session(['u_name'=>$u_name]);
                return ['code'=>1,'count'=>'登陆成功'];
            }else{
                // echo "密码错误";
                return ['code'=>0,'count'=>'用户或密码错误'];
            }

        }


    }

    public function index()
    {
        echo '主页' ;
    }
}
