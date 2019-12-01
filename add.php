<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商城首页</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="images/all.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="js/SuperSlide.js"></script>
<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>

<body>
<header>



	<div class="head">
    	<title>我的留言板.添加留言</title> 
        	<div class="top">
                <div class="wrapper">
                
                
       	 	</div>
           <?php
    header('Content-type: text/html; charset=UTF8');
    ?>
  <html>  
    <head>
  <link rel="stylesheet" type="text/css" href="./css/index.css">
    <title>我的留言板.添加留言</title>  
    </head>  
    <body background="./images/7.jpg" style="background-size:cover;" >  
    <center>  
    <h2>我的留言板</h2> 
  
    <a href="add.php">添加</a>
   
    <a href="show.php">查看</a>

   <a href="index.php">退出</a>
    <hr width = "70%"> 
    </center>
  <div class="k1">
    <form action = "doAdd.php" method = "post">  
    <h1>添加你的留言
    <span请输入</span>
    </h1>
    <label>
    <span>你的名字：</span>
    <input type="text" name="author" placeholder="输入名字" />
    </label>
    <label>
    <span>标题：</span>
    <input type="text" name="title" placeholder="输入标题" />
    </label>
    <label>
    <span>信息：</span>
    <textarea name="content" placeholder="提交信息给我"></textarea>
    </label>
    <div style="margin-left:125px">
    <input type="submit" value="提交" class="submit">
    <input type = "reset" value = "重置" class="reset">
    </div>
  </div>
    </form>


    </td>
  </tr>
</table> 

 	
    
    </div>
</header>

<script src="js/all.js" type="text/javascript"></script>
</body>
</html>
