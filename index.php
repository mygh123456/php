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
                        <li>
                        	<?php 
							 header("Content-Type:text/html;charset=utf-8"); 
							 session_start(); 
							 //首先判断Cookie是否有记住用户信息 
							 if(isset($_COOKIE['username'])) 
							 { 
							  $_SESSION['username']=$_COOKIE['username']; 
							  $_SESSION['islogin']=1; 
							 } 
							 if(isset($_SESSION['islogin'])) 
							 { 
							  //已经登录 
							  echo $_SESSION['username'].":你好，欢迎进入个人中心！<br/>"; 
							  echo "<a href='logout.php'>注销</a>"; 
							 } 
							 else
							 { //为登录 
							  echo "你还未登录，请<a href='login.php'>登录</a>"; 
							 } 
							?>
                        </li>
                        <li><a href="">退出</a></li>
                        <li><a href="">个人中心</a></li>
                        <li><a href="">我的订单</a></li>
                        <li><a href="login.php">登录</a></li>
                        <li><a href="register.php">注册</a></li>
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

<div class="wrapper">
	<div class="part1">
    
    	<div class="left fl">
        	<dl class="dl1">
            	<dt><a href="">韩国</a></dt>
                <dd>
                	<a href="">三星</a>
                    <a href="">三星</a>
                    <a href="">东大门</a>
                    <a href="">APM</a>
                    <a href="">APMUS</a>
                    <a href="">UUS</a>
                    <a href="">KoreaLi</a>
                    <a href="">MK</a>
                    <a href="">OKJ</a>
                    <a href="">PCHS</a>
                    <a href="">Shoe</a>
                    <a href="">BB</a>
                    <a href="">Zhang</a>
                    <a href="">查看更多</a>
                </dd>
            </dl>
            
            <dl class="dl2">
            	<dt><a href="">韩国</a></dt>
                <dd>
                	<a href="">三星</a>
                    <a href="">三星</a>
                    <a href="">东大门</a>
                    <a href="">APM</a>
                    <a href="">APMUS</a>
                    <a href="">UUS</a>
                    <a href="">KoreaLi</a>
                    <a href="">MK</a>
                    <a href="">OKJ</a>
                    <a href="">PCHS</a>
                    <a href="">Shoe</a>
                    <a href="">BB</a>
                    <a href="">Zhang</a>
                    <a href="">查看更多</a>
                </dd>
            </dl>
            
            <dl class="dl3">
            	<dt><a href="">韩国</a></dt>
                <dd>
                	<a href="">三星</a>
                    <a href="">三星</a>
                    <a href="">东大门</a>
                    <a href="">APM</a>
                    <a href="">APMUS</a>
                    <a href="">UUS</a>
                    <a href="">KoreaLi</a>
                    <a href="">MK</a>
                    <a href="">OKJ</a>
                    <a href="">PCHS</a>
                    <a href="">Shoe</a>
                    <a href="">BB</a>
                    <a href="">Zhang</a>
                    <a href="">查看更多</a>
                </dd>
            </dl>
            
            
            
        </div>
        
        <div class="center fl">
          	<div id="myFocus"><!--焦点图盒子-->
              <div class="loading"><img src="images/loading.gif" alt="请稍候..." /></div><!--载入画面(可删除)-->
              <div class="pic"><!--图片列表-->
                <ul>
                    <li><a href="detail.html"><img src="images/pic1.jpg" thumb="" alt="入货清单 春季扫货" text="" /></a></li>
                    <li><a href="detail.html"><img src="images/pic2.jpg" thumb="" alt="折扣风暴 壁花小姐出动" text="" /></a></li>
                    <li><a href="detail.html"><img src="images/pic3.jpg" thumb="" alt="搭配示范 小个子穿衣搭配" text="" /></a></li>
                    <li><a href="detail.html"><img src="images/pic4.jpg" thumb="" alt="格子衬衫 全国包邮送领结" text="" /></a></li>
                    <li><a href="detail.html"><img src="images/pic5.jpg" thumb="" alt="明星衣橱 衣橱里的小时代" text="" /></a></li>
                </ul>
              </div>
          </div>
        </div>
        
        <div class="right fr">
        	<ul>
            	<li class="li1">
                	<span><a href="">轻熟女变身韩剧女猪脚减龄粉嫩裸妆</a></span>
                    <p>轻熟女变身韩剧女猪脚减龄粉嫩裸妆轻熟女变身</p>
                </li>
                
                <li class="li2">
                	<span><a href="">轻熟女变身韩剧女猪脚减龄粉嫩裸妆</a></span>
                    <p>轻熟女变身韩剧女猪脚减龄粉嫩裸妆轻熟女变身</p>
                </li>
                
                <li class="li3">
                	<span><a href="">轻熟女变身韩剧女猪脚减龄粉嫩裸妆</a></span>
                    <p>轻熟女变身韩剧女猪脚减龄粉嫩裸妆轻熟女变身</p>
                </li>
                
                <li class="li4">
                	<span><a href="">轻熟女变身韩剧女猪脚减龄粉嫩裸妆</a></span>
                    <p>轻熟女变身韩剧女猪脚减龄粉嫩裸妆轻熟女变身</p>
                </li>
                
                <li class="li5">
                	<span><a href="">轻熟女变身韩剧女猪脚减龄粉嫩裸妆</a></span>
                    <p>轻熟女变身韩剧女猪脚减龄粉嫩裸妆轻熟女变身</p>
                </li>
                
            </ul>
        </div>
        
    </div>
</div>

<div class="wrapper">

<!--TAB-->
<div class="index-tab">
		<div class="hd">
			<ul>
				<li>疯狂抢购</li>
				<li>猜您喜欢</li>
				<li>热卖商品</li>
				<li>热评商品</li>
				<li>新品上架</li>
			</ul>
		</div>
		<div class="bd">
				<ul class="lh">
						<li>
							  <div class="p-img ld"><a href="detail.html"><img src="images/1.1.jpg"></a>  </div>
							  <div class="p-name"><a href="detail.html">艾家纺全棉加厚磨毛四件套</a></div>
							  <div class="p-price">京东价：<strong>￥399.00</strong></div>
						</li>
						<li>
							  <div class="p-img ld"><a href="detail.html"><img src="images/1.2.jpg"></a>  </div>
							  <div class="p-name"><a href="detail.html">优曼真丝提花奢华四件套</a></div>
							  <div class="p-price">京东价：<strong>￥1299.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/1.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">3999！大金1.5匹变频空调更安静！</a></div>
						  <div class="p-price">京东价：<strong>￥3999.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/1.4.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">爸爸爱喜禾（犬子在，不远游！感动无数读者的电子书</a></div>
						  <div class="p-price">京东价：<strong>￥1.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/1.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">【超值】飞利浦21.5英寸LED背光宽屏液晶显示</a></div>
						  <div class="p-price">京东价：<strong>￥809.00</strong></div>
						</li>
                        <li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/1.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">【超值】飞利浦21.5英寸LED背光宽屏液晶显示</a></div>
						  <div class="p-price">京东价：<strong>￥809.00</strong></div>
						</li>
				</ul>
				<ul class="lh">
						<li>
							  <div class="p-img ld"><a href="detail.html"><img src="images/2.1.jpg"></a>  </div>
							  <div class="p-name"><a href="detail.html">安钛克（Antec）VP 550P 额定550W 120mm静音风扇 主动PFC 黑化外型设计电源</a></div>
							  <div class="p-price">京东价：<strong>￥399.00</strong></div>
						</li>
						<li>
							  <div class="p-img ld"><a href="detail.html"><img src="images/2.2.jpg"></a>  </div>
							  <div class="p-name"><a href="detail.html">G.SKILL（芝奇）RipjawsX DDR3 1600 8G(4G×2条)台式机内存(F3-12800CL9D-8GBXL )</a></div>
							  <div class="p-price">京东价：<strong>￥235.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">希捷（Seagate）1TB ST1000DM003 7200转64M SATA 6Gb/秒 台式机硬盘 建达蓝德 盒装正品</a></div>
						  <div class="p-price">京东价：<strong>￥438.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.4.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">华硕(ASUS)P8Z77-V LK主板(Intel Z77/LGA 1155)</a></div>
						  <div class="p-price">京东价：<strong>￥899.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">大水牛（BUBALUS）电脑机箱 经典-A1008 灰黑色（不含电源）</a></div>
						  <div class="p-price">京东价：<strong>￥112.00</strong></div>
						</li>
                        <li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">大水牛（BUBALUS）电脑机箱 经典-A1008 灰黑色（不含电源）</a></div>
						  <div class="p-price">京东价：<strong>￥112.00</strong></div>
						</li>
				</ul>

				<ul class="lh">
						<li>
							  <div class="p-img ld"><a href="detail.html"><img src="images/3.1.jpg"></a>  </div>
							  <div class="p-name"><a href="detail.html">冬季健身TOP1！瑞亚特仰卧板加送俯卧撑架</a></div>
							  <div class="p-price">京东价：<strong>￥187.00</strong></div>
						</li>
						<li>
							  <div class="p-img ld"><a href="detail.html"><img src="images/3.2.jpg"></a>  </div>
							  <div class="p-name"><a href="detail.html">HTC Z715e!双核！魔音耳机！</a></div>
							  <div class="p-price">京东价：<strong>￥2399.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/3.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">下单返现150元！格力9片电油汀</a></div>
						  <div class="p-price">京东价：<strong>￥449.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/3.4.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">绿之源净味宝2居室除味超值套装 4000克</a></div>
						  <div class="p-price">京东价：<strong>￥449.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/3.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">宏碁i5 4G GT630M 1G独显 月销量破</a></div>
						  <div class="p-price">京东价：<strong>￥3599.00</strong></div>
						</li>
                        <li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/3.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">宏碁i5 4G GT630M 1G独显 月销量破</a></div>
						  <div class="p-price">京东价：<strong>￥3599.00</strong></div>
						</li>
				</ul>
				<ul class="lh">
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">希捷（Seagate）1TB ST1000DM003 7200转64M SATA 6Gb/秒 台式机硬盘 建达蓝德 盒装正品</a></div>
						  <div class="p-price">京东价：<strong>￥438.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">希捷（Seagate）1TB ST1000DM003 7200转64M SATA 6Gb/秒 台式机硬盘 建达蓝德 盒装正品</a></div>
						  <div class="p-price">京东价：<strong>￥438.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">希捷（Seagate）1TB ST1000DM003 7200转64M SATA 6Gb/秒 台式机硬盘 建达蓝德 盒装正品</a></div>
						  <div class="p-price">京东价：<strong>￥438.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">希捷（Seagate）1TB ST1000DM003 7200转64M SATA 6Gb/秒 台式机硬盘 建达蓝德 盒装正品</a></div>
						  <div class="p-price">京东价：<strong>￥438.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">希捷（Seagate）1TB ST1000DM003 7200转64M SATA 6Gb/秒 台式机硬盘 建达蓝德 盒装正品</a></div>
						  <div class="p-price">京东价：<strong>￥438.00</strong></div>
						</li>
                        <li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.3.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">希捷（Seagate）1TB ST1000DM003 7200转64M SATA 6Gb/秒 台式机硬盘 建达蓝德 盒装正品</a></div>
						  <div class="p-price">京东价：<strong>￥438.00</strong></div>
						</li>
				</ul>
				<ul class="lh">
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">大水牛（BUBALUS）电脑机箱 经典-A1008 灰黑色（不含电源）</a></div>
						  <div class="p-price">京东价：<strong>￥112.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">大水牛（BUBALUS）电脑机箱 经典-A1008 灰黑色（不含电源）</a></div>
						  <div class="p-price">京东价：<strong>￥112.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">大水牛（BUBALUS）电脑机箱 经典-A1008 灰黑色（不含电源）</a></div>
						  <div class="p-price">京东价：<strong>￥112.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">大水牛（BUBALUS）电脑机箱 经典-A1008 灰黑色（不含电源）</a></div>
						  <div class="p-price">京东价：<strong>￥112.00</strong></div>
						</li>
						<li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">大水牛（BUBALUS）电脑机箱 经典-A1008 灰黑色（不含电源）</a></div>
						  <div class="p-price">京东价：<strong>￥112.00</strong></div>
						</li>
                        <li>
						  <div class="p-img ld"><a href="detail.html"><img src="images/2.5.jpg"></a>  </div>
						  <div class="p-name"><a href="detail.html">大水牛（BUBALUS）电脑机箱 经典-A1008 灰黑色（不含电源）</a></div>
						  <div class="p-price">京东价：<strong>￥112.00</strong></div>
						</li>
				</ul>
		</div>
	</div>
<!--TAB 结束--> 
  
<!--人气单品-->
	<div class="danpin">
		<div class="title">人气推荐单品</div>
        <ul>
        	<li><a href="detail.html"><img src="images/list1.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list2.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list3.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list4.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list5.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list4.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list3.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list2.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list1.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list5.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list1.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
            
            <li><a href="detail.html"><img src="images/list1.jpg" /></a>
            	<p class="biaoti"><a href="detail.html">春日花朵烂漫 跃于衣上美不胜收</a></p>
            	<p class="price"><a class="fr">¥118.00</a><a href="detail.html"><img src="images/like.jpg" /></a></p>
                <p><a href="detail.html">125人已购买</a></p>
            </li>
        </ul>
	</div>
<!--人气单品 结束-->

<!--衣服-->
    <div class="yifu">
    	<div class="title"><span class="leibie">衣服</span><span class="jinri">今日上新<strong>6210</strong>件</span><span class="suoyou fr"><a href="detail.html">查看所有商品</a></span></div>
        <div class="fl left">
            <ul class="yifu-list">
                <li><a href="detail.html"><img src="images/list1.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list2.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list3.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list4.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list5.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list1.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list2.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list3.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list4.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <li><a href="detail.html"><img src="images/list5.jpg" /></a><p><a href="detail.html">韩系甜美衬衫</a></p></li>
                <div class="clearfix"></div>
            </ul>
        	
            <div class="bottom">
                <div class="fl part">
                    <div class="fl"><a href="detail.html">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="fl part bdleft">
                    <div class="fl"><a href="">上衣上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                        
                        </ul>
                    </div>
                </div>
                
                <div class="fl part bdleft">
                    <div class="fl"><a href="">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                           
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="right fr">
        	<dl>
            	<dt><a href="" class="fr">更多好店</a>最热衣服好店</dt>
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                
                
            </dl>
        </div>
        
        <div class="clearfix"></div>
	</div>
<!--衣服 结束-->

<!--鞋子 开始-->
<div class="yifu shoe">
    	<div class="title"><span class="leibie">鞋子</span><span class="jinri">今日上新<strong>6210</strong>件</span><span class="suoyou fr"><a href="">查看所有商品</a></span></div>
        <div class="fl left">
            <ul class="yifu-list">
                <li><a href=""><img src="images/list1.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list2.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list3.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list4.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list5.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <div class="clearfix"></div>
            </ul>
        	
            <div class="bottom">
                <div class="fl part">
                    <div class="fl"><a href="">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="fl part bdleft">
                    <div class="fl"><a href="">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="fl part bdleft">
                    <div class="fl"><a href="">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="right fr">
        	<dl>
            	<dt><a href="" class="fr">更多好店</a>最热鞋子好店</dt>
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
            </dl>
        </div>
        
        <div class="clearfix"></div>
	</div>
<!--鞋子 结束-->


<!--包包 开始-->
<div class="yifu bag">
    	<div class="title"><span class="leibie">包包</span><span class="jinri">今日上新<strong>6210</strong>件</span><span class="suoyou fr"><a href="">查看所有商品</a></span></div>
        <div class="fl left">
            <ul class="yifu-list">
                <li><a href=""><img src="images/list1.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list2.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list3.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list4.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list5.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <div class="clearfix"></div>
            </ul>
        	
            <div class="bottom">
                <div class="fl part">
                    <div class="fl"><a href="">上衣上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="fl part bdleft">
                    <div class="fl"><a href="">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="fl part bdleft">
                    <div class="fl"><a href="">上衣上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="right fr">
        	<dl>
            	<dt><a href="" class="fr">更多好店</a>最热包包好店</dt>
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
            </dl>
        </div>
        
        <div class="clearfix"></div>
	</div>
<!--包包 结束-->

<!--配饰 开始-->
<div class="yifu peishi">
    	<div class="title"><span class="leibie">配饰</span><span class="jinri">今日上新<strong>6210</strong>件</span><span class="suoyou fr"><a href="">查看所有商品</a></span></div>
        <div class="fl left">
            <ul class="yifu-list">
                <li><a href=""><img src="images/list1.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list2.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list3.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list4.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <li><a href=""><img src="images/list5.jpg" /></a><p><a href="">韩系甜美衬衫</a></p></li>
                <div class="clearfix"></div>
            </ul>
        	
            <div class="bottom">
                <div class="fl part">
                    <div class="fl"><a href="">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                            <li><a href="">便鞋</a></li>
                            <li><a href="">板鞋</a></li>
                            <li><a href="">凉鞋</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="fl part bdleft">
                    <div class="fl"><a href="">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                            <li><a href="">便鞋</a></li>
                            <li><a href="">板鞋</a></li>
                            <li><a href="">凉鞋</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="fl part bdleft">
                    <div class="fl"><a href="">上衣</a></div>
                    <div class="fr">
                    	<ul>
                        	<li><a href="">系鞋带</a></li>
                            <li><a href="">休闲鞋</a></li>
                            <li><a href="">帆布鞋</a></li>
                            <li><a href="">运动鞋</a></li>
                            <li><a href="">高帮鞋</a></li>
                            <li><a href="">豆豆鞋</a></li>
                            <li><a href="">便鞋</a></li>
                            <li><a href="">板鞋</a></li>
                            <li><a href="">凉鞋</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="right fr">
        	<dl>
            	<dt><a href="" class="fr">更多好店</a>最热包包好店</dt>
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
                <dd>
                	<a href=""><img src="images/yifu.jpg" /></a>
                	<span><a href="">之月女装</a></span>
                	<p>121件商品/总销量1949</p>
                </dd>
                
            </dl>
        </div>
        
        <div class="clearfix"></div>
	</div>
<!--配饰 结束-->

<!--热门杂志-->
	<div class="zazhi">
    	<div class="title">
        	<span class="fl">热门杂志</span>
        	<div class="fr">
            	<a href="">欧美</a>
                <a href="">甜美</a>
                <a href="">复古</a>
                <a href="">个性</a>
                <a href="">日系</a>
                <a href="">其他</a>
            </div>
        </div>
        <ul>
        	<li>
            	<p><a href="">韩范@!</a></p>
                <a href="" class="imgbox"><img src="images/za1.jpg" /></a>
                <span><a href="" class="fr">去看看</a>1299个分享</span>
           </li>
           
           <li>
            	<p><a href="">韩范@!</a></p>
                <a href="" class="imgbox"><img src="images/za2.jpg" /></a>
                <span><a href="" class="fr">去看看</a>1299个分享</span>
           </li>
           
           <li>
            	<p><a href="">韩范@!</a></p>
                <a href="" class="imgbox"><img src="images/za3.jpg" /></a>
                <span><a href="" class="fr">去看看</a>1299个分享</span>
           </li>
           
           <li>
            	<p><a href="">韩范@!</a></p>
                <a href="" class="imgbox"><img src="images/za4.jpg" /></a>
                <span><a href="" class="fr">去看看</a>1299个分享</span>
           </li>
           
           <li>
            	<p><a href="">韩范@!</a></p>
                <a href="" class="imgbox"><img src="images/za5.jpg" /></a>
                <span><a href="" class="fr">去看看</a>1299个分享</span>
           </li>
           
        </ul>
    </div>
<!--热门杂志 结束-->
</div>

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
            	<dl class="xiaofei">
                	<dt>获取更新</dt>
                    <dd><a href="">邮件订阅</a></dd>
                    <dd><a href="">iPhone/Android</a></dd>
                    <dd><a href="">美团QQ空间</a></dd>
                    <dd><a href="">美团新浪微博</a></dd>
                    <dd><a href="">sitemap</a></dd>
                    <dd><a href="">RSS订阅</a></dd>
                </dl>
                
                <dl class="gongsi">
                	<dt>公司</dt>
                    <dd><a href="">关于美团</a></dd>
                    <dd><a href="">美团承诺</a></dd>
                    <dd><a href="">媒体报道</a></dd>
                    <dd><a href="">加入我们</a></dd>
                    <dd><a href="">法律声明</a></dd>
                    <dd><a href="">用户协议</a></dd>
                </dl>
                
                <dl class="shangjia">
                	<dt>商务合作</dt>
                    <dd><a href="">提供团购信息</a></dd>
                    <dd><a href="">美团商家营销平台</a></dd>
                    <dd><a href="">市场合作</a></dd>
                    <dd><a href="">美团联盟</a></dd>
                    <dd><a href="">廉正邮箱</a></dd>
                    <dd><a href="">moc.nautiem@gnehznail</a></dd>
                </dl>
                
                <dl class="bangzhu">
                	<dt>用户帮助</dt>
                    <dd><a href="">申请退款</a></dd>
                    <dd><a href="">查看美团券密码</a></dd>
                    <dd><a href="">常见问题</a></dd>
                    <dd><a href="">开放API</a></dd>
                    <dd><a href="">美团云</a></dd>
                    <dd><a href="">反诈骗公告</a></dd>
                </dl>
                
            </div>
            
            <div class="youce fr">
            	<div class="ico"></div>
                <p>退款、退换货、查看美团券
                	<br />
					<em>参考教程，轻松搞定 »</em>
                </p>
                <p class="tel">客服电话：400-660-5335
                	<br />
					服务时间：每天 9:00 - 22:00
               </p>
            </div>
            
        </div>
        <div class="clearfix"></div>
    </div>
    
    

</footer>
<script src="js/all.js" type="text/javascript"></script>
</body>
</html>