<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:76:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/category_axym.dwt";i:1;s:81:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/goods_list.lbi";i:2;s:81:"D:/xampp/htdocs/aixingou/mobile/themesmobile/ahxcgg_mobile/library/footer_nav.lbi";}s:7:"expires";i:1510047944;s:8:"maketime";i:1510044344;}<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="minimal-ui=yes,width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>义不容辞_爱心购  </title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/group_buy.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/ahxcgg_mobile/css/category.css"/>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/common.js"></script><script type="application/javascript" src="themesmobile/ahxcgg_mobile/js/jquery.more.js"></script>
</head>
<body class="body_bj">
<header id="head_search_box" style="position: fixed; top: 0px; width: 100%; z-index:9999;">
    <div class="cate_header" style="border-bottom: none;">
        <div class="cate_left"><a href="javascript:history.back(-1)" class="sb-back" title="返回"></a></div>
    <div class="cate_mid" style="text-align: center; padding-top: 0;">
        <p style="line-height: 45px;">义不容辞</p>
    </div>
</header>
<div class="but_banner" style="border-bottom: none; margin-top: 45px;"><a href="javascript:void(0);" class="u-brand-pic J_item-list"> <img src="data/afficheimg/1507973005815311492.jpg" class="BrandMer_star"></a></div>
<div style="background-color: #ffffff; border-bottom: 1px solid #F0F0F0; padding: 8px 0; height: 24px;">
    <div style="width: 5px; height: 24px; background-color: #FF0000; float: left;">
    </div>
    <span style="float: left; line-height: 24px; margin-left: 10px;">义卖商品</span>
</div>
<section class="_pre">
<script type="text/javascript">
var url = 'category.php?act=ajax&category=12&&display=grid&brand=&price_min=&price_max=&filter_attr=&page=1&sort=&order=&other_has=1';
$(function(){
	$('#J_ItemList').more({'address': url});
});
</script>
<div class="touchweb-com_searchListBox" id="goods_list">
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