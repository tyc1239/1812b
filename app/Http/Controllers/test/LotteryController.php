<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class LotteryController extends Controller
{
    //
    public function index(){
        $res =DB::table('lottery')->get();

        return view('test.lottery');
    }

      public function test ()
    {
        $u_pass =Str::random(8);
        $pass =password_hash($u_pass,PASSWORD_BCRYPT);
        $redis_userid_key ='str:count:userid';
        $uid =Redis::incr($redis_userid_key);
        $user_info =[
          'uid' => $uid,
            'name'=>Str::random(8),
            'pass'=>$pass,
            'email'=>Str::random(8).'@163.com',
            'reg_time' =>time()
        ];
        echo '<pre>';print_r($user_info);echo'</pre>';
        $user_table = 'users'.$uid%5;
        echo $user_table;echo'<hr>';
        $id =DB::table($user_table)->insertGetId($user_info);
        var_dump($id);
         
    }
   
}
