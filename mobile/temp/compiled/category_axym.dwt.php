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
<body class="body_bj">

<header id="head_search_box" style="position: fixed; top: 0px; width: 100%; z-index:9999;">
    <div class="cate_header" style="border-bottom: none;">
        <div class="cate_left"><a href="javascript:history.back(-1)" class="sb-back" title="返回"></a></div>
    <div class="cate_mid" style="text-align: center; padding-top: 0;">
        <p style="line-height: 45px;">义不容辞</p>
    </div>
</header>
<?php $_from = $this->_var['wap_group_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['wap_group_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wap_group_ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['wap_group_ad']['iteration']++;
?>
<div class="but_banner" style="border-bottom: none; margin-top: 45px;"><a href="<?php echo $this->_var['ad']['url']; ?>" class="u-brand-pic J_item-list"> <img src="<?php echo $this->_var['ad']['image']; ?>" class="BrandMer_star"></a></div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<div style="background-color: #ffffff; border-bottom: 1px solid #F0F0F0; padding: 8px 0; height: 24px;">
    <div style="width: 5px; height: 24px; background-color: #FF0000; float: left;">
    </div>
    <span style="float: left; line-height: 24px; margin-left: 10px;">义卖商品</span>
</div>

<section class="_pre">

<script type="text/javascript">
var url = 'category.php?act=ajax&category=<?php echo $this->_var['cat_id']; ?>&&display=grid&brand=<?php echo $_REQUEST['brand']; ?>&price_min=<?php echo $_REQUEST['price_min']; ?>&price_max=<?php echo $_REQUEST['price_max']; ?>&filter_attr=<?php echo $_REQUEST['filter_attr']; ?>&page=1&sort=<?php echo $_REQUEST['sort']; ?>&order=<?php echo $_REQUEST['order']; ?>&other_has=<?php echo $this->_var['other_has']; ?>';
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

<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_32467400_1510044345');$this->_foreach['filter_attr_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_list']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr_0_32467400_1510044345']):
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