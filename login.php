<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录页面</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="images/all.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="js/SuperSlide.js"></script>
</head>

<body>
<header>

<div class="nav">
    <ul>
        <li class="li1"><a>海</a></li>
        <li class="li2"><a>拼</a></li>
    </ul>
</div>

	<div class="head">
    	
        	<div class="top">
                <div class="wrapper">
                
                <div class="logo fl"><a href="index.html"><img src="images/logo.png" /></a></div>
                <div class="dl fr">
                    <ul>
                        <li>欢迎您,DGL</li>
                        <li><a href="">退出</a></li>
                        <li><a href="">个人中心</a></li>
                        <li><a href="">我的订单</a></li>
                        <li><a href="">登录</a></li>
                        <li><a href="">注册</a></li>
                    </ul>
                    
                    <div class="sousuo">
                    	<input class="index_srh" name="keyboard" value="请输入您要查找的商品" onBlur="if(this.value=='') this.value='请输入您要查找的商品';" onFocus="if(this.value=='请输入您要查找的商品') this.value='';">
                        <input class="search" type="submit" name="submit" value="搜索">
                    </div>
                </div>
                
                </div>
       	 	</div>
        
            
            <div class="menu">
            	<div class="wrapper">
                	<ul>
                    	<li class="li1"><a href="piclist.html" class="on">全部分类</a></li>
						<li class="li2"><a href="index.html">首页</a></li>
                        <li class="li3"><a href="piclist.html">潮流单品</a></li>
                        <li class="li4"><a href="piclist.html">衣服</a></li>
                        <li class="li5"><a href="piclist.html">鞋子</a></li>
                        <li class="li6"><a href="piclist.html">包包</a></li>
                        <li class="li7"><a href="piclist.html">配饰</a></li>
                        <li class="li8"><a href="piclist.html">潮流单品</a></li>
                        <li class="li9"><a href="piclist.html">衣服</a></li>
                        <li class="li10"><a href="piclist.html">鞋子</a></li>
                        <li class="li11"><a href="piclist.html">包包</a></li>
                        <li class="li12"><a href="piclist.html">配饰</a></li>
                    </ul>
                </div>
            </div>
    </div>
</header>

<div class="wrapper border login-bg">
	<div class="login">
    	<div class="fl left">
        	<dl>
            	<dt>登录</dt>
                <form action="login.php" method="post">
                <dd class="clearfix"><span class="fl">帐 号：</span><input type="text" class="fl shr" name="username" onBlur="if(this.value=='') this.value='邮箱/手机号/昵称';" onFocus="if(this.value=='邮箱/手机号/昵称') this.value='';"/></dd>
                <dd class="clearfix"><span class="fl">密 码：</span><input type="text" class="fl shr" name="password"/></dd>
                <dd class="clearfix yanzheng"><span class="fl">验证码：</span><input type="text" class="yzm fl" /><img src="images/yzm.jpg" class="fl" /><a href="" class="fl">换一张</a></dd>
                <dd class="clearfix"><span class="fl">&nbsp;</span><input name="remember" type="checkbox" value="yes"  class="fl jizhu" />7天内自动登录</dd>
                <dd class="clearfix"><span class="fl">&nbsp;</span><input type="submit" value="登 录" class="fl denglu" />
                </form><a href="" class="fl wangji">忘记密码</a>
            </dl>
        </div>
        
        <div class="fr right">
     	 <p class="p1">还没有我站网帐号？<a href="register.php">立即注册</a></p>
         <p class="p2">你还可以用以下方式直接登录：</p>
         <div class="other-dl">
             <a href="" class="sina"></a>
             <a href="" class="qq"></a>
             <a href="" class="taobao"></a>
             <a href="" class="renren"></a>
             <a href="" class="wangyi"></a>
             <a href="" class="txweibo"></a>
             <a href="" class="douban"></a>
             <a href="" class="baidu"></a>
         </div>
     </div>
     
   <div class="clearfix"></div>
    </div>
    
     
</div>
<?php
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli('localhost','root','root','shopping');
    if ($conn->connect_error){
        echo '数据库连接失败！';
        exit(0);
    }else{
        if ($username == ''){
            echo '<script>alert("请输入用户名！");</script>';
            exit(0);
        }
        if ($password == ''){
           echo '<script>alert("请输入密码！");</script>';
            exit(0);
        }
        $sql = "select username,password from userinfo where username = '$_POST[username]' and password = '$_POST[password]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
        if ($number) {
               
                    session_start(); 
                   //登录成功将信息保存到session中 
                   $_SESSION['username']=$username; 
                   $_SESSION['islogin']=1; 
                   //如果勾选7天内自动保存，则将其保存到cookie 
                   if($_POST['remember']=="yes") 
                   { 
                    setcookie("username",$username,time()+7*24*60*60); 
                    setcookie("code",md5($username.md5($password)),time()+7*24*60*60); 
                   } 
                  
                    setcookie("username",'',time()-1); 
                    setcookie("code",'',time()-1); 
                  
                   //跳转到用户首页 
                    echo '<script>window.location="index.php";</script>';
                  
                 
           
        } else {
            echo '<script>alert("用户名或密码错误！");history.go(-1);</script>';
        }
    }
?>


<footer>
	<div class="foot">
    	<div class="wrapper">
        
        	<div class="fl left">
            	<p><a href="" class="foot-logo"></a></p>
                <div class="share">
                	<a href="" class="sina"></a>
                    <a href="" class="qq"></a>
                    <a href="" class="weixin"></a>
                    <a href="" class="wap"></a>
                </div>
                <p>增值电信业务经营许可证：浙B2-20110349</p>
                <p>©2013 Mogujie.com,All Rights Reserved.</p>
            </div>
            
            <div class="center fl">
                
            </div>
            
            <div class="youce fr">
            	
            </div>
            
            
            
        </div>
        <div class="clearfix"></div>
    </div>
</footer>
<script src="js/all.js" type="text/javascript"></script>
</body>
</html>
