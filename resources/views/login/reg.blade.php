<form class="layui-form" action="/1812/regdo" method="post">
    <div class="panel loginbox">
        <div class="text-center margin-big padding-big-top"><h1>注册账号</h1></div>
        <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
            <div class="form-group">
                <div >
                    <input type="text"  class="input input-big"  name="u_name" placeholder="请输入用户名称" /><br><br>
                    <input type="text" data-validate="required:请输入手机号" / class="input input-big" name="u_email"placeholder="请输入手机号" /><br><br>
                    <input type="password" data-validate="required:请输入密码" / class="input input-big" name="u_pwd" placeholder="请输入密码" /><br><br>
                    <input type="password" data-validate="required:请确认密码" /  class="input input-big" name="u_pwds" placeholder="请确认密码" /><br><br>
                </div>
            </div>

        </div>
        <div style="padding:15px;"><input type="submit" class="button button-block bg-main text-big input-big"id="bt"value="注册"></div>
    </div>
</form>