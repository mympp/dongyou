;(function(){
    var auth = get_cookie('auth'),
        uname = get_cookie('username');
        if(auth.trim() && uname.trim()){
            window.hasLogin = true;
            document.write('<a class="lgreg c--ff4a00" href="/member">'+uname+'</a><a class="lgreg" href="/member/logout.php">退出</a>');
        }else{
            window.hasLogin = false;
            document.write('<a class="lgreg c--ff4a00" href="/member/login.php">登录</a><a class="lgreg" href="/member/register.php">免费注册</a>');
        }
})();
