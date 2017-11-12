<!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/login.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/comm.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/pageDialog.css"/>

<!--
<link rel="stylesheet" href="themesmobile/ahxcgg_mobile/css/ecsmart.css" />
-->
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/validate/messages_zh.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/pageDialog.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,user.js,transport.js')); ?>
<style>
    body{
     background: #f4f4f4;
     font-size:62.5%; /* 10÷16=62.5% */
    }
    .registerCon {
    width: 100%;
    text-align: center;
    padding-bottom: 30px;
    min-height: 190px;
    overflow: hidden;
    }
    .footer {
    padding-top:10px; border-top:solid 1px #ddd;
    text-align:center;
    position:relative;
    padding-bottom:10px;
    font-size: 1.2rem;
    position: fixed;
    bottom: 0
    }
    .codeTip{
        position:relative; 
        width: 70%;
        height: 36px; 
        background-color: #fff; 
        margin: 15px auto;
    }
    .codeTip img{
    left:5%; 
    width:24px; 
    position:absolute; 
    top:50%;
    margin-top:-12px
    }
    .codeTip p{
    line-height: 36px; 
    margin: 0; 
    text-align:center; 
    color: #888;
    font-size: 0.9rem;
    }
</style>
</head>
<body>
	<header id="header" class='header'>
	    <div class="h-left">
			<a href="javascript:history.back(-1)"></a>
		</div>
		<div class="h-mid">
			下载APP
		</div>
	</header>

    <section style="color:#888;width:100%">
        <div class="registerCon">
	        <p style="margin: 20px auto; font-size: 1rem;">请下载爱心购相关手机客户端</p>
          <p style="margin: 0 15px;">爱心购客户端：</p>
          <img  style="width:70%" src="themesmobile/ahxcgg_mobile/images/user/axgdownload.png" alt="">
        <div class="codeTip">
            <img src="themesmobile/ahxcgg_mobile/images/user/right.png" >
            <p>欢迎扫码下载APP</p>
        </div>
        </div>
        </section>

<footer class="footer">
  <p style="line-height:180%;font-size: 0.8rem;"> <!-- Copyright © 2016 - 2028 常州市迅付信息技术有限公司 版权所有<br/>  -->客服QQ：986818282&nbsp;&nbsp;客服电话：400-828-8884<br/> 苏ICP备15034988号-2 </p>
</footer>


</body>
</html>