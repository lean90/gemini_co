<div class="login-pagemark">
    <div class="form-box" id="login-box">
        <div class="header">Đăng nhập GEMINI.CO</div>
        <form id="frm-main" method="post">
            <div class="body bg-gray">
                <div class="form-group text-center" style="color:red;">
                    <?php if(isset($error)){echo $error;}?>
                </div>
                <div class="form-group">
                    <input type="text" name="userid" class="form-control" placeholder="User ID">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>          
                <div class="form-group">
                    <input type="checkbox" name="remember_me"> Ghi nhớ đăng nhập
                </div>
            </div>
            <div class="footer">                                                               
                <button id="btn-frm-main" type="submit" class="btn bg-olive btn-block">Đăng nhập</button>  
                <p><a href="#">Quên mật khẩu</a></p>
                <a href="#" class="text-center">Đăng ký thành viên</a>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("#btn-frm-main").live("click",function(){
        $("#frm-main").submit();
    });
});
</script>