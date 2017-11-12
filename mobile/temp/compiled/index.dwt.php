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
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/index.css"/>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/TouchSlide.1.1.js"></script>
</head>
<body>
<div class="body_bj">

<header id="header"> <?php echo $this->fetch('library/page_header.lbi'); ?> </header>

<div class="index_search">
  <div class="index_search_mid" style="margin-top:10px;"> <a href="searchindex.php"> <em>请输入您所搜索的商品</em> <span><img src="themesmobile/ahxcgg_mobile/images/icosousuo.png"></span> </a> </div>
</div>

<div class="hot">
<h3></h3>
<ul id="mq" onmouseover="iScrollAmount=0"onmouseout="iScrollAmount=1">
  
<?php $this->assign('articles',$this->_var['articles_14']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_14']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

</ul>
</div>
<?php echo $this->fetch('library/index_icon.lbi'); ?> 

<script>
var oMarquee = document.getElementById("mq"); //滚动对象
var iLineHeight = 30; //单行高度，像素
var iLineCount = 7; //实际行数
var iScrollAmount = 1; //每次滚动高度，像素
function run() {
oMarquee.scrollTop += iScrollAmount;
if ( oMarquee.scrollTop == iLineCount * iLineHeight )
oMarquee.scrollTop = 0;
if ( oMarquee.scrollTop % iLineHeight == 0 ) {
window.setTimeout( "run()", 2000 );
} else {
window.setTimeout( "run()", 50 );
}
}
oMarquee.innerHTML += oMarquee.innerHTML;
window.setTimeout( "run()", 2000 );
</script>

 
<?php echo $this->fetch('library/index_ad.lbi'); ?> 
 


<div class="floor_img">

<ul>
<li class="brom" style="width: 59.2%;">
 
<?php $this->assign('ads_id','17'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</li>
<li style="width: 40.8%;">
 
<?php $this->assign('ads_id','18'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</li>
<li style="width: 40.8%;">
 
<?php $this->assign('ads_id','23'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</li>
</ul>
<ul style="border-bottom: 1px solid #eeeeee;">
<li class="brom" style="width: 40.8%;">
 
<?php $this->assign('ads_id','22'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</li>
<li style="width: 59.2%;">
 
<?php $this->assign('ads_id','108'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
</li>
</ul>
</div>

 
<div class="index_img">
 
 
</div>
 

<?php $this->assign('cat_goods',$this->_var['cat_goods_3']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_3']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
 

<?php echo $this->fetch('library/footer_nav.lbi'); ?> 

<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/touchslider.dev.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.more.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
var url = 'index_bestgoods.php?act=ajax';
$(function(){
	$('#J_ItemList').more({'address': url});
});

</script> 
<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script>
<a href="javascript:goTop();" class="gotop"><img src="themesmobile/ahxcgg_mobile/images/topup.png"></a> 
<script type="Text/Javascript" language="JavaScript">


function selectPage(sel)
{
   sel.form.submit();
}


</script>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = "";
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<!-- <script type="text/javascript" src="http://z1-pcok6.kuaishangkf.cn/bs/ks.j?cI=540729&fI=76331&ism=1" charset="utf-8"></script> -->
</div> 
</body>
</html>
<meta property="qc:admins" content="1645327036652303637575721457" />