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
<link rel="stylesheet" href="themesmobile/ahxcgg_mobile/css/public.css">
<link rel="stylesheet" href="themesmobile/ahxcgg_mobile/css/flow.css">
<link rel="stylesheet" href="themesmobile/ahxcgg_mobile/css/style_jm.css">
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/ecsmart.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,shopping_flow.js')); ?>

</head>
<body style="background:#e5e5e5;">

<div id="popup_window" style="background:#EFEFF4;box-shadow: 0 0 10px #ccc;border: 1px solid #ccc;border-radius: 6px;width:85%;height:auto;margin-left:-43%;margin-top:-20%;left:50%;top:50%;position:fixed;display:none;z-index:9999;">
  <label class="yezf_tit" style="float:left;margin:15px;width: 91%;text-align: center;"><span>请输入余额支付密码</span> </label>
  <input id="surplus_password_input" type="password" style='float:left;margin:10px 3%;width:91%;background-color:white;height:30px;border: 1px solid #ccc;padding-left: 6px;'/>
  <span class="flow_tank">
  <input class='yezf_QRB tankuang' type="button" onclick="end_input_surplus()"  value="确定" />
</span>
  <span class="flow_tank">
  <input class='yezf_QXB tankuang' type="button" onclick="cancel_input_surplus()" value="取消" />
  </span>
</div>
 

<div class="tab_nav">
  <div class="header" style=" position:relative">
    <div class="h-left"> <?php if ($this->_var['step'] == 'checkout'): ?><a class="sb-back" href="goods.php?id=<?php echo $this->_var['goods_list']['0']['goodlist']['0']['goods_id']; ?>" title="返回"></a><?php else: ?><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a><?php endif; ?> </div>
    <div class="h-mid"> <?php if ($this->_var['step'] == 'cart'): ?>继续购物<?php elseif ($this->_var['step'] == 'login'): ?>登录<?php elseif ($this->_var['step'] == 'consignee'): ?>填写收货地址<?php elseif ($this->_var['step'] == 'checkout'): ?>确认订单<?php elseif ($this->_var['step'] == 'done'): ?>提交订单<?php endif; ?> </div>
  </div>
  <dl>
    <dd class="top_bar" style=" position:absolute; top:0; right:2%; z-index:999999">
      <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
    </dd>
  </dl>
</div>
<?php echo $this->fetch('library/up_menu.lbi'); ?> 
 
<?php if ($this->_var['step'] == 'cart'): ?>
  <?php if ($this->_var['goods_list']): ?>
<form id="formCart" name="formCart" method="post" action="flow.php" style="display:none;">
  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
  <div class="folw_shopmain">
    <div class="shopmain_title">
      <dl>
        <input type="checkbox" autocomplete="off"  checked=checked class="f_checkbox f_pub_checkbox f_pub_checkbox_<?php echo $this->_foreach['goods_list']['iteration']; ?>" title="<?php echo $this->_foreach['goods_list']['iteration']; ?>" style=" margin-top:10px; margin-left:10px;">
        <dt><input type="hidden" name="supplierid" id="supplierid" value="<?php echo $this->_var['key']; ?>">
        <a class="shopLink eclipse" href="supplier.php?suppId=<?php echo $this->_var['key']; ?>"><?php echo $this->_var['goods']['supplier_name']; ?></a>
          
        </dt>
        <dd><a class="shopLink edit_btn" href="javascript:void(0)" name="<?php echo $this->_foreach['goods_list']['iteration']; ?>">编辑</a></dd>
      </dl>
    </div>
    <?php $_from = $this->_var['goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_li');$this->_foreach['goods_list1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list1']['total'] > 0):
    foreach ($_from AS $this->_var['goods_li']):
        $this->_foreach['goods_list1']['iteration']++;
?>
    <div class="item-list">
      <div class="inner">
        <input type="checkbox" autocomplete="off" name="sel_cartgoods[]" value="<?php echo $this->_var['goods_li']['rec_id']; ?>"
                   id="sel_cartgoods_<?php echo $this->_var['goods_li']['rec_id']; ?>" checked=checked   
                  class="f_checkbox check-wrapper check-wrapper-<?php echo $this->_foreach['goods_list']['iteration']; ?>">
        <div class="item_img"> <?php if ($this->_var['goods_li']['goods_thumb']): ?> <a href="goods.php?id=<?php echo $this->_var['goods_li']['goods_id']; ?>"> <img src="<?php echo $this->_var['goods_li']['goods_thumb']; ?>"></a> <?php elseif ($this->_var['goods_li']['extension_code'] == 'package_buy'): ?> <img src="themesmobile/ahxcgg_mobile/images/flow/libao.png"> <?php endif; ?> </div>
        
        <div class="goods_desc edit_info_<?php echo $this->_foreach['goods_list']['iteration']; ?>" >
          <dl>
            <dt><?php if ($this->_var['goods_li']['is_gift'] > 0): ?><span style=" color:#E71F19">[<?php echo $this->_var['lang']['largess']; ?>]&nbsp;&nbsp;</span><?php endif; ?><?php echo $this->_var['goods_li']['goods_name']; ?></dt>
          <?php if ($this->_var['goods_li']['goods_attr']): ?> <dd><?php echo $this->_var['goods_li']['goods_attr']; ?></dd><?php endif; ?>
          </dl>
          <div class="price"><span><?php echo $this->_var['goods_li']['goods_price']; ?></span><i><?php echo $this->_var['goods_li']['market_price']; ?></i> <em id="goods_numx_<?php echo $this->_var['goods_li']['rec_id']; ?>">x<?php echo $this->_var['goods_li']['goods_number']; ?></span> </div>
        </div>
        
        <div class="num edit_box_<?php echo $this->_foreach['goods_list']['iteration']; ?>" style="display:none;"> 
        <?php if ($this->_var['goods_li']['goods_id'] > 0 && $this->_var['goods_li']['is_gift'] == 0 && $this->_var['goods_li']['parent_id'] == 0): ?>
            <div class="qiehuan">
          <div class="xm-input-number"> 
            <a href="javascript:;" onclick="minus_num(<?php echo $this->_var['goods_li']['rec_id']; ?>, <?php echo $this->_var['goods_li']['goods_id']; ?>, <?php echo $this->_var['key']; ?>,<?php if ($this->_var['goods_li']['extension_code'] == 'package_buy'): ?>1<?php else: ?>0<?php endif; ?>);" id="jiannum<?php echo $this->_var['goods_li']['rec_id']; ?>" class="input-sub <?php if ($this->_var['goods_li']['goods_number'] < 2): ?><?php else: ?>active<?php endif; ?>" ></a>
            <input type="text" onKeyDown='if(event.keyCode == 13) event.returnValue = false' name="goods_number[<?php echo $this->_var['goods_li']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods_li']['rec_id']; ?>" value="<?php echo $this->_var['goods_li']['goods_number']; ?>"  class="input-num"  onblur="change_price(<?php echo $this->_var['goods_li']['rec_id']; ?>, <?php echo $this->_var['goods_li']['goods_id']; ?>, <?php echo $this->_var['key']; ?>)"/>
            <input type="hidden" id="hidden_<?php echo $this->_var['goods_li']['rec_id']; ?>" value="<?php echo $this->_var['goods_li']['goods_number']; ?>">
            <a href="javascript:;" onclick='javascript:add_num(<?php echo $this->_var['goods_li']['rec_id']; ?>, <?php echo $this->_var['goods_li']['goods_id']; ?>, <?php echo $this->_var['key']; ?>,<?php if ($this->_var['goods_li']['extension_code'] == 'package_buy'): ?>1<?php else: ?>0<?php endif; ?>)'  class="input-add"></a> </div>
          <?php if ($this->_var['goods_li']['goods_attr']): ?><div class="goods_attr" onClick="choose_attr(<?php echo $this->_var['goods_li']['rec_id']; ?>);"> 
          <span><?php echo $this->_var['goods_li']['goods_attr']; ?></span> </div><?php endif; ?>
        </div>  
          <div class="delete">
           <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods_li']['rec_id']; ?>';">
           删除
          </a> 
           </div>
          <?php else: ?>
          x<?php echo $this->_var['goods_li']['goods_number']; ?>
          <?php endif; ?> </div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <div class="flow_activity"> 
      <?php if ($this->_var['goods']['discount']['discount'] > 0): ?>
     <a href="activity.php"> <h2 id='discount_<?php echo $this->_var['key']; ?>'><span><?php echo $this->_var['goods']['discount']['your_discount']; ?></span></h2></a>
      <?php endif; ?> 
      <?php if ($this->_var['goods']['favourable']): ?>
      <h3 onclick="choose_gift(<?php echo $this->_var['key']; ?>)">选择赠品</h3>
      <?php endif; ?> 
    </div>
  </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <div style=" height:50px"></div>
  <div class="flow_bottom">
    <input type="hidden" name="step" value="update_cart">
    <div class="quanxuan">
      <div class="check-wrapper"> <span  class="cart-checkbox1 checked" onclick="return chkAll_onclick()"></span> <span class="cart-checktext">全选</span> </div>
    </div>
    <div class="info"><span class="hot" id="cart_amount_desc"><em>总计：</em><?php echo $this->_var['shopping_money']; ?></span></div>
    <div class="right"> 
      <input type="button" href="javascript:void();"  onclick="return selcart_submit();" class="xm-button " value="去结算">
      </div>
  </div>
</form>
 
<script type="text/javascript" charset="utf-8">   
    $(".inner .cart-checkbox").click(function(){
  if($(this).hasClass('checked')){
    $(this).removeClass('checked');
    $(this).find('input').attr('checked',false);
  }
  else
  {
    $(this).addClass('checked');
    $(this).find('input').attr('checked',true);
  }

        
if($(".inner .cart-checkbox")==true)
{
$('.quanxuan .cart-checkbox').addClass('checked');
}
else
{
$('.quanxuan .cart-checkbox').removeClass('checked');
}

  var is_checked = true;
            $('.inner .cart-checkbox').each(function(){
        if(!$(this).hasClass('checked'))
          {
            is_checked = false;
            return false;
          }
               });
        if(is_checked){
        $('.quanxuan .cart-checkbox').addClass('checked'); 
        }else
        {
        $('.quanxuan .cart-checkbox').removeClass('checked'); 
        }
      select_cart_goods();
         
});

   
  function chkAll_onclick() 
  {
    var is_checked = false;
    if($('.quanxuan .cart-checkbox').hasClass('checked')){
      $('.quanxuan .cart-checkbox').removeClass('checked');
      $('.inner .cart-checkbox').removeClass('checked');
      is_checked = false;
    }   
    else{
      $('.quanxuan .cart-checkbox').addClass('checked');
      $('.inner .cart-checkbox').addClass('checked');
      is_checked = true;
    }
    for (var i=0;i<document.formCart.elements.length;i++)
    {
    var e = document.formCart.elements[i];
    e.checked = is_checked;
    }
    select_cart_goods();
  }
  function select_cart_goods()
  {
        var sel_goods = new Array();
        var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
        var j=0;
        for (i=0;i<obj_cartgoods.length;i++)
        {
      if(obj_cartgoods[i].checked == true)
      { 
        sel_goods[j] = obj_cartgoods[i].value;
        j++;
      }
        }
        Ajax.call('flow.php', 'act=selcart&sel_goods=' + sel_goods, selcartResponse, 'GET', 'JSON');
  }
  function selcartResponse(res)
  {
  if(res.result == '请选择要结算的商品！')
  {
        $('.xm-button').addClass('to_cart');
      $('.xm-button').attr('disable');
  }
  else{
      $('.xm-button').removeClass('to_cart');
      $('.xm-button').removeAttr('disable');
    }
    if (res.err_msg.length > 0)
    {
            alert(res.err_msg);
    }
    else
    {
     
       document.getElementById('cart_amount_desc').innerHTML=res.result;
    }
  }
  function selcart_submit()
  {
        var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
        var j=0;
        for (i=0;i<obj_cartgoods.length;i++)
        {
      if(obj_cartgoods[i].checked == true)
      { 
        j++;
      }
        }
        if (j>0)
        {
      document.formCart.action='flow.php?step=checkout';
      document.formCart.elements['step'].value='checkout';
      document.formCart.submit();
      return true;
       }
       else
      {   
      alert('请选择要结算的商品！');
      return false;
      }
  }
  </script> 
 
 
<script>
  function add_num(rec_id,goods_id,supp_id,is_package)
   {
    var sel_goods = new Array();
    var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
    var j=0;
    for (i=0;i<obj_cartgoods.length;i++){
	if(obj_cartgoods[i].checked == true){	
            sel_goods[j] = obj_cartgoods[i].value;
            j++;
	}
    }
    document.getElementById("goods_number_"+rec_id+"").value++;
    if(document.getElementById("goods_number_"+rec_id+"").value > 1)
    {
      document.getElementById("jiannum"+rec_id).className = 'input-sub active';
      }else
      {
      document.getElementById("jiannum"+rec_id).className = 'input-sub';
      }
    var number = document.getElementById("goods_number_"+rec_id+"").value;
    Ajax.call('flow.php', 'step=update_group_cart&sel_goods='+ sel_goods +'&rec_id=' + rec_id +'&number=' + number+'&goods_id=' + goods_id + '&suppid=' + supp_id + '&is_package=' + is_package, changeNumResponse, 'GET', 'JSON');
   }
function minus_num(rec_id,goods_id,supp_id,is_package)
  {
    var sel_goods = new Array();
    var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
    var j=0;
    for (i=0;i<obj_cartgoods.length;i++){
	if(obj_cartgoods[i].checked == true){	
            sel_goods[j] = obj_cartgoods[i].value;
            j++;
	}
    }
    if (document.getElementById("goods_number_"+rec_id+"").value>1)
    {
      document.getElementById("goods_number_"+rec_id+"").value--;
      if(document.getElementById("goods_number_"+rec_id+"").value > 1)
    {
      document.getElementById("jiannum"+rec_id).className = 'input-sub active';
      }else
      {
      document.getElementById("jiannum"+rec_id).className = 'input-sub';
      }
    }
    var number = document.getElementById("goods_number_"+rec_id+"").value;
    Ajax.call('flow.php', 'step=update_group_cart&sel_goods='+ sel_goods +'&rec_id=' + rec_id +'&number=' + number+'&goods_id=' + goods_id + '&suppid=' + supp_id + '&is_package=' + is_package, changeNumResponse, 'GET', 'JSON');
  }

function change_price(rec_id,goods_id)
{
  var r = /^[1-9]+[0-9]*]*$/;
  var number = document.getElementById("goods_number_"+rec_id+"").value;
  if (!r.test(number))
  {
    alert("您输入的格式不正确！");
    document.getElementById("goods_number_"+rec_id+"").value=document.getElementById("hidden_"+rec_id+"").value;
  }
  else
  {
    Ajax.call('flow.php','step=update_group_cart&rec_id=' + rec_id +'&number=' + number+'&goods_id=' + goods_id, changeNumResponse, 'GET', 'JSON');
  }
}

function changeNumResponse(result)
{
if(result.error == 1)
{
  alert(result.content);
  document.getElementById("goods_number_"+result.rec_id+"").value =result.number;
  document.getElementById("hidden_"+result.rec_id+"").value =result.number;
}
else if (result.error == 888 )
{
	alert(result.message);
	document.getElementById("goods_number_"+result.rec_id+"").value =result.number;
	document.getElementById("hidden_"+result.rec_id+"").value =result.number;
}
else
{
  document.getElementById("hidden_"+result.rec_id+"").value =result.number;
  document.getElementById('cart_amount_desc').innerHTML = result.cart_amount_desc;//购物车商品总价说明
  show_div_text = "恭喜您！ 商品数量修改成功！ ";
  document.getElementById("goods_numx_"+result.rec_id+"").innerHTML = 'x'+result.number;

}

}
</script> 
<?php else: ?>
<section id="cart-content">
  <div class="qb_tac" style="padding:50px 0"> <img src="themesmobile/ahxcgg_mobile/images/flow/empty_cart.png" width="100" height="95"> <br>
    请选择你需要的商品</div>
  <div class="qb_gap" style="width:60%; margin:0 auto;"> <a href="./" class="mod_btn btn_strong" >马上逛逛</a> </div>
</section>
<?php endif; ?>
  <?php endif; ?> 

<section class="f_mask" style="display: none;"></section>
<section class="f_block" id="choose" style="height:0px;"></section>
<section class="f_block" id="choose_attr" style="height:0; overflow:hidden;"> </section>
<script type="text/javascript">
function closeCustomer(){
	$("#choose").hide();
	}
function choose_gift(suppid)
{
	var sel_goods = new Array();
	var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
	var j = 0;
	for (i=0; i<obj_cartgoods.length; i++)
	{
		//if(obj_cartgoods[i].checked == true)
		{	
			sel_goods[j] = obj_cartgoods[i].value;
			j++;
		}
	}
	Ajax.call('flow.php', 'is_ajax=1&suppid=' + suppid + '&sel_goods='+sel_goods, selgiftResponse, 'GET', 'JSON');
}
function selgiftResponse(res)
{
	$('#choose').html(res.result);
	$("#choose").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.f_title').height()||0,
        con = $('.f_content');
		total = 0.8*h;
		con.height(total-top+'px');
	$(".f_mask").show();
}
function close_choose(){	

	$(".f_mask").hide();
	$('#choose').animate({height:'0'},[10000]);

}

function choose_attr(rec_id)
{
 Ajax.call('flow.php?is_ajax=1&step=show_choose_attr','rec_id='+rec_id, show_choose_attr, 'GET', 'JSON');
}
function show_choose_attr(result){
	$("#choose_attr").animate({height:'80%'},[10000]);
        $("#choose_attr").html(result);
		var total=0,h=$(window).height(),
        top =$('.f_title_attr').height()||0,
        con = $('.f_content_attr');
		total = 0.8*h;
		con.height(total-top+'px');
	$(".f_mask").show();
 changePrice();
}
function close_choose_attr(){	

	$(".f_mask").hide();
	
	$('#choose_attr').animate({height:'0'},[10000]);

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

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var goodsId = document.getElementById('goods_id').value;
  var attr = getSelectedAttributes(document.forms['formCart']);
  var qty = document.getElementById('cart_goods_number').value;
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
        if (document.getElementById('ECS_GOODS_AMOUNT')){
          document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
        }
       if(document.getElementById('ECS_GOODS_NUMBER')){
        document.getElementById('ECS_GOODS_NUMBER').innerHTML = res.goods_attr_number;
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
    }
}

</script> 
 
<script type="text/javascript" charset="utf-8">   
function editCartGoods(rec_id){
    var goodsId = document.getElementById('goods_id').value;
    var attr = getSelectedAttributes(document.forms['formCart']);
    var qty = document.getElementById('cart_goods_number').value;
    Ajax.call('flow.php?is_ajax=1&step=edit_cart_goods','rec_id='+rec_id + '&goods_id=' + goodsId + '&attr=' + attr + '&number=' + qty, editCartGoodsResponse, 'GET', 'JSON');    
}

function editCartGoodsResponse(result){

    if(result.err != 0){
       alert(result.err);
    }else{
        window.location.href = "flow.php?step=cart";
    }
}

</script> 
 
<script type="text/javascript" charset="utf-8">   
    $(".inner .f_checkbox").click(function(){
      
	pub = $(this).attr("title");
	
	if($(this).attr("checked") == "checked")
	{

		var is_checked_2 = true;
        $('.check-wrapper-'+pub).each(function(){
        if($(this).attr("checked") != "checked")
          {
            is_checked_2 = false;
            return false;
          }
          });
        if(is_checked_2){
        $('.f_pub_checkbox_'+pub).attr("checked",'checked');
        }else
        {
       $('.f_pub_checkbox_'+pub).removeAttr("checked",'checked');
        }
		
	}
	else
	{
		$('.f_pub_checkbox_'+pub).removeAttr("checked");
	}
	
  		var is_checked = true;
        $('.f_checkbox').each(function(){
        if($(this).attr("checked") != "checked")
          {
            is_checked = false;
            return false;
          }
          });
        if(is_checked){
        $('.quanxuan .cart-checkbox1').addClass('checked'); 
        }else
        {
        $('.quanxuan .cart-checkbox1').removeClass('checked'); 
        }
      select_cart_goods();
         
});

$(".f_pub_checkbox").click(function(){
    	pub = $(this).attr("title");
		var is_checked = false;
    if($(this).attr("checked") == 'checked'){
				
	$(this).attr("checked","checked");
    $(this).parent().parent().parent().find('.check-wrapper-'+pub).attr('checked','checked');

    is_checked = true;
	}   
    else{
	 $(this).parent().parent().parent().find('.check-wrapper-'+pub).removeAttr("checked");
	 is_checked = false;
}


        $('.f_checkbox').each(function(){
        if($(this).attr("checked") != "checked")
          {
            is_checked = false;
            return false;
          }
          });
        if(is_checked){
        $('.quanxuan .cart-checkbox1').addClass('checked'); 
        }else
        {
        $('.quanxuan .cart-checkbox1').removeClass('checked'); 
        }

	  
    select_cart_goods();

})
   
  function chkAll_onclick() 
  {
    var is_checked = false;
    if($('.quanxuan .cart-checkbox1').hasClass('checked')){
      $('.quanxuan .cart-checkbox1').removeClass('checked');
        $('.inner .f_checkbox').removeAttr("checked");
      is_checked = false;
    }   
    else{
      $('.quanxuan .cart-checkbox1').addClass('checked');
       $('.inner .f_checkbox').attr("checked","checked");
      is_checked = true;
    }
    for (var i=0;i<document.formCart.elements.length;i++)
    {
    var e = document.formCart.elements[i];
    e.checked = is_checked;
    }
    select_cart_goods();
  }
  function select_cart_goods()
  {
        var sel_goods = new Array();
        var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
        var j=0;
        for (i=0;i<obj_cartgoods.length;i++)
        {
      if(obj_cartgoods[i].checked == true)
      { 
        sel_goods[j] = obj_cartgoods[i].value;
        j++;
      }
        }
        Ajax.call('flow.php', 'act=selcart&sel_goods=' + sel_goods, selcartResponse, 'GET', 'JSON');
  }
  function selcartResponse(res)
  {
  if(res.result == '请选择要结算的商品！')
  {
        $('.xm-button').addClass('to_cart');
      $('.xm-button').attr('disable');
  }
  else{
      $('.xm-button').removeClass('to_cart');
      $('.xm-button').removeAttr('disable');
    }
    if (res.err_msg.length > 0)
    {
            alert(res.err_msg);
    }
    else
    {
     
       document.getElementById('cart_amount_desc').innerHTML=res.result;
    }
  }
  function selcart_submit()
  {
        var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
        var j=0;
        for (i=0;i<obj_cartgoods.length;i++)
        {
      if(obj_cartgoods[i].checked == true)
      { 
        j++;
      }
        }
        if (j>0)
        {
      document.formCart.action='flow.php?step=checkout';
      document.formCart.elements['step'].value='checkout';
      document.formCart.submit();
      return true;
       }
       else
      {   
      alert('请选择要结算的商品！');
      return false;
      }
  }
  </script> 
 
<script>
			
			$('.edit_btn').bind('click', function() {
				
				if($(this).html()=="编辑"){		
					num = $(this).attr("name");		
					$(".edit_box_"+num).show();
					$(".edit_info_"+num).hide();
					$(this).html("完成");
					}
					
					else
					{			
					num = $(this).attr("name");
					$(".edit_box_"+num).hide();
					$(".edit_info_"+num).show();
					$(this).html("编辑");
					}
				
				
				 });

                </script> 
 
<?php if ($this->_var['step'] == 'consignee'): ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'region.js')); ?> 
<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee_info');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee_info']):
?>
<form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
  <?php echo $this->fetch('library/consignee.lbi'); ?>
</form>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
<script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script> 
<?php endif; ?> 

 
<?php if ($this->_var['step'] == 'checkout'): ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
<form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
  <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
  </script>
  <div class="order-buy">
  
  <section class="address"> <a href="flow.php?step=consignee">
    <dl>
      <dt>
        <h2> <span>提货人：<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></span> </h2>
        <p>提货人手机：<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?></p>
      </dt>
    </dl>
    </a>
  </section>
  
  <section class="address"> <a href="flow.php?step=zitidian">
    <dl>
      <dt>
        <h2> <span>提货点：<?php echo $this->_var['pickpoint']['shop_name']; ?></span> </h2>
        <p style="height: 40px;"><?php echo htmlspecialchars($this->_var['pickpoint']['address']); ?></p>
      </dt>
    </dl>
    </a>
  </section>

   
  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goodsinfo');$this->_foreach['glist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['glist']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goodsinfo']):
        $this->_foreach['glist']['iteration']++;
?>
  <?php if ($this->_var['goodsinfo']['goodlist']): ?>
  <section class="order_info">
    <div class="order_list">
      <h2>商品信息</h2>
    </div>
     
    <?php $_from = $this->_var['goodsinfo']['goodlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['name']['iteration']++;
?> 
    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
    <div class="item">
     <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>">
      <dl>
        <dt> <?php if ($this->_var['goods']['goods_thumb']): ?><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"><?php else: ?><img src="themesmobile/ahxcgg_mobile/images/no_picture.gif"><?php endif; ?></dt>
        <dd> <span><?php if ($this->_var['goods']['parent_id'] > 0): ?><em style=" color:#F30">[<?php echo $this->_var['lang']['accessories']; ?>]&nbsp;&nbsp;</em><?php endif; ?> 
          <?php if ($this->_var['goods']['is_gift'] > 0): ?> <em style=" color:#F30">[<?php echo $this->_var['lang']['largess']; ?>]&nbsp;&nbsp;</em> <?php endif; ?> 
          <?php echo $this->_var['goods']['goods_name']; ?></span>
          <p class="godds-specification"><?php echo $this->_var['goods']['goods_attr']; ?></p>
        </dd>
      </dl>
      <ul id="itemPay17">
        <li><?php echo $this->_var['goods']['formated_goods_price']; ?></li>
        <li>x<?php echo $this->_var['goods']['goods_number']; ?></li>
      </ul>
     </a> 
    </div>
    <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
    <div class="item" id="itemInfo12" style="display: none;">
      <dl>
        <dt> <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"> <img src="themesmobile/ahxcgg_mobile/images/flow/libao.png" style="border:#eee 1px solid;"></a> </dt>
        <dd><span><em style=" color:#F30">[<?php echo $this->_var['lang']['remark_package']; ?>]&nbsp;&nbsp;</em><?php echo $this->_var['goods']['goods_name']; ?> </span> <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="libao" style=" font-size:12px; color:#FFF; text-align:center;" >查看礼包明细</a> </dd>
      </dl>
    </div>
    <script>

function setSuitShow(suitId)
{
    var suit    = $('#suit_'+suitId);
    if(suit == null)
    {
        return;
    }

		suit.animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('#suit_'+suitId).find('.f_title').height()||0,
		con = $('#suit_'+suitId).find('.f_content');
		total = 0.8*h;
		con.height(total-top+'px');
		$('.f_mask').show();
	
}
function close_gift(suitId){

	 $('.f_mask').hide();
	 var suit    = $('#suit_'+suitId);
	 suit.animate({height:'0'},[10000]);
	}
</script> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php if ($this->_var['goodsinfo']['zhekou']): ?>
    <div class="order_list bian_botm" style="display: none;"> 
      <?php if ($this->_var['goodsinfo']['zhekou']): ?><span class="ord_hd"><?php echo $this->_var['goodsinfo']['zhekou']['your_discount']; ?></span><?php endif; ?> 
    </div>
    <?php endif; ?> 
     
    <?php if ($this->_var['allow_use_bonus'] && $this->_var['goodsinfo']['goodlist']): ?>
    <div class="order_list" style="display: none;">
      <div class="checkout_other">
        <div class="jmbag" href="javascript:void(0);" onclick="showCheckoutOther(this);">使用店铺优惠券/积分</div>
        <div class="subbox_other sub_bonus"> 
          <?php if ($this->_var['allow_use_bonus']): ?>
          <dl>
            <dt>
              <select name="bonus[<?php echo $this->_var['key']; ?>]" onchange="changeBonus(this.value,<?php echo $this->_var['key']; ?>)" id="ECS_BONUS_<?php echo $this->_var['key']; ?>" >
                <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?>优惠券</option>
                <?php $_from = $this->_var['goodsinfo']['redbag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id_info'] [ $this->_var['key'] ] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                
              </select>
            </dt>
           
					 <dt>
             <input name="integral[<?php echo $this->_var['key']; ?>]" id="ECS_INTEGRAL_<?php echo $this->_var['key']; ?>" type="text"   value="<?php if ($this->_var['order']['integral_info'] [ $this->_var['key'] ]): ?><?php echo $this->_var['order']['integral_info'][$this->_var['key']]; ?><?php else: ?>使用积分<?php endif; ?>" onfocus="if (value =='使用积分'){value =''}"  onblur="changeIntegral(this.value,<?php echo $this->_var['key']; ?>);if (value ==''){value='使用积分'}"  class="txt1" style="width:99%; height:35px; border:1px solid #ccc; text-indent:10px; margin-top:2px; padding:0px;"/>
             <span id="ECS_INTEGRAL_NOTICE_<?php echo $this->_var['key']; ?>" class="notice" style="font-size:14px"></span>
              <dd><?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo empty($this->_var['order_max_integral']) ? '0' : $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?></dd>
             </dt>
    	  
            <span>&nbsp;或 &nbsp;<a href="javascript:void(0);" onclick="javascript:document.getElementById('Bonus_span_<?php echo $this->_var['key']; ?>').style.display='block';document.getElementById('Bonus_a_<?php echo $this->_var['key']; ?>').style.display='none';" class="a_other1_h" id="Bonus_a_<?php echo $this->_var['key']; ?>">直接输入优惠券号</a></span>
            <dd>
              <label id="Bonus_span_<?php echo $this->_var['key']; ?>" style="display:none;">
                <input name="bonus_sn[<?php echo $this->_var['key']; ?>]" id="bonus_sn_<?php echo $this->_var['key']; ?>" type="text"   value="<?php if ($this->_var['order']['bonus_sn_info'] [ $this->_var['key'] ]): ?><?php echo $this->_var['order']['bonus_sn_info'][$this->_var['key']]; ?><?php else: ?>输入优惠券<?php endif; ?>" onfocus="if (value =='输入优惠券'){value =''}" onblur="if (value ==''){value='输入优惠券'}" class="txt1" style="width:70%; height:35px; border:1px solid #ccc; text-indent:10px; margin-top:2px; padding:0px;"/>
                <input name="validate_bonus" type="button" value="使用" onclick="validateBonus(document.getElementById('bonus_sn_<?php echo $this->_var['key']; ?>').value,<?php echo $this->_var['key']; ?>)" class="BonusButton1" />
              </label>
            </dd>
          </dl>
	                   

          <?php endif; ?> 
        </div>
      </div>
    </div>
    <?php endif; ?> 

     
    <?php if ($this->_var['goodsinfo']['shipping_html']): ?>
    <div class="order_list" style="display: none;">
      <div class="checkout_other">
        <div class="psbag" href="javascript:void(0);" onclick="showCheckoutOther(this);">选择配送方式</div>
        <div class="checkout_other" style=" padding-bottom:20px;"> <?php echo $this->_var['goodsinfo']['shipping_html']; ?> <span id='picktxt<?php echo $this->_var['key']; ?>'> </span>
          <p class="shipping_desc" id="desc_<?php echo $this->_var['key']; ?>">您可以选择离您最近的自提点上门提货：运费5元，满99元免邮</p>
          <script>selectShipping($('#pay_ship_<?php echo $this->_var['goodsinfo']['goodlist']['0']['supplier_id']; ?>').val(),<?php echo $this->_var['key']; ?>);</script> 
        </div>
      </div>
    </div>
    <?php endif; ?> 
    </section>
  <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

   
   <?php if ($this->_var['inv_content_list']): ?>
  <section class="main" style="display: none;">
    <div class="checkout_other" >
      <div class="content ptop0">
        <div class="panel panel-default info-box">
          <div class="orderInfo " >
            <h4 class="fp other"> 开发票
              <input name="need_inv" type="checkbox" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" class="chk_3" />
              <label for="ECS_NEEDINV"></label>
            </h4>
          </div>
          <?php if ($this->_var['inv_content_list']): ?>
          <div class="checkout_other2 padding10"  id="fapiao" style="display:none;" > 
            <div class="subbox_other" width="100%"> 
            
              <div class="flow_bottom_list" style=" padding-bottom:10px;">
                <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" style="margin-right:10px;">
                  <option value="0">请选择发票类型</option>
                  
                <?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?>                  
           
                </select>
                <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()"  >
                  <option value="0">请选择发票内容</option>
                  
                    
        <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>        
                  
              
                </select>
              </div>
           
          
              
              <div class="putong_fp">
              

              <table id='vat_invoice_tbody' style='display:none; line-height:40px; margin-top:10px;' width="100%" cellpadding="5" cellspacing="0" >
                <tr bgcolor="#ffffff">
                  <td colspan="3" align='left' bgcolor="#ffffff"><strong style='font-size:14px;'>&nbsp;&nbsp;公司信息</strong></td>
                </tr>
                <tr>
                  <td align=right width="120"><em style='color:#e4393c'>*</em>单位名称：</td>
                  <td colspan="2"><input name='vat_inv_company_name' type='text' class="txt1" /></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>纳税人识别号：</td>
                  <td colspan="2"><input name='vat_inv_taxpayer_id' type='text'  onblur='javascript:check_taxpayer_id(this,"taxpayer_notice")' class="txt1" />
                    <br>
                    <span id='taxpayer_notice' style='font-size:12px;color:#f00;'></span></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>注册地址：</td>
                  <td colspan="2"><input name='vat_inv_registration_address' type='text' class="txt1" /></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>注册电话：</td>
                  <td colspan="2"><input name='vat_inv_registration_phone' type='text' class="txt1" /></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>开户银行：</td>
                  <td colspan="2"><input name='vat_inv_deposit_bank' type='text' class="txt1" /></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>银行账户：</td>
                  <td colspan="2"><input name='vat_inv_bank_account' type='text' onblur='javascript:check_bank_account(this,"bank_account_notice")' class="txt1" />
                    <br>
                    <span id='bank_account_notice' style='font-size:12px;color:#f00;'></span></td>
                </tr>
                <tr>
                  <td colspan="3" align='left' style="padding:10px 0px"><strong style='font-size:14px;'>&nbsp;&nbsp;收票人信息</strong></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>收票人姓名：</td>
                  <td colspan="2"><input name='inv_consignee_name' type='text' class="txt1" /></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>收票人手机：</td>
                  <td  colspan='2'><input name='inv_consignee_phone' type='text' onblur='javascript:check_phone_number(this,"phone_number_notice")' class="txt1" />
                    <br>
                    <span id='phone_number_notice' style='font-size:12px;color:#f00;'></span></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>收票人省份：</td>
                  <td colspan='2'><input type="hidden" name="inv_country" value="1">
                    <select name="inv_consignee_province" id="sel_inv_provinces" onchange="region.changed(this, 2, 'sel_inv_cities');"  
                
                    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                    
                    <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                    
                    <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['address']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                    
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    
                    </select>
                    <select name="inv_consignee_city" id="sel_inv_cities" onchange="region.changed(this, 3, 'sel_inv_districts');">
                      <option value="0">请选择</option>
                    </select>
                    <select name="inv_consignee_district" id="sel_inv_districts" style="display:none; margin-top:10px;">
                      <option value="0">请选择</option>
                    </select></td>
                </tr>
                <tr>
                  <td align=right><em style='color:#e4393c'>*</em>详细地址：</td>
                  <td colspan='2'><input name='inv_consignee_address' type='text' class="txt1" /></td>
                </tr>
              </table>
              </div>
              
              <div class="putong_fp" id="normal_invoice_tbody">
                <ul>
                  <li>发票抬头：</li>
                  <li><input id='individual_inv' type='radio' onclick='changeNeedInv()' name='inv_payee_type' value='individual' checked='true' style="margin-top:5px;" class="f_checkbox_t"/>
                    <label for='individual_inv'  class="fl" style="width:50px; height:30px;">个人</label>
                    <input id='unit_inv' type='radio' onclick='changeNeedInv()' name='inv_payee_type' value='unit' class="f_checkbox_t" style="margin-top:5px;"/>
                    <label for='unit_inv' class="fl" style="width:50px; height:30px;">单位</label>
                    <input id='ECS_INVPAYEE' name='inv_payee' class="txt1" style='display:none; vertical-align:middle;' placeholder="发票抬头" /></li>
                </ul>
              </div>
        
            </div>
             
          </div>
          <?php endif; ?> 
          <script type="text/javascript">
    var fapiao_con = document.getElementById('ECS_INVCONTENT');
    if (fapiao_con.value=='0')
    {
      document.getElementById('ECS_INVPAYEE').disabled=true;
    }
    else
    {
      document.getElementById('ECS_INVPAYEE').disabled=false;
    }
    </script> 
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?> 
  
  <div class="main" style="display: none;">
    <div class="content ptop0 order_checked">
      <div class="checkout_other">
        <h4 class="sh"  onclick="showCheckoutOther(this);">送货时间<span class="right_arrow_flow" ></span><em id="emheka">请选择送货时间</em></h4>
        <div class="subbox_other">
          <div class="flow_bottom_list bian">
            <div class="songh_time" id="time_id_1">
              <input id="time_delivery1" type="radio" name="best_time" value="仅工作日送货" checked=checked class="f_checkbox_t" style="margin-top:3px;">
              <label for="time_delivery1">仅工作日送货</label>
            </div>
            <div class="songh_time" id="time_id_2">
              <input id="time_delivery2" type="radio" name="best_time" value="仅周末送货" class="f_checkbox_t" style="margin-top:3px;">
              <label for="time_delivery2">仅周末送货</label>
            </div>
            <div class="songh_time" id="time_id_3">
              <input id="time_delivery3" type="radio" name="best_time" value="工作日/周末/假日均可" class="f_checkbox_t" style="margin-top:3px;">
              <label for="time_delivery3">工作日/周末/假日均可</label>
            </div>
            <div class="songh_time"id="time_id_4" style="position:relative;">
              <input type="radio" name="best_time" value="指定送货时间" id="definetime_input" class="f_checkbox_t" style="margin-top:3px;">
              <label for="definetime_input" id="definetime">指定送货时间</label>
            </div>
            <div class="flowBox">送货时间仅作参考，快递公司会尽量满足您的要求</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <?php if ($this->_var['step'] == 'checkout'): ?> 
<section class="f_mask" style="display: none;"></section>
	  <?php echo $this->fetch('library/choose_time.lbi'); ?> 
      <script type="text/javascript">

	function selTimeSh(obj)
	{
		document.getElementById('definetime').innerHTML = "指定送货时间 <font class='detail_time'>"+ obj.name +"</font>";
		document.getElementById('definetime_input').value = "指定送货时间 "+ obj.name ;
		$("#emheka").html(obj.name);
		$(".f_mask").hide();	
		$('#choose_time').animate({height:'0'},[10000]);
	}
	function close_choose_time(){	

	$(".f_mask").hide();	
	$('#choose_time').animate({height:'0'},[10000]);

}
</script> 
      <?php endif; ?>
   
  <?php if ($this->_var['how_oos_list']): ?>
  <section class="order-info" style="display: none;">
    <div class="order_checked mid">
      <div class="checkout_other">
        <h4 class="qh" onclick="showCheckoutOther(this);">缺货处理<span class="right_arrow_flow" ></span><em id="emquehuo">缺货处理</em></h4>
        
        <?php if ($this->_var['how_oos_list']): ?>
        <div class="subbox_other" id="jifen68" style=" background:#FFF;">
          <div class="flow_bottom_list bian"> 
            <?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
            <div style=" margin-top:8px">
              <input name="how_oos" class="f_checkbox_t" style="float:inherit" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> id="how_oos_<?php echo $this->_var['how_oos_id']; ?>" onclick="changeOOS(this)" />
              <label for="how_oos_<?php echo $this->_var['how_oos_id']; ?>"><?php echo $this->_var['how_oos_name']; ?></label>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </div>
        </div>
        <?php endif; ?> 
      </div>
    </div>
  </section>
  <?php endif; ?> 
  
  <section class="order_info">
    <div class="order_list">
      <div class="checkout_other" >
        <div class="fy " href="javascript:void(0);" onclick="showCheckoutOther(this);">
        <span class="right_arrow_flow" style=" float:right; margin-right:30px;"></span>订单备注</div>
        <div class=" subbox_other">
          <div class="flow_bottom_list">
            <textarea name="postscript" cols="80" rows="3" id="postscript" ><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea>
          </div>
        </div>
      </div>
    </div>
  </section>
   
  <?php if ($this->_var['allow_use_surplus']): ?>
  <section class="main">
    <div class="allow_user_surplus">
      <p class="ye">
        <input type="checkbox" class="b_checkbox" id="issurplus" onclick="checkboxOnclick(this)" style="vertical-align:middle; cursor:pointer" />
        <span class="is_user_surplus">使用账户余额支付</span></p>
      <dl class="yueonlin" id="allow_user_surplus">
        <dt> <i>输入余额：
          <input name="surplus" type="text" class="surplus" id="ECS_SURPLUS"  value="0" onblur="changeSurplus(this.value);" />
          &nbsp;&nbsp;元</i> <span>您当前的可用余额为:￥<?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?></span><span id="ECS_SURPLUS_NOTICE_<?php echo $this->_var['key']; ?>" class="notice"></span> </dt>
        <dd style="display: none;"> <?php if ($this->_var['is_surplus_open'] == 0): ?><span class="open_surplus">未开通余额安全支付,请在电脑端登录开通</span><?php endif; ?> </dd>
      </dl>
    </div>
  </section>
  <script type="text/javascript">
    $('#issurplus').attr('checked',false);
    function checkboxOnclick(checkbox){ 
	

		
            var surplus = <?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?>;
            if ( checkbox.checked == true){
                    document.getElementById("allow_user_surplus").style.display = "block";
                    changeSurplus(surplus);
            }else{
                    document.getElementById("allow_user_surplus").style.display = "none";
                    changeSurplus(0);
            }
    }
    </script> 
  <?php endif; ?> 
  
  
  <section class="main" style=" margin-top:8px;">
    <div class="con_ct"> <?php echo $this->fetch('library/order_total.lbi'); ?> </div>
  </section>
  
  <section class="main" style=" margin-top:8px;"> <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
    <div class="panel-body" id="pay_div">
      <div class="title" id="zhifutitle"> <span class="text">支付方式&nbsp;:&nbsp;</span> <em class="qxz" id="emzhifu">请选择支付方式</em> <a href="javascript:void(0)" title="<?php echo $this->_var['lang']['modify']; ?><?php echo $this->_var['lang']['goods_list']; ?>">必选</a> </div>
      <ul class="nav nav-list-sidenav" id="zhifu68" style="display:block; border-bottom:none;">
        <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');$this->_foreach['pay'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pay']['total'] > 0):
    foreach ($_from AS $this->_var['payment']):
        $this->_foreach['pay']['iteration']++;
?>
        <?php if ($this->_var['iswei']): ?>
        <?php if ($this->_var['payment']['pay_code'] == "weixin" || $this->_var['payment']['pay_code'] == "alipay" || $this->_var['payment']['pay_code'] == "unionpay" || $this->_var['payment']['pay_code'] == "balance" || $this->_var['payment']['pay_code'] == "cod"): ?>
        <li onclick="selectPayment(<?php echo $this->_var['payment']['pay_id']; ?>)" class="clearfix" name="payment_name" <?php if ($this->_var['payment']['pay_code'] == 'balance'): ?>style="display:none"<?php endif; ?>>
         
          <input type="radio" id="payment_method_<?php echo $this->_var['payment']['pay_id']; ?>" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?> checked="checked"<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" class="f_checkbox_t"  <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>  <?php if ($this->_var['payment']['pay_code'] == "balance"): ?>display:none<?php endif; ?> />
          <input type="hidden" name="payment_code" value="<?php echo $this->_var['payment']['pay_code']; ?>" />
          <label for="payment_method_<?php echo $this->_var['payment']['pay_id']; ?>" >
           <div class="fl shipping_title"> <?php echo $this->_var['payment']['pay_name']; ?><?php echo $this->_var['payment']['format_pay_fee']; ?> </div>
          </label>
        </li>
        <?php endif; ?>
        <?php else: ?>
        <?php if ($this->_var['payment']['pay_code'] == "alipay" || $this->_var['payment']['pay_code'] == "unionpay" || $this->_var['payment']['pay_code'] == "balance" || $this->_var['payment']['pay_code'] == "cod"): ?>
        <li onclick="selectPayment(<?php echo $this->_var['payment']['pay_id']; ?>)" class="clearfix" name="payment_name" <?php if ($this->_var['payment']['pay_code'] == 'balance'): ?>style="display:none"<?php endif; ?>>
          <input type="radio" id="payment_method_<?php echo $this->_var['payment']['pay_id']; ?>" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?> checked="checked"<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" class="f_checkbox_t"  <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>  <?php if ($this->_var['payment']['pay_code'] == "balance"): ?>display:none<?php endif; ?> />
            <label for="payment_method_<?php echo $this->_var['payment']['pay_id']; ?>" > <div class="fl shipping_title"> <?php echo $this->_var['payment']['pay_name']; ?><?php echo $this->_var['payment']['format_pay_fee']; ?> </div>
          </label>
        </li>
        <?php endif; ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    <?php else: ?>
    <input type="radio" name="payment" value="-1" checked="checked" style="display:none"/>
    <?php endif; ?> </section>
   
  <div class="pay-btn">
    <input onclick="return check_before_submit()" type="submit" class="tijiao_butn" value="提交订单"/>
    <input type="hidden" name="step" value="done">
  </div>
</form>

<?php if ($this->_var['goods_list']): ?>
<section class="f_mask" style="display: none;"></section>
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goodsinfo');$this->_foreach['glist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['glist']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['goodsinfo']):
        $this->_foreach['glist']['iteration']++;
?> 
<?php $_from = $this->_var['goodsinfo']['goodlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['name']['iteration']++;
?> 
<?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
<div class="f_block" id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="position:fixed;bottom:0;left:0;height:0px;background:#FFF;z-index:99999999;overflow:hidden; width:100%;">
  <p class="f_title"><span><?php echo $this->_var['goods']['goods_name']; ?></span><a class="c_close" href="javascript:void(0)" onClick="close_gift(<?php echo $this->_var['goods']['goods_id']; ?>)"></a></p>
  <div class="f_content" style="">
    <div class="choose-inner">
      <div class="gift-table">
        <div class="miblebox miblebox-cnt mible-suit">
          <ul class="list-suit">
            <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');$this->_foreach['package_goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package_goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['package_goods_list']):
        $this->_foreach['package_goods_list']['iteration']++;
?>
            
            <li class="list-suit-item"  style="width:100%;<?php if (($this->_foreach['package_goods_list']['iteration'] == $this->_foreach['package_goods_list']['total'])): ?>border-bottom:none<?php endif; ?>" > <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" class="p-link">
              <div class="p-img" style="margin-left:10px;"> <img src="<?php echo $this->_var['package_goods_list']['goods_thumb']; ?>" width="60" height="60"></div>
              <div class="p-info" style="margin-left:40px;">
                <h5 class="p-name"><?php echo $this->_var['package_goods_list']['goods_name']; ?></h5>
                <div class="p-price"><?php echo $this->_var['package_goods_list']['shop_price']; ?> <span style="color:#000;">x <?php echo $this->_var['package_goods_list']['goods_number']; ?></span></div>
              </div>
              </a> </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
<?php endif; ?>


<section class="f_mask" style="display: none;"></section>
<section class="f_block" id="pop" style="height:0; position:fixed; bottom:-5px; left:0px; width:100%; overflow:auto; z-index:999999; background:#FFF;">
<div id="pickcontent"></div>
</section>
      
  <?php endif; ?> 
<script type="text/javascript">
  
  function showCheckoutOther(obj)
  {
    var otherParent = obj.parentNode;
    otherParent.className = (otherParent.className=='checkout_other') ? 'checkout_other2' : 'checkout_other';
    var spanzi = obj.getElementsByTagName('span')[0];
    spanzi.className= spanzi.className == 'right_arrow_flow' ? 'right_arrow_flow2' : 'right_arrow_flow';

  }
  
      </script>
     
</div>
 
<?php if ($this->_var['step'] == 'done'): ?>
<div class="screen-wrap fullscreen login" style=" background:#FFF">
    <div class="sys_message">
    <?php if ($this->_var['pay_online']): ?>
<p class="title">订单提交成功！</p>
<p class="desc">点击下面的按钮,支付您的订单！</p>
<?php else: ?>
<p class="title">订单提交成功！</p>
<p class="desc">您的包裹整装待发~~~</p>

<?php endif; ?>
</div>
    <ul class="content_success" style="display: none;">
      <?php if ($this->_var['split_order']['sub_order_count'] > 1): ?>
      <li>由于您的商品由不同的商家发出，此订单将分为<font style="color:#E71F19;"><?php echo $this->_var['split_order']['sub_order_count']; ?></font>个不同的子订单配送</li>
      <?php else: ?>
      <li>您的商品将由<?php echo $this->_var['order']['shipping_name']; ?>为您配送</li>
      <?php endif; ?>
      <?php $_from = $this->_var['split_order']['suborder_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'suborder');if (count($_from)):
    foreach ($_from AS $this->_var['suborder']):
?>
      <li style=" border-top:1px solid #eeeeee">
      <span>订单号：<em><?php echo $this->_var['suborder']['order_sn']; ?></em></span>
      <span><?php echo $this->_var['order']['pay_name']; ?>：<em><?php echo $this->_var['suborder']['order_amount_formated']; ?></em></span>
      <span>配送方式：<em style=" color:#E71F19"><?php echo $this->_var['suborder']['shipping_name']; ?></em></span>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  <?php if ($this->_var['pay_online']): ?>
  <?php if ($this->_var['iswei']): ?>
  <?php if ($this->_var['order']['pay_name'] == "微信支付"): ?>
  <div class="pay-btn"><a href="./weixinpay.php?out_trade_no=<?php echo $this->_var['order']['log_id']; ?>" class=" sub_btn" style="color:#FFF;">微支付</a> </div>
  <?php elseif ($this->_var['order']['pay_name'] == "支付宝"): ?>
  <div class="pay-btn"> <a href="./pay/alipayapi.php?out_trade_no=<?php echo $this->_var['order']['log_id']; ?>&total_fee=<?php echo $this->_var['order']['order_amount']; ?>" class="sub_btn" style="color:#FFF;">去支付宝支付</a> </div>
  <?php endif; ?>
  <?php else: ?>
  <?php if ($this->_var['order']['pay_name'] == "支付宝"): ?>
  <div class="pay-btn"> <a href="./pay/alipayapi.php?out_trade_no=<?php echo $this->_var['order']['log_id']; ?>&total_fee=<?php echo $this->_var['order']['order_amount']; ?>" class="sub_btn" style="color:#FFF;">去支付宝支付</a> </div>
  <?php endif; ?>
  <?php if ($this->_var['order']['pay_name'] == "中国银联全渠道商户"): ?>
    <?php echo $this->_var['pay_online']; ?>
  <?php endif; ?>
  <?php endif; ?>
  <?php endif; ?>
  <?php if ($this->_var['virtual_card']): ?>
  <div class="con-ct radius shadow fo-con">
    <ul class="ct-list">
      <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');$this->_foreach['virtual_card'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['virtual_card']['total'] > 0):
    foreach ($_from AS $this->_var['vgoods']):
        $this->_foreach['virtual_card']['iteration']++;
?>
      <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');$this->_foreach['vgoods_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vgoods_info']['total'] > 0):
    foreach ($_from AS $this->_var['card']):
        $this->_foreach['vgoods_info']['iteration']++;
?>
      <li> <span class="type"><?php echo $this->_var['vgoods']['goods_name']; ?></span> <?php if ($this->_var['card']['card_sn']): ?> <span class="id"> <strong><?php echo $this->_var['lang']['card_sn']; ?><?php echo $this->_var['lang']['colon']; ?></strong> <?php echo $this->_var['card']['card_sn']; ?></em> </span> <?php endif; ?>
        <?php if ($this->_var['card']['card_password']): ?> <span class="serial_code"> <strong><?php echo $this->_var['lang']['card_password']; ?><?php echo $this->_var['lang']['colon']; ?></strong> <em><?php echo $this->_var['card']['card_password']; ?></em> </span> <?php endif; ?>
        <?php if ($this->_var['card']['end_date']): ?> <span class="expire_date"> <strong><?php echo $this->_var['lang']['end_date']; ?><?php echo $this->_var['lang']['colon']; ?></strong> <em><?php echo $this->_var['card']['end_date']; ?></em> </span> <?php endif; ?> </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>  
  <div class="con-ct radius shadow fo-con">
    <ul class="ct-list">
      <li><?php echo $this->_var['order_submit_back']; ?></li>
    </ul>
  </div>
  <?php endif; ?> 
    <div class="welcome_dom">
<span><a href="index.php">返回首页</a></span><span><a href="user.php?act=order_list">查看订单</a></span></div>
</div>
<?php endif; ?> 

<?php echo $this->smarty_insert_scripts(array('files'=>'order_pickpoint.js')); ?> 
      <script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script> 
      <script type="text/javascript">

function choose_gift(suppid)
{

	var sel_goods = new Array();
	var obj_cartgoods = document.getElementsByName("sel_cartgoods[]");
	var j = 0;
	for (i=0; i<obj_cartgoods.length; i++)
	{
		//if(obj_cartgoods[i].checked == true)
		{	
			sel_goods[j] = obj_cartgoods[i].value;
			j++;
		}
	}
	Ajax.call('flow.php', 'is_ajax=1&suppid=' + suppid + '&sel_goods='+sel_goods, selgiftResponse, 'GET', 'JSON');
}
function selgiftResponse(res)
{
	$('#choose').html(res.result);
	$("#choose").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.f_title').height()||0,
        con = $('.f_content');
		total = 0.8*h;
		con.height(total-top+'px');
	$(".f_mask").show();
}
function close_choose(){	

	$(".f_mask").hide();
	$('#choose').animate({height:'0'},[10000]);

}
</script> 
      <script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script> 
      <script>
//点击input标签时间
$(function() {
	$(".order_checked input").click(
	function() {
	$(this).parents(".checkout_other2").addClass("checkout_other");
	$(this).parents(".checkout_other2").removeClass("checkout_other2");
	$(this).parents(".order_checked").find(".right_arrow_flow2").addClass("right_arrow_flow");
	$(this).parents(".order_checked").find(".right_arrow_flow2").removeClass("right_arrow_flow2");
	$(this).parents(".order_checked").find("em").html($(this).next().html());
	if($(this).attr("id")=='definetime_input')
	{
		$("#choose_time").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.f_title_time').height()||0,
        con = $('.f_content_time');
		total = 0.8*h;
		con.height(total-top+'px');
		$(".f_mask").show();
	}
	})
});
</script>
</body>
</html>
