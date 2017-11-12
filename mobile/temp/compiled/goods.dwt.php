<!DOCTYPE html>
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
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/goods.css"/>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/TouchSlide.1.1.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/touchslider.dev.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<script type="text/javascript"> 
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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


<?php 
$k = array (
  'name' => 'add_url_uid',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
<div class="goods_header">
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
    <dt> <a href="flow.php" class="show_cart"><em class="global-nav__nav-shop-cart-num" id="ECS_CARTINFO"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></em></a></dt>
  </dl>
</div>
<?php echo $this->fetch('library/up_menu.lbi'); ?> 
<form action="share_goods.php" method="post" id="share_form">
  <input type="hidden" name="content" value="<?php echo $this->_var['goods']['goods_style_name']; ?>">
  <input type="hidden" name="pics" value="<?php echo $this->_var['goods']['goods_img']; ?>">
  <input type="hidden" name="gid" value="<?php echo $this->_var['goods']['goods_id']; ?>">
  <input type="hidden" name="url" value="http://<?php echo $_SERVER['SERVER_NAME']; ?><?php echo $_SERVER['REQUEST_URI']; ?>">
</form>
<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" id="purchase_form" name="ECS_FORMBUY" >

<input type="hidden" id="chat_goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
<input type="hidden" id="chat_supp_id" value="<?php echo $this->_var['goods']['supplier_id']; ?>" />
<div class="main body_bj" id="user_goods_ka_1" style="display:block;">
 
<?php echo $this->fetch('library/goods_gallery.lbi'); ?>

<div class="product_info"> 
  
  <div class="info_dottm"> 
  <?php if ($this->_var['goods']['goods_brief']): ?>
    <h3><em><?php echo $this->_var['goods']['goods_name']; ?></em><span><?php echo $this->_var['goods']['goods_brief']; ?></span></h3>
    <?php else: ?>
    <h2><?php echo $this->_var['goods']['goods_name']; ?></h2>
    <?php endif; ?>
    <div class="right"><a onClick="tiaozhuan()">
      <div id="pro_share" class="share"></div>
      </a></div>
  </div>
  
  <dl class="goods_price">
    <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
    
    <dt><span>￥</span> <span id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['promote_price']; ?></span> <em>促销价</em><em>剩余<i id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></i></em> </dt>
    <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
    <dd><i>价格：<font>￥<?php echo $this->_var['goods']['shop_price_formated']; ?></font></i> 
      
      <?php if ($this->_var['goods']['give_integral'] == '-1'): ?> 
      <em style="display:none">赠送积分: <span id="ECS_GOODS_AMOUNT_JF"></span></em> 
      <?php elseif ($this->_var['goods']['give_integral'] > 0): ?> 
      <em style="display:none">赠送积分: <span><?php echo $this->_var['goods']['give_integral']; ?></span></em> 
      <?php else: ?> 
      <em style="display:none">赠送积分: <span>0</span></em> 
      <?php endif; ?> 
      <em id="IS_EXCLUSIVE" style="display:none">手机专享</em> 
      <?php if ($this->_var['goods']['is_shipping']): ?><em style="display:none">包邮</em><?php endif; ?> 
    </dd>
    <?php else: ?>
    <dt> <span id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['shop_price_formated']; ?></span> 
      <?php if ($this->_var['goods']['is_shipping']): ?><em style="display:none">包邮</em><?php endif; ?> 
    </dt>
    <dd> <i>价格：<font><?php echo $this->_var['goods']['market_price']; ?></font></i> 
      <?php if ($this->_var['goods']['give_integral'] == '-1'): ?> 
      <em style="display:none">赠送积分: <span id="ECS_GOODS_AMOUNT_JF"></span></em> 
      <?php elseif ($this->_var['goods']['give_integral'] > 0): ?> 
      <em style="display:none">赠送积分: <span><?php echo $this->_var['goods']['give_integral']; ?></span></em> 
      <?php else: ?> 
      <em style="display:none">赠送积分: <span>0</span></em> 
      <?php endif; ?> 
      <em id="IS_EXCLUSIVE" style="display:none">手机专享</em> </dd>
    <?php endif; ?>
    <dd style="float: right; font-size: 12px; color: #999;">供应商：<?php echo $this->_var['goods']['gongyingshang']; ?></dd>
  </dl>  
  <ul class="price_dottm">
    <li style=" text-align:left">折扣：<?php echo $this->_var['zhekou']; ?>折</li>
    <li><?php echo $this->_var['review_count']; ?>人评价</li>
    <li style=" text-align:right"><?php if ($this->_var['cfg']['show_goods_sales']): ?>
<?php echo $this->_var['lang']['sales_volume_total']; ?>
<?php echo $this->_var['sales_count']; ?><?php if ($this->_var['goods']['measure_unit']): ?><?php echo $this->_var['goods']['measure_unit']; ?><?php else: ?><?php echo $this->_var['lang']['pcs']; ?><?php endif; ?>
<?php endif; ?>人已购</li>
  </ul>
</div>

 <?php if ($this->_var['promotion'] || $this->_var['volume_price_list'] || $this->_var['goods']['give_integral'] > 0 || $this->_var['goods']['bonus_money']): ?>
 <div class="goods_hd"> 
  <dl>
    <dt onClick="choose_attrtwo(0)"> 
    <?php if ($this->_var['promotion']): ?> 
      <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['promotion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['promotion']['iteration']++;
?> 
      <?php if ($this->_foreach['promotion']['iteration'] < 2): ?> 
      <i>惠</i><span><?php echo $this->_var['item']['act_name']; ?></span> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php elseif ($this->_var['volume_price_list']): ?> 
      <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
        $this->_foreach['name']['iteration']++;
?> 
      <?php if ($this->_foreach['name']['iteration'] < 2): ?> 
      <i>惠</i><span>购买<?php echo $this->_var['price_list']['number']; ?>件&nbsp;优惠价：<?php echo $this->_var['price_list']['format_price']; ?></span> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php elseif ($this->_var['goods']['give_integral'] > 0): ?> <i>惠</i><span><?php echo $this->_var['lang']['goods_give_integral']; ?> <?php echo $this->_var['goods']['give_integral']; ?><?php echo $this->_var['points_name']; ?></span> 
      <?php elseif ($this->_var['goods']['bonus_money']): ?> <i>赠</i><span><?php echo $this->_var['lang']['goods_bonus']; ?><?php echo $this->_var['goods']['bonus_money']; ?></span> <?php endif; ?> </dt>
  </dl>

  </div>  <?php endif; ?> 
  
<?php if ($this->_var['rank_prices']): ?>
<div class="goods_hd" style="display: none;">   
  <dl>
    <dt onClick="choose_attrstr(0)" >会员等级价格</dt>
  </dl>
   </div>
<?php endif; ?>

<div class="goods_can">
 <dl>
<dt onClick="choose_attrone(0)">产品参数</dt>
</dl>
</div>


<?php if ($this->_var['specification']): ?>
<div class="goods_can">
<dl id="ECS_SELECT_GOODS_ATTR" style="display:none">
</dl>
</div>
<?php endif; ?>


<?php if ($this->_var['pups'] && $this->_var['ppts']): ?>
<section id="search_ka" class="goods_ziti" style="display: none;">
<a href="pocking.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><span>查看自提点</span><i><img src="themesmobile/ahxcgg_mobile/images/goods/ziti.png"></i></a>

</section>
<?php endif; ?>


<?php if ($this->_var['goods']['supplier_id']): ?>
<section class="rzs_info" style="display: none;">
<div class="top_info">
<dl>
<a href="supplier.php?suppId=<?php echo $this->_var['suppid']; ?>">
<dt><?php if ($this->_var['shop_logo']): ?><img src="./..<?php echo $this->_var['shop_logo']; ?>"><?php else: ?><img src="themesmobile/ahxcgg_mobile/images/goods/dianpu.jpg"><?php endif; ?></dt>
<dd><span><?php echo $this->_var['shopname']; ?></span><em><?php echo $this->_var['userrank']; ?><?php if ($this->_var['serviceqq']): ?>&nbsp;&nbsp;QQ:<?php echo $this->_var['serviceqq']; ?><?php endif; ?><?php if ($this->_var['servicephone']): ?>&nbsp;&nbsp;电话：<?php echo $this->_var['servicephone']; ?><?php endif; ?><?php if ($this->_var['serviceemail']): ?>&nbsp;&nbsp;邮件：<?php echo $this->_var['serviceemail']; ?><?php endif; ?></em></dd>
</a>
</dl>
<ul>
<a href="supplier.php?suppId=<?php echo $this->_var['suppid']; ?>">
<li class="bian_l whim"><strong><?php echo $this->_var['goodsnum']; ?></strong><font>全部商品</font></li>
<li class="bian_l whim"><strong><?php echo $this->_var['fensi']; ?></strong><font>关注人数</font></li>
<li class="whim1">
<span><em>宝贝描述</em><i><?php if ($this->_var['c_rank'] > 0): ?><?php echo $this->_var['c_rank']; ?><?php else: ?>5.0<?php endif; ?></i></span>
<span><em>卖家服务</em><i><?php if ($this->_var['serv_rank'] > 0): ?><?php echo $this->_var['serv_rank']; ?><?php else: ?>5.0<?php endif; ?></i></span>  
<span><em>物流服务</em><i><?php if ($this->_var['shipp_rank'] > 0): ?><?php echo $this->_var['shipp_rank']; ?><?php else: ?>5.0<?php endif; ?></i></span>
</li>
</a>
</ul>
</div>
<div class="s_dianpu">
<span><?php if ($this->_var['is_guanzhu']): ?><a href="javascript:void(0)" style=" margin-left:7%;"><em class="bg1"></em>已收藏</a><?php else: ?><a href="javascript:guanzhu(<?php echo $this->_var['suppid']; ?>)" style=" margin-left:7%;"><em class="bg1"></em>收藏店铺</a><?php endif; ?></span>
<span><a href="supplier.php?suppId=<?php echo $this->_var['suppid']; ?>" style=" margin-left:3%;"><em class="bg2"></em>进入店铺</a></span>
</div>
</section>
<?php endif; ?>


<?php if ($this->_var['package_goods_list_120']): ?>
<section class="index_taocan">
    <a href="goods.php?act=taocan&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>">
    <h2><span></span>优惠套餐</h2>
        <div class="tc_goods">
        <?php $_from = $this->_var['package_goods_list_120']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pa_item');$this->_foreach['pa_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pa_list']['total'] > 0):
    foreach ($_from AS $this->_var['pa_item']):
        $this->_foreach['pa_list']['iteration']++;
?>
        <?php if (($this->_foreach['pa_list']['iteration'] <= 1)): ?>
         <?php $_from = $this->_var['pa_item']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pa_goods');$this->_foreach['pa_list_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pa_list_goods']['total'] > 0):
    foreach ($_from AS $this->_var['pa_goods']):
        $this->_foreach['pa_list_goods']['iteration']++;
?>
         <?php if ($this->_foreach['pa_list_goods']['iteration'] < 4): ?>
         <?php if ($this->_foreach['pa_list_goods']['iteration'] == 3): ?>
          <dl class="t_goods">
          <dt>
          <span> <?php echo $this->_var['pa_goods']['rank_price_zk_format']; ?></span>
          <i><img src="<?php echo $this->_var['pa_goods']['goods_thumb']; ?>" class="B_eee" ></i>
          </dt>
           </dl>
           <?php else: ?>
          <dl class="t_goods">
          <dt><span><?php echo $this->_var['pa_goods']['rank_price_zk_format']; ?></span>
          <i><img src="<?php echo $this->_var['pa_goods']['goods_thumb']; ?>" class="B_eee" ></i></dt>
           </dl>
           <div class="jia"><img src="themesmobile/ahxcgg_mobile/images/goods/jia.png" class="B_eee" ></div>
           <?php endif; ?>
          <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</a>
  </section>
<?php endif; ?> 
</div>

<div class="main" id="user_goods_ka_2" style="display:none">
      <div class="product_main" style=" margin-top:40px;">
          <div class="product_images product_desc" id="product_desc"> </div>
        </div>
      </div> 

<div class="tab_attrs tab_item hide" id="user_goods_ka_3" style="display:none;">
        <?php echo $this->fetch('library/comments.lbi'); ?> 
        <script language="javascript"> ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,0,1);</script>
      </div>

              
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  try {onload_leftTime(now_time);}

  catch (e) {
}
}

/**/
function  show_goods_desc(){
   document.getElementById('product_desc').innerHTML = '<?php echo $this->_var['goods']['goods_desc']; ?>';
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
    
   <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['promotion'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['promotion']['iteration']++;
?> 
<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>">
<li>
<i>惠</i>
<span><?php echo $this->_var['item']['act_name']; ?></span>
</li></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
<?php if ($this->_var['volume_price_list']): ?>     
<?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
<li><i>购</i>
<span>购买<?php echo $this->_var['price_list']['number']; ?>件&nbsp;优惠价：<?php echo $this->_var['price_list']['format_price']; ?></span></li><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 <?php endif; ?>
 <?php if ($this->_var['goods']['bonus_money']): ?>
<li>
<i>赠</i><span><?php echo $this->_var['lang']['goods_bonus']; ?><?php echo $this->_var['goods']['bonus_money']; ?></span></li>
 <?php endif; ?>
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
    <?php if ($this->_var['rank_prices']): ?>
    <ul>
    <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
<li>			
<p><?php echo $this->_var['rank_price']['rank_name']; ?>：</p>
<span><?php echo $this->_var['rank_price']['price']; ?></span>
    </li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
     <?php endif; ?>
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
<h2><?php echo $this->_var['lang']['xinxi']; ?></h2>    
<ul>
 
 <li><p>商品名称：</p><span><?php echo $this->_var['goods']['goods_style_name']; ?></span></li>
  <?php if ($this->_var['goods']['goods_sn']): ?>
 <li><p>商品编号：</p><span><?php echo $this->_var['goods']['goods_sn']; ?></span></li><?php endif; ?>
  <?php if ($this->_var['goods']['goods_brand']): ?>
 <li><p>商品品牌：</p><span><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></span></li><?php endif; ?>
  <?php if ($this->_var['goods']['add_time']): ?>
 <li><p>上架时间：</p><span><?php echo $this->_var['goods']['add_time']; ?></span></li><?php endif; ?>
  <?php if ($this->_var['goods']['goods_weight']): ?>
 <li><p>商品重量：</p><span><?php echo $this->_var['goods']['goods_weight']; ?></span></li><?php endif; ?>
<?php if ($this->_var['goods']['goods_number'] == 0): ?>
 <li><p>商品库存：</p><span> <?php echo $this->_var['lang']['stock_up']; ?> </span></li>
<?php else: ?>
 <li><p>商品库存：</p><span> <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?> </span></li> <?php endif; ?>
  <?php if ($this->_var['properties']): ?> 
<?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
 <li><p><?php echo htmlspecialchars($this->_var['property']['name']); ?>:</p><span><?php echo $this->_var['property']['value']; ?></span></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
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
<?php echo $this->fetch('library/goods_choose_attr.lbi'); ?>
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
            actionForm.action = "javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>),close_choose_attr()";
        }
        if(num == 1){
            var actionForm = document.getElementById('purchase_form');  
            actionForm.action = "javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,0,1),close_choose_attr()";
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
            <p style="font-size:16px;color:#F52648;"><?php echo sub_str($this->_var['goods']['goods_name'],20); ?></p>
           <p style="font-size:12px;color:#999;"> 当商品进行补货时，我们将以短信、邮件的形式通知您，最多发送一次，不会对您造成干扰。</p>
 </div>
 <ul>
 <li><span><font color=#ff3300>*</font>数量：</span><em><input type="text" value="1" id="book_number" /></em></li>
 <li><span><font color=#ff3300>*</font>手机号码：</span><em><input type="text" value="" id="phone_num" /></em></li>
 <li><span><font color=#ff3300>*</font>电子邮箱：</span><em><input type="text" value="" id="arrival_email" /></em></li>
 <li><input type="button" value="提交" onclick="tell_me1(<?php echo $this->_var['goods']['goods_id']; ?>)" class="tell_btn"/></li>
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
<?php echo $this->fetch('library/arrive_notice.lbi'); ?>
</section>
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
 <li class="bian"><a href="mqq://im/chat?chat_type=wpa&uin=<?php echo $this->_var['cusqq']['cus_no']; ?>&version=1&src_type=web
"><em class="goods_nav2"></em><span>客服</span></a> </li>
 <li><a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" id="favorite_add"><em class="goods_nav3"></em><span>收藏</span></a></li>
 </ul>
 <dl> 
 <dd class="goumai" id="ECS_ONE_STEP_BUY"><a style="display:block;" onClick="choose_attr(1)">立即购买</a> </dd>
 <span class="daohuo" id="ECS_DAOHUO"> <a onClick="tell_me(<?php echo $this->_var['goods']['goods_id']; ?>)"/>到货通知</a></span>
 </dl>                
</div>  
</body>  
</html>