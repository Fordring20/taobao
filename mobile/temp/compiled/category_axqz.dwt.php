<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="minimal-ui=yes,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/group_buy.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/category.css"/>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="application/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.more.js"></script>
</head>
<style type="text/css">
.p2 {
    color: #AAAAAA;
    font-size: 14px;
    width: 100%;
    height: 42px;
    line-height: 14px;
    text-overflow:ellipsis; 
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    margin-bottom: 10px;
}
</style>
<body class="body_bj">

<header id="head_search_box" style="position: fixed; top: 0px; width: 100%; z-index:9999;">
    <div class="cate_header" style="border-bottom: none;">
        <div class="cate_left"><a href="javascript:history.back(-1)" class="sb-back" title="返回"></a></div>
    <div class="cate_mid" style="text-align: center; padding-top: 0;">
        <p style="line-height: 45px;">心耀龙城</p>
    </div>
</header>
<?php $_from = $this->_var['wap_group_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['wap_group_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wap_group_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['wap_group_ad']['iteration']++;
?>
<div class="but_banner" style="border-bottom: none; margin-top: 45px;"><a href="<?php echo $this->_var['ad']['url']; ?>" class="u-brand-pic J_item-list"> <img src="<?php echo $this->_var['ad']['image']; ?>" class="BrandMer_star"></a></div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<div style="background-color: #ffffff; border-bottom: 1px solid #F0F0F0; padding: 8px 0; height: 30px;">
    <div style="width: 100%; height: 30px; text-align: center;">
        <p style="line-height: 30px; font-size: 18px;">已凝聚&nbsp;<span style="color: #ff0000; font-size: 16px; font-weight: bold;"><?php echo $this->_var['axmoney']; ?></span>&nbsp;元爱心</p>
    </div>
</div>

<div style="background-color: #ffffff; border-bottom: 1px solid #F0F0F0; padding: 8px 0; height: 24px;">
    <div style="width: 5px; height: 24px; background-color: #FF0000; float: left;">
    </div>
    <span style="float: left; line-height: 24px; margin-left: 10px;">最受关注</span>
</div>

<section class="_pre">

<script type="text/javascript">
var url = 'category.php?act=ajaxqiuzhu&cat_id=<?php echo $this->_var['cat_id']; ?>';
$(function(){
	$('#J_ItemList').more({'address': url});
});
</script>
<div class="touchweb-com_searchListBox" id="goods_list">
  <?php echo $this->fetch('library/goods_list.lbi'); ?>  
</div>
</div>
</section>

<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/zepto.min.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/filter.min.js"></script>
<script type="text/javascript">
function onXianax(id)
{
    $.post("category.php?act=axqzxianax", {"id": id}, function(res) {
        if (res.error == 0)
        {
            $("#axspansel_"+id).css("display", "");
            $("#axspanunsel_"+id).css("display", "none");
            var ax = parseInt($("#axcount_"+id).text());
            ax = ax + 1;
            $("#axcount_"+id).text(ax);
        }
        else
        {
            alert(res.message);
        }
    }, "json");
}

function onselShijiInfo(id)
{
    window.location.href = "category.php?act=axqzinfo&id=" + id;
}

function get_brand(brand_id)
{
	document.getElementById('brand').value = brand_id;
	var obj = document.getElementById('brands').getElementsByTagName('li');
	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('brand_'+brand_id).className = 'on';
}

function get_price(price_min,price_max)
{
	document.getElementById('price_min').value = price_min;
	document.getElementById('price_max').value = price_max;
	var obj = document.getElementById('prices').getElementsByTagName('a');
	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('price_'+price_min).className = 'on';
}

<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr');$this->_foreach['filter_attr_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_list']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr']):
        $this->_foreach['filter_attr_list']['iteration']++;
?>

function get_attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>(attr_id)
{
	document.getElementById('showahxcgg_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>').value=attr_id;
	var showahxcgg = document.getElementsByName("showahxcgg");
	var zongshu = null;
	for(var i=showahxcgg.length;i>0;i--){
	if(zongshu == null)
	{
		zongshu = document.getElementById("showahxcgg_"+i).value;
	
	}
	else
	{
		zongshu = document.getElementById("showahxcgg_"+i).value +"."+zongshu;
		document.getElementById('filter_attr').value = zongshu;	
	}
	}
	
	var obj = document.getElementById('attrs_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>').getElementsByTagName('li');
	for(var i=0;i<obj.length;i++)
	{
		obj[i].className = '';
	}
	document.getElementById('attr_<?php echo $this->_foreach['filter_attr_list']['iteration']; ?>_'+attr_id).className = 'on';
}
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
//  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<footer>
<?php echo $this->fetch('library/footer_nav.lbi'); ?>
</footer>

<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script>
<a href="javascript:goTop();" class="gotop" style=" z-index:9999"><img src="themesmobile/ahxcgg_mobile/images/topup.png"></a> 
</body>
</html>