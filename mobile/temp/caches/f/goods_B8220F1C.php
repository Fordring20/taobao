<?php exit;?>a:3:{s:8:"template";a:6:{i:0;s:68:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/goods.dwt";i:1;s:78:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/up_menu.lbi";i:2;s:84:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/goods_gallery.lbi";i:3;s:79:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/comments.lbi";i:4;s:88:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/goods_choose_attr.lbi";i:5;s:84:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/arrive_notice.lbi";}s:7:"expires";i:1510021204;s:8:"maketime";i:1510017604;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>aabbcc20_限时秒杀_爱心购  </title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/goods.css"/>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/touchslider.dev.js"></script>
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<script type="text/javascript"> 
var process_request = "正在处理您的请求...";
</script> 
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
function tiaozhuan()
{ 
//var thisurl = window.location.href;
document.getElementById("share_form").submit();
}
</script> 
<script type="text/javascript">
				/*第一种形式 第二种形式 更换显示样式*/
				function setGoodsTab(name,cursel,n){
					$('html,body').animate({'scrollTop':0},600);
				for(i=1;i<=n;i++){
				var menu=document.getElementById(name+i);
				var con=document.getElementById("user_"+name+"_"+i);
				menu.className=i==cursel?"on":"";
				con.style.display=i==cursel?"block":"none";
				}
				}
				</script> 
554fcae493e564ee0dc75bdf2ebf94caadd_url_uid|a:1:{s:4:"name";s:11:"add_url_uid";}554fcae493e564ee0dc75bdf2ebf94ca<div class="goods_header">
  <h2><a class="sb-back" href="category.php" title="返回"></a></h2>
  <ul>
    <li><a href="javascript:;" class="tab_head on" id="goods_ka1" onClick="setGoodsTab('goods_ka',1,3)">商品</a></li>
    <li><a href="javascript:;" class="tab_head" id="goods_ka2" onClick="setGoodsTab('goods_ka',2,3), show_goods_desc()">详情</a></li>
    <li><a href="javascript:;" class="tab_head" id="goods_ka3" onClick="setGoodsTab('goods_ka',3,3)">评价</a></li>
  </ul>
  <dl style="display:none;">
    <dd class="top_bar">
      <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a></div>
    </dd>
    <dt> <a href="flow.php" class="show_cart"><em class="global-nav__nav-shop-cart-num" id="ECS_CARTINFO">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</em></a></dt>
  </dl>
</div>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/mobile.js" ></script>
<div class="goods_nav hid" id="menu">
        <div class="Triangle">
          <h2></h2>
        </div>
        <ul>
          <li>
            <a href="index.php">
              <!--<span class="menu1"></span>-->
              <img src="themesmobile/ahxcgg_mobile/images/ad_index.png" style="width:25px; height:25px; float:left; displa:block; margin-top:5px; margin-left:5px;" />
              <i>首页</i>
            </a>
          </li>
          <li>
            <a href="category.php">
              <!--<span class="menu2"></span>-->
              <img src="themesmobile/ahxcgg_mobile/images/shoplist.png" style="width:25px; height:25px; float:left; displa:block; margin-top:5px; margin-left:5px;" />
              <i>商品</i>
            </a>
          </li>
          <li>
            <a href="index.php">
              <!--<span class="menu3"></span>-->
              <img src="themesmobile/ahxcgg_mobile/images/active.png" style="width:25px; height:25px; float:left; displa:block; margin-top:5px; margin-left:5px;" />
              <i>活动</i>
            </a>
          </li>
          <li style=" border:0;">
            <a href="user.php">
              <!--<span class="menu4"></span>-->
              <img src="themesmobile/ahxcgg_mobile/images/user.png" style="width:25px; height:25px; float:left; displa:block; margin-top:5px; margin-left:5px;" />
              <i>我的</i>
            </a>
          </li>
        </ul>
      </div> 
<form action="share_goods.php" method="post" id="share_form">
  <input type="hidden" name="content" value="aabbcc20">
  <input type="hidden" name="pics" value="./.././images/1409272951415985699.jpg">
  <input type="hidden" name="gid" value="20">
  <input type="hidden" name="url" value="http://localhost/aixingou/mobile/goods.php?id=20">
</form>
<form action="javascript:addToCart(20)" method="post" id="purchase_form" name="ECS_FORMBUY" >
<input type="hidden" id="chat_goods_id" value="20" />
<input type="hidden" id="chat_supp_id" value="0" />
<div class="main body_bj" id="user_goods_ka_1" style="display:block;">
 
<div class="banner">
  <div id="slider" class="slider" style="overflow: hidden; visibility: visible; list-style: none; position: relative;">
    <ul id="sliderlist" class="sliderlist" style="position: relative; overflow: hidden; transition: left 600ms ease; -webkit-transition: left 600ms ease; width: 2400px; left: -600px;">
              <li style="float: left; display: block; width: 600px;"><span><a href="javacript:void(0)"><img title="" width="100%" src="./.././images/1409272951415985699.jpg"></a></span></li>
           </ul>
    <div id="pagenavi">
         <a href="javascript:void(0);" class="active"></a>
     </div>
  </div>
</div>
<div class="s_bottom"></div>
<script type="text/javascript">$(function(){
	$("div.module_special .wrap .major ul.list li:last-child").addClass("remove_bottom_line");
});
var active=0,
	as=document.getElementById('pagenavi').getElementsByTagName('a');
	
for(var i=0;i<as.length;i++){
	(function(){
		var j=i;
		as[i].onclick=function(){
			t2.slide(j);
			return false;
		}
	})();
}
var t2=new TouchSlider({id:'sliderlist', speed:600, timeout:6000, before:function(index){
		as[active].className='';
		active=index;
		as[active].className='active';
	}});
</script>
<div class="product_info"> 
  
  <div class="info_dottm"> 
      <h2>aabbcc20</h2>
        <div class="right"><a onClick="tiaozhuan()">
      <div id="pro_share" class="share"></div>
      </a></div>
  </div>
  
  <dl class="goods_price">
        <dt> <span id="ECS_GOODS_AMOUNT">120</span> 
       
    </dt>
    <dd> <i>价格：<font>144</font></i> 
       
      <em style="display:none">赠送积分: <span id="ECS_GOODS_AMOUNT_JF"></span></em> 
       
      <em id="IS_EXCLUSIVE" style="display:none">手机专享</em> </dd>
        <dd style="float: right; font-size: 12px; color: #999;">供应商：宣城市</dd>
  </dl>  
  <ul class="price_dottm">
    <li style=" text-align:left">折扣：8.3折</li>
    <li>0人评价</li>
    <li style=" text-align:right">3人已购</li>
  </ul>
</div>
  
  
<div class="goods_hd" style="display: none;">   
  <dl>
    <dt onClick="choose_attrstr(0)" >会员等级价格</dt>
  </dl>
   </div>
<div class="goods_can">
 <dl>
<dt onClick="choose_attrone(0)">产品参数</dt>
</dl>
</div>
<section id="search_ka" class="goods_ziti" style="display: none;">
<a href="pocking.php?id=20"><span>查看自提点</span><i><img src="themesmobile/ahxcgg_mobile/images/goods/ziti.png"></i></a>
</section>
 
</div>
<div class="main" id="user_goods_ka_2" style="display:none">
      <div class="product_main" style=" margin-top:40px;">
          <div class="product_images product_desc" id="product_desc"> </div>
        </div>
      </div> 
<div class="tab_attrs tab_item hide" id="user_goods_ka_3" style="display:none;">
        <script type="text/javascript" src="js/utils.js"></script><div id="ECS_COMMENT"> 
554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:20;}554fcae493e564ee0dc75bdf2ebf94ca</div>
 
        <script language="javascript"> ShowMyComments(20,0,1);</script>
      </div>
              
<script type="text/javascript">
var goods_id = 20;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 20;
var now_time = 1510017604;
onload = function(){
  changePrice();
  try {onload_leftTime(now_time);}
  catch (e) {
}
}
/**/
function  show_goods_desc(){
   document.getElementById('product_desc').innerHTML = '';
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
if(qty <=0 ){
 document.forms['ECS_FORMBUY'].elements['number'].value = 1;
 qty = 1;
}
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
        document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
        if (document.getElementById('ECS_GOODS_AMOUNT')){
          document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
        }
       if(document.getElementById('ECS_GOODS_NUMBER')){
        document.getElementById('ECS_GOODS_NUMBER').innerHTML = res.goods_attr_number;
            if(res.goods_attr_number > 0){
                document.getElementById('ECS_ADD_TO_CART').style.display="block";
                document.getElementById('ECS_ONE_STEP_BUY').style.display="block";
                document.getElementById('ECS_DAOHUO').style.display="none";
            }else{
                document.getElementById('ECS_ADD_TO_CART').style.display="none";
                document.getElementById('ECS_ONE_STEP_BUY').style.display="none";
                document.getElementById('ECS_DAOHUO').style.display="block";
            }
        }
        if(document.getElementById('ECS_GOODS_AMOUNT_JF')){
          document.getElementById('ECS_GOODS_AMOUNT_JF').innerHTML = res.result_jf;
        }
        if(document.getElementById('ECS_GOODS_AMOUNT_CHOOSE')){
                document.getElementById('ECS_GOODS_AMOUNT_CHOOSE').innerHTML = res.result;
        }
        if(document.getElementById('ECS_GOODS_ATTR_THUMB')){
            document.getElementById('ECS_GOODS_ATTR_THUMB').src = res.goods_attr_thumb;
        }
        if(document.getElementById('ECS_GOODS_ATTR')){
            document.getElementById('ECS_GOODS_ATTR').innerHTML = res.goods_attr;
        }
    if(document.getElementById('ECS_SELECT_GOODS_ATTR') && res.goods_attr != ''){
            document.getElementById('ECS_SELECT_GOODS_ATTR').style.display="block";
            document.getElementById('ECS_SELECT_GOODS_ATTR').innerHTML ="<dt onClick='choose_attr(0)'><span>产品属性：" + res.goods_attr + "</span></dt>";
    }
        if(document.getElementById('IS_EXCLUSIVE') && res.is_exclusive){
            document.getElementById('IS_EXCLUSIVE').style.display = 'block';
        }else{
            document.getElementById('IS_EXCLUSIVE').style.display = 'none';
        }
    }
}
</script>
<section class="f_mask2" style="display: none;"></section>
<section class="f_block2" id="choose_attr2" style="height:0; overflow:hidden;">
  
<div class="Promotions"> 
 <h2>优惠活动</h2>  
   <ul>
    
     
 </ul>
</div> 
 <div class="goods_shut">     
<a href="javascript:void(0)" onclick="close_choose_attr2();" class="shut" style=" color:#FFF; font-size:18px;">关闭</a>
</div>
</section>
<script>
function choose_attrtwo(num){
	$("#choose_attr2").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.Promotions h2').height()||0,
        con = $('.Promotions');
		total = 0.8*h;
		con.height(total-top+'px');
	$(".f_mask2").show();
}
function close_choose_attr2(){	
	$(".f_mask2").hide();
	$('#choose_attr2').animate({height:'0'},[10000]);
}
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'hover') {
            t.parentNode.childNodes[i].className = '';
			t.childNodes[0].checked="checked";
		}
    }
t.className = "hover";
changePrice();
}
function changeAtt1(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.className == 'hover') {
            t.className = '';
			t.childNodes[0].checked = false;
		}
		else{
			t.className="hover";
			t.childNodes[0].checked = true;
		}
		
	
}
changePrice();
}
</script>
<section class="f_mask3" style="display: none;"></section>
<section class="f_block3" id="choose_attr3" style="height:0; overflow:hidden;">
<div class="subNavBox"> 
	<h2>会员专享价</h2>
        <ul>
    <li>			
<p>普通会员：</p>
<span>120</span>
    </li>
<li>			
<p>铜牌会员：</p>
<span>114</span>
    </li>
<li>			
<p>金牌会员：</p>
<span>108</span>
    </li>
<li>			
<p>钻石会员：</p>
<span>102</span>
    </li>
      </ul>
         </div>
 <div class="goods_shut">
<a href="javascript:void(0)" onclick="close_choose_attr3();" class="shut" style=" color:#FFF;font-size:18px;">关闭</a>
</div>
</section>
<script>
function choose_attrstr(num){
	$("#choose_attr3").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.subNavBox').height()||0,
        con = $('.subNavBox ul');
		total = 0.8*h;
		con.height(total-top+'px');
	$(".f_mask3").show();
}
function close_choose_attr3(){	
	$(".f_mask3").hide();
	$('#choose_attr3').animate({height:'0'},[10000]);
}
</script>
<section class="f_mask1" style="display: none;"></section>
<section class="f_block1" id="choose_attr1" style="height:0; overflow:hidden;">
<section class="good_canshu">
<h2>商品信息</h2>    
<ul>
 
 <li><p>商品名称：</p><span>aabbcc20</span></li>
   <li><p>商品编号：</p><span>xc000001</span></li>     <li><p>上架时间：</p><span>2017-09-19</span></li>   <li><p>商品重量：</p><span>0克</span></li> <li><p>商品库存：</p><span> 缺货 </span></li>
  </ul>
</section>
<div class="goods_shut">
<a href="javascript:void(0)" onclick="close_choose_attr1();" class="shut" style=" color:#FFF;font-size:18px;">关闭</a>
</div>
</section>
<script>
function choose_attrone(num){
	$("#choose_attr1").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.good_canshu').height()||0,
        con = $('.xiangq');
		total = 0.8*h;
		con.height(total-top+'px');
	$(".f_mask1").show();
}
function close_choose_attr1(){	
	$(".f_mask1").hide();
	$('#choose_attr1').animate({height:'0'},[10000]);
}
</script>
<section class="f_mask" style="display: none;"></section>
<section class="f_block" id="choose_attr" style="height:0; overflow:hidden;">
<div class="f_title_attr">
<img  id="ECS_GOODS_ATTR_THUMB" src="./.././images/1409272951415985699.jpg" style=" float:left;">
<div class="f_title_arr_r">
<span>价格：<i id="ECS_GOODS_AMOUNT_CHOOSE">0</i></span>
<span>库存：<i id="ECS_GOODS_NUMBER">0</i>件</span>
<span id="ECS_GOODS_ATTR"></span>
</div>
<a class="c_close_attr" href="javascript:void(0)" onclick="close_choose_attr();"></a>
<div style="height:0px; line-height:0px; clear:both;"></div>
</div>
<div class="f_content_attr">
<ul class="navContent" style="display:block;"> 
  
<li style=" border-bottom:1px solid #eeeeee">
        <div class="title1">购买数量</div>
        <div class="item1">
         <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script>
         <span class="ui-number">
          <button type="button" class="decrease" onclick="goods_cut();changePrice();"></button>
          <input type="number" class="num" id="number" onblur="changePrice();" name="number" value="1" min="1" style=" text-align:center"/>
          <button type="button" class="increase" onclick="goods_add();changePrice();"></button>
          </span>
               </div>
      
    </li>        
</ul>
</div>
<div class="f_foot">
<input type="submit"  border="0" class="add_gift_attr" value="提交" />
<div style=" height:30px"></div>
</div>
</section>
<script>
function choose_attr(num){
	document.body.style.overflow='hidden';
	$("#choose_attr").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.f_title_attr').height()||0,
		bottom =$('#choose_attr .f_foot').height()||0,
        con = $('.f_content_attr');
		total = 0.8*h;
		con.height(total-top-bottom+'px');
	$(".f_mask").show();
        if(num == 0){
            var actionForm = document.getElementById('purchase_form');  
            actionForm.action = "javascript:addToCart(20),close_choose_attr()";
        }
        if(num == 1){
            var actionForm = document.getElementById('purchase_form');  
            actionForm.action = "javascript:addToCart(20,0,1),close_choose_attr()";
        }
}
function close_choose_attr(){	
document.body.style.overflow='';
	$(".f_mask").hide();	
	$('#choose_attr').animate({height:'0'},[10000]);
}
</script>
<section class="f_mask6" style="display: none;"></section>
<section class="f_block6" id="choose_attr6" style="height:0; overflow:hidden;">
<section class="callme">
<h2>到货通知</h2>  
<div id="tell_me_form" style="display:none;">
  <div class="tell_me_con">
<div style="background:#FFFDEE ;border:1px dotted #ff3300;line-height:20px; font-weight:normal; padding:10px; margin-top:10px;">
            <p style="font-size:16px;color:#F52648;">aabbcc20</p>
           <p style="font-size:12px;color:#999;"> 当商品进行补货时，我们将以短信、邮件的形式通知您，最多发送一次，不会对您造成干扰。</p>
 </div>
 <ul>
 <li><span><font color=#ff3300>*</font>数量：</span><em><input type="text" value="1" id="book_number" /></em></li>
 <li><span><font color=#ff3300>*</font>手机号码：</span><em><input type="text" value="" id="phone_num" /></em></li>
 <li><span><font color=#ff3300>*</font>电子邮箱：</span><em><input type="text" value="" id="arrival_email" /></em></li>
 <li><input type="button" value="提交" onclick="tell_me1(20)" class="tell_btn"/></li>
 </ul>
  </div>
</div>
<script>
                $(function(){
					$('#tell_me_form').css('left',($(window).width()-500)/2);
					$('#tell_me_form').css('top',($(window).height()-300)/2);
					$('.tell_me_close').click(function(){
						$('#tell_me_form').hide();	
					//	document.getElementById('bg').style.display='none';
					})
				})
                </script> 
<script type="text/javascript">
   function tell_me(goods_id){
	
            //no_have = (typeof(no_have_val) == "undefined" ? 0 : no_have_val);
            Ajax.call('user.php?act=book_goods', 'id=' + goods_id, tellmeResponse, 'GET', 'JSON');
    }
				
    function tellmeResponse(result){
        if(result.error==1){
            document.getElementById('tell_me_form').style.display = 'block';
            // document.getElementById('bg').style.display='block';
            document.getElementById('phone_num').value=result.tel;
            document.getElementById('arrival_email').value=result.email;
            choose_attr6(0);
        }
	if(result.error==0){
            alert(result.message);
        }
	if(result.error==2){
            alert(result.message);
            close_choose_attr6();
            document.getElementById('tell_me_form').style.display = document.getElementById('tell_me_form').style.display=='none'?'block':'none';
            //  document.getElementById('bg').style.display='none';
	}
				 
    }
    function tell_me1(goods_id){
	var num=document.getElementById('book_number').value;
	var tel=document.getElementById('phone_num').value;
	var email=document.getElementById('arrival_email').value;
	var msg = '';
	var g = /^[1-9]*[1-9][0-9]*$/;
				
     if (num == '') {
        msg += '数量不能为空!\n';
    }else if(!g.test(num)){
		msg += '数量需为正整数！\n';
	}
    if (tel == '') {
        msg += '手机号码不能为空！\n';
    } 
    if (email == '') {
        msg += '邮箱不能为空!\n';
    }
    if (msg)
    {
        alert(msg);
        return false;
    }
    else
    {		
        	//no_have = (typeof(no_have_val) == "undefined" ? 0 : no_have_val)
				Ajax.call('user.php?act=add_book_goods', 'id=' + goods_id + '&num=' + num+ '&tel=' + tel+ '&em=' + email, tellmeResponse, 'GET', 'JSON');
    }
			
				
				}
    </script>  
<div id="tell_me_form" style="display:none;">
  <div class="tell_me_con">
<div style="background:#FFFDEE ;border:1px dotted #ff3300;line-height:20px; font-weight:normal; padding:10px; margin-top:10px;">
            <p style="font-size:16px;color:#F52648;">aabbcc20</p>
           <p style="font-size:12px;color:#999;"> 当商品进行补货时，我们将以短信、邮件的形式通知您，最多发送一次，不会对您造成干扰。</p>
 </div>
 <ul>
 <li><span><font color=#ff3300>*</font>数量：</span><em><input type="text" value="1" id="book_number" /></em></li>
 <li><span><font color=#ff3300>*</font>手机号码：</span><em><input type="text" value="" id="phone_num" /></em></li>
 <li><span><font color=#ff3300>*</font>电子邮箱：</span><em><input type="text" value="" id="arrival_email" /></em></li>
 <li><input type="button" value="提交" onclick="tell_me1(20)" class="tell_btn"/></li>
 </ul>
  </div>
</div></section>
<div class="goods_shut">
<a href="javascript:void(0)" onclick="close_choose_attr6();" class="shut" style=" color:#FFF;font-size:18px;">关闭</a>
</div>
</section>
<script>
function choose_attr6(num){
	$("#choose_attr6").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.callme').height()||0,
        con = $('.tell_me_con');
		total = 0.8*h;
		con.height(total-top+'px');
	$(".f_mask6").show();
}
function close_choose_attr6(){	
	$(".f_mask6").hide();
	$('#choose_attr6').animate({height:'0'},[10000]);
}
function guanzhu(sid){
	Ajax.call('supplier.php', 'go=other&act=add_guanzhu&suppId=' + sid, selcartResponse, 'GET', 'JSON');
}
function selcartResponse(result){
	
	alert(result.info);
}
</script>
</form>  
<div style=" height:55px;"></div>
<div class="footer_nav">
 <ul> 
 <li class="bian"><a href="index.php"><em class="goods_nav1"></em><span>首页</span></a> </li>
 <li class="bian"><a href="mqq://im/chat?chat_type=wpa&uin=345424724&version=1&src_type=web
"><em class="goods_nav2"></em><span>客服</span></a> </li>
 <li><a href="javascript:collect(20)" id="favorite_add"><em class="goods_nav3"></em><span>收藏</span></a></li>
 </ul>
 <dl> 
 <dd class="goumai" id="ECS_ONE_STEP_BUY"><a style="display:block;" onClick="choose_attr(1)">立即购买</a> </dd>
 <span class="daohuo" id="ECS_DAOHUO"> <a onClick="tell_me(20)"/>到货通知</a></span>
 </dl>                
</div>  
</body>  
</html>