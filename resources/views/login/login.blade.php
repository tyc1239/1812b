<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/admin/css/animate.css" rel="stylesheet">
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/css/login.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if (window.top !== window.self) {
            window.top.location = window.location;
        }
    </script>

</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-12">
            <form method="post" action="index.html">
                <h2 class="no-margins">登录：</h2>
                <input type="text" class="form-control uname" placeholder="用户名" id="u_name"/>
                <input type="password" class="form-control pword m-b" placeholder="密码" id="u_pwd"/>
                <button class="btn btn-success btn-block">登录</button>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left">

        </div>
    </div>
</div>
</body>

</html>
<script src="/js/jquery.min.js"></script>
<script>
    $(function(){
        //点击获取
        $(".btn-block").click(function(){
            //获取邮箱
            var u_name=$("#u_name").val();
            var u_pwd=$('#u_pwd').val();

            //验证
            if(u_name==''){
                alert('账号必填');
                return false;
            }
            if(u_pwd==''){
                alert('密码必填');
                return false;
            }

            $.post(
                    "{{url('/1812/logindo')}}",
                    {u_name:u_name,u_pwd:u_pwd},
                    function(res){
                        // console.log(res);
                        if(res.code==1){
                            alert(res.count);
                            location.href="{{url('/1812/index')}}"
                        }else{
                            alert(res.count);
                            return false;
                        }
                    },
                    'json'
            );
            return false;
        })
    });
</script>