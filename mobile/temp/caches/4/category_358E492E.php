<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:71:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/category.dwt";i:1;s:81:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/goods_list.lbi";i:2;s:81:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/footer_nav.lbi";}s:7:"expires";i:1510021209;s:8:"maketime";i:1510017609;}<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="minimal-ui=yes,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>爱心购  </title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/group_buy.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/category.css"/>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/common.js"></script><script type="application/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.more.js"></script>
</head>
<body class="body_bj">
<section class="_pre">
<header id="head_search_box" style="position: fixed; top: 0px; width: 100%; z-index:9999;">
<div class="cate_header">
 <div class="cate_left"><a href="javascript:history.back(-1)" class="sb-back" title="返回"></a></div>
 <div class="cate_mid">
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
   <div class="text_box" name="list_search_text_box" onclick="return 1;">
   <input id="keyword" name="keywords" type="text" placeholder="请输入商品名称 货号" class="text" value="">
   <input type="submit" value="" class="submit" id="list_search_submit">
   </div>
 </form></div>
 <div class="cate_right">
    <a class="menu filtrate" name="list_go_filter" style=" color:#666">筛选</a>
</div>
</div></div></header>
<div style="height:46px;" class="empty_div">&nbsp;</div>
<section class="filtrate_term" id="product_sort" style="width: 100%; z-index:9999; border-bottom:1px solid #CCC">
<ul>
<li class="on"><a href="category.php?category=0&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list">最新</a></li>
<li class=""><a href="category.php?category=0&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=salenum&order=DESC#goods_list" >销量</a></li>
<li class="" ><a href="category.php?category=0&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=final_price&order=ASC#goods_list">价格<span class="arrow_up "></span><span class="arrow_down "></span></a></li>
<li style=" border-left:1px solid #ccc; margin-right:-1px;"><a href="javascript:;" class="show_type  show_list">&nbsp;</a></li>
</ul>
<div style="width: 100%; height: 28px; border-top: 1px solid #CCC;">
    <p style="line-height: 28px; font-size: 12px; color: #FF0000; text-align: center;">今日已团购商品数量 0 笔，筹得善款 0.00 元</p>
</div>
</section>
<div style=" height:5px"></div>
<script type="text/javascript">
var url = 'category.php?act=ajax&category=0&&display=grid&brand=&price_min=&price_max=&filter_attr=&page=1&sort=&order=&other_has=1';
$(function(){
	$('#J_ItemList').more({'address': url});
});
</script>
<div class="touchweb-com_searchListBox openList" id="goods_list">
   <form action="javascript:void(0)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
<div id="J_ItemList" style="opacity: 1;" >
<div class="product single_item info"></div>
  <a href="javascript:;" class="get_more" >
  </a>
</div>
</form>
<script language="javascript" type="text/javascript">  
function goods_cut($val){  
var num_val=document.getElementById('number_'+$val);  
var new_num=num_val.value;  
var Num = parseInt(new_num);  
if(Num>1)Num=Num-1;  
num_val.value=Num;  
} 
function goods_add($val){ 
var num_val=document.getElementById('number_'+$val);  
var new_num=num_val.value;  
var Num = parseInt(new_num);  
Num=Num+1;  
num_val.value=Num;  
}
</script>
  
</div>
</div>
</section>
<section class="_next" style="-webkit-transform-origin: 0px 0px 0px; opacity: 1; -webkit-transform: scale(1, 1); display: none;">
<header>
    <div class="new_header_2" id="filter_header" >
        <a href="javascript:;" class="back" id="list_filter_back" ><span>返回</span></a>
        <h2>筛选</h2>
    </div>
</header>
<section id="filter_content">
     <div class="filtrate_category">
        <a href="javascript:;" class="filtrate_category_a" >分类 <span class="up_down">全部展开</span></a>
    </div>   
    <ul class="filtrate_list" id="filter_category_list" style="display: block; -webkit-transform-origin: 0px 0px 0px; opacity: 1; -webkit-transform: scale(1, 1);">
        <li class="filtrate_list_li">
          </li>
</ul>
  
     <form method="post" action="category.php">
     <input type="hidden" name="brand" id="brand" value="0">
     <input type="hidden" name="filter_attr" id="filter_attr" value="0">     
     <input type="hidden" name="id" value="0">
           </form>
</section>
</section>
<section id="mix_search_div" style="display: none;">
<div class="cate_header">
 <div class="cate_left"><a href="javascript:history.back(-1)" class="sb-back" title="返回"></a></div>
 <div class="cate_mid">
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
   <div class="text_box" name="list_search_text_box" onclick="return 1;">
   <input id="keyword1" name="keywords" type="text" value="" placeholder="请输入商品名称 货号" class="text" onkeydown="this.style.color=&#39;#404040&#39;;" maxlength="70" autocomplete="off">
  <input type="submit" value="" class="submit">
   </div>
 </form></div>
 <div class="cate_right">
   <a href="javascript:void(0)" class="clear_input" id="clear_input" style="display: block;">取消</a>
</div>
</div>
<section class="mix_recently_search" style="display: none;"><h3><i class="search_h2"></i><span>热门搜索</span></h3>
  <ul>
       <li>
    <a href="search.php?keywords=%E5%85%B0%E8%8A%9D">兰芝</a>
   </li>
      <li>
    <a href="search.php?keywords=%E9%9B%85%E6%BC%BE">雅漾</a>
   </li>
      <li>
    <a href="search.php?keywords=%E9%9B%AA%E8%82%8C%E7%B2%BE">雪肌精</a>
   </li>
      <li>
    <a href="search.php?keywords=%E9%9B%85%E8%AF%97%E5%85%B0%E9%BB%9B">雅诗兰黛</a>
   </li>
      <li>
    <a href="search.php?keywords=DHC">DHC</a>
   </li>
      <li>
    <a href="search.php?keywords=%E5%A5%B3%E8%A3%85">女装</a>
   </li>
      <li>
    <a href="search.php?keywords=%E7%94%B7%E8%A3%85">男装</a>
   </li>
      <li>
    <a href="search.php?keywords=T%E6%81%A4">T恤</a>
   </li>
      <li>
    <a href="search.php?keywords=%E6%97%B6%E5%B0%9A">时尚</a>
   </li>
      <li>
    <a href="search.php?keywords=%E6%B5%81%E8%A1%8C%E5%85%83%E7%B4%A0">流行元素</a>
   </li>
      </ul>
  </section>
</section>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/zepto.min.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/filter.min.js"></script>
<script>
$(document).ready(function(){
        //筛选浮层显示控制
        var filtrate = $(".filtrate"), submit = $(".submit,.back,.reset");
        filtrate.bind("click", function () {
            $("._next").show();
            $("._pre").hide();
            window.scrollTo(0, 0);
        });
        submit.bind("click", function () {
            $("._next").hide();
            $("._pre").show();
        });
        //初始化筛选浮层
        bizFilter.init();
});
</script>
<script>
    $(function(){
        //搜索浮层显示逻辑
        var sbox = $("#head_search_box"),
                sort = $('#product_sort'),
                g_list = $("#goods_list"),
                g_m1 = "0", g_m2 = "96px";
        var initCss = function (type) {
            if (type == 1) {
                sort.css({"position":"static","width":"100%"});
                g_list.css("margin-top", g_m1);
            } else {
                sort.attr("style", "");
                g_list.css("margin-top", g_m2);
            }
        };
        var m = {
            input: $("#keyword"),
            rawAll: '',
            dd: $(".text_box"),
            cancel: $(".mix_back"),
            rawKey: '请输入商品名称 货号',
            main: function () {
                this.init();
                this.be();
            },
            init: function () {
                this.rawAll = this.input.val();
            },
            be: function () {
                var _this = this;
                this.input.focus(function () {
                    var mix_search = $("#mix_search_div");
                    if (mix_search.length > 0) {
                        $("._pre").hide();
                        mix_search.show();
                        $("#keyword1").focus();
                        return;
                    }
                    var newKey = _this.input.val();
                    if (newKey != _this.rawKey && newKey != _this.rawAll) {
                        $(this).val(newKey);
                    } else {
                        $(this).val(_this.rawKey);
                    }
                    if ($(window).scrollTop() > 0) {
                        initCss(1);
                        window.scrollTo(0, 0);
                        _this.dd.trigger("click");  //for ddclick
                    }
                })
				.blur(function () {
                            var newKey = _this.input.val();
                            if (newKey === _this.rawKey) {
                                $(this).val(_this.rawAll);
                            } else {
                                $(this).val(newKey);
                            }
                        });
                this.cancel.bind("click", function () {
                    $("#mix_search_div").hide();
                    $("._pre").show();
                });
				document.getElementById("clear_input").onclick = function() {
		            $("#mix_search_div").hide();
                    $("._pre").show();
				}
            }
        };
        m.main();
        $(window).resize(function () {
            sbox.css("width", "100%");
            sort.css("width", "100%");
        });
		 //顶部sticky效果
        setTimeout(function () {
            var sboxH = sbox.height();
            var sortH = sort.height();
            var sortStart = sort.offset().top - sboxH;
            var showEnd = sort.offset().top;
            var init = function () {
                sbox.css({"position":"fixed", "top":"0"});
                window.scrollTo(0, 0);
            };
            var rawScroll = 0, nowScroll = 0;
            var upOrDown = function () {
                var delta = 30;
                if (nowScroll > rawScroll + delta) {
                    return 1;
                } else if (nowScroll < rawScroll - delta) {
                    return 2;
                } else {
                    return 0;
                }
            };
            var sticky = function () {
                nowScroll = $(window).scrollTop();
                if (nowScroll >= sortStart) {
                    sort.css({"position":"fixed","top":sboxH,"z-index":"9999"});
                    g_list.css({"margin-top":sortH});
                } else {
                    sort.attr("style", "");
                    g_list.attr("style", "");
                }
                if (nowScroll > showEnd + sortH) {
                    var up = upOrDown();
                    if (up == 1) {
                        if (sbox.css("display") != "none") {
                            sbox.hide();
                            sort.hide();
                        }
                        rawScroll = nowScroll;
                    } else if (up == 2) {
                        if (sbox.css("display") == "none") {
                            sbox.show();
                            sort.show();
                        }
                        rawScroll = nowScroll;
                    }
                } else {
                    if (sbox.css("display") == "none") {
                        sbox.show();
                        sort.show();
                    }
                }
            };
            init();
            $(document).on("touchmove", sticky);
            $(window).on("scroll", sticky);
        }, 500);
 
	});
</script>
<script>
   $('.show_type').bind("click", function() {
    if ($('#goods_list').hasClass('openList')){
	$('#goods_list').removeClass('openList');
	$(this).removeClass('show_list');
	}
	else
	{
	$('#goods_list').addClass('openList');	
	$(this).addClass('show_list');
	}
});
</script>
<script type="text/javascript">
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
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<footer>
<div style="height:50px; line-height:50px; clear:both;"></div>
<div class="v_nav">
<div class="vf_nav">
<ul>
<li>
  <a href="./">
    <!-- <i class="vf_1"></i> -->
    <img src="themesmobile/ahxcgg_mobile/images/ad_index.png" width="25px" height="25px" />
    <span>首页</span>
  </a>
</li>
<li>
  <a href="category.php">
    <!-- <i class="vf_3"></i> -->
    <img src="themesmobile/ahxcgg_mobile/images/shoplist.png" width="25px" height="25px" />
    <span>商品</span>
  </a>
</li>
<li>
  <a href="javascript:alert('敬请期待！');">
   <!-- <i class="vf_4"></i> -->
   <img src="themesmobile/ahxcgg_mobile/images/active.png" width="25px" height="25px" />
   <span>活动</span>
  </a>
</li>
<li>
  <a href="user.php">
    <!-- <i class="vf_5"></i> -->
    <img src="themesmobile/ahxcgg_mobile/images/user.png" width="25px" height="25px" />
    <span>我的</span>
  </a>
</li>
</ul>
</div>
</div>
    </footer>
<script>
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}
</script>
<a href="javascript:goTop();" class="gotop" style=" z-index:9999"><img src="themesmobile/ahxcgg_mobile/images/topup.png"></a> 
</body>
</html>