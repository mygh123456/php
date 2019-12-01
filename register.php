<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册页面</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="images/all.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="js/SuperSlide.js"></script>
</head>

<body>
<header>



	<div class="head">
    	
        	<div class="top">
                <div class="wrapper">
                
                <div class="logo fl"><a href="index.html"><img src="images/logo.png" /></a></div>
                <div class="dl fr">
                    <ul>
                      
                        <li><a href="login.php">登录</a></li>
                        <li><a href="register.php">注册</a></li>
                        
                    </ul>
                    
                   
                </div>
                
                </div>
       	 	</div>
        
            
        
    </div>
</header>

<div class="wrapper border login-bg">
	<table style="width: 100%;height:100%;" >
  <tr>
    <td align="center" >
      <form action="doregister.php " name="dl" method="post">
      <table  align="center" width=350 height=230; style="font-family:宋体;font-size:25px;">
      <tr align="center"> 
          <td colspan="2" style="font-size:35px;">注册用户</td>
      </tr>
      <tr>
          <td align="center">用户名</td>
          <td>
          <input type="name" maxlength="20" name="id" placeholder="手机号" style="width:180px;font-size:20px;border-radius: 8px; ">
          </td>
      </tr>
      <tr>
          <td align="center">密   码</td>
          <td >
          <input name="password" type="password" maxlength="16" placeholder="请输入密码" style="width:180px;font-size:20px;border-radius: 8px; ">
      </td>
      </tr>
      <tr>
          <td align="center">Again</td>
          <td>
          <input name="confirmPassword" type="password" maxlength="16" placeholder="请再次输入密码" style="width:180px;font-size:20px;border-radius: 8px; ">
          </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
        <input type="button" name='zu' value='登陆' οnclick="location.href='index.php'" style="font-size:17px;border-radius: 12px;" class="btn"/>
        <input type="reset" name="zu" value="重置" style="font-size:17px;border-radius: 12px;" class="btn"> 
        <input type="submit" name="zu" value="注册" style="font-size:17px;border-radius:12px;" class="btn"/>
        </td>
      </tr>
   </table>
   </form>
    </td>
  </tr>
</table>


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
