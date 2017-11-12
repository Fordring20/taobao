
<div class="user_com">

<div class="com_top border_bottm">
<em><?php if ($this->_var['headimgurl'] != ''): ?><img src="<?php echo $this->_var['headimgurl']; ?>"><?php else: ?><img src="themesmobile/ahxcgg_mobile/images/user/user68.jpg"><?php endif; ?></em>
<i style="display:none;"><?php echo $this->_var['rank_name']; ?></i>
<dl>
<dt><a href="user.php?act=profile">设置</a></dt>
<dd><span><?php if ($this->_var['info']['nickname']): ?><?php echo $this->_var['info']['nickname']; ?><?php else: ?><?php echo $this->_var['info']['username']; ?><?php endif; ?></span></dd>
</dl>
<!--
<ul>
<li class="bain"><a href="user.php?act=order_list" ><span><?php echo $this->_var['order_count']['all']; ?></span>我的订单</a></li>
<li class="bain"><a href="user.php?act=collection_list"><span><?php echo $this->_var['collect_count']; ?></span>我的收藏</a></li>
<li style=" border:0"><a href="user.php?act=my_comment"><span><?php echo $this->_var['comment_count']; ?></span>我的评价</a></li>
</ul>
-->
</div>

<div class="Order">
<dl><a href="user.php?act=order_list"><dt><strong>全部订单</strong><span>查看全部订单</span></dt></a></dl>
<ul>
<li><a href="user.php?act=order_list&composite_status=100"><em class="ordem2"><i><?php echo $this->_var['order_count']['await_pay']; ?></i></em><span>待付款</span></a></li>
<li><a href="user.php?act=order_list&composite_status=101"><em class="ordem3"><i><?php echo $this->_var['order_count']['await_ship']; ?></i></em><span>待发货</span></a></li>
<li><a href="user.php?act=order_list&composite_status=105" ><em class="ordem1"><i><?php echo $this->_var['order_count']['await_receipt']; ?></i></em><span>待提货</span></a></li>
<li><a href="user.php?act=order_list&composite_status=102"><em class="ordem4"><i><?php echo $this->_var['order_count']['finished']; ?></i></em><span>已完成</span></a></li>
</ul>
</div>

<div class="Assets">
<dl><dt><strong>我的资产</strong><span>账户余额：<?php echo $this->_var['info']['surplus']; ?></span></dt></dl>
 <?php 
$k = array (
  'name' => 'member_info1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
</div>

<div class="Assets">
<dl><dt><strong>我的爱心</strong><span>累计捐赠：0.00</span></dt></dl>
	<ul>
		<li><a href="javascript:alert('敬请期待！');"><i class="Assets2" style="background:url(themesmobile/ahxcgg_mobile/images/user/axjuanzeng.png) no-repeat center center; background-size:auto 35px;"></i><span>爱心捐赠</span></a></li>
		<li><a href="javascript:alert('敬请期待！');"><i class="Assets2" style="background:url(themesmobile/ahxcgg_mobile/images/user/jzjilu.png) no-repeat center center; background-size:auto 35px;"></i><span>捐赠记录</span></a></li>
		<li><a href="javascript:alert('敬请期待！');"><i class="Assets2" style="background:url(themesmobile/ahxcgg_mobile/images/user/myyigong.png) no-repeat center center; background-size:auto 35px;"></i><span>我的义工</span></a></li>
		<li><a href="javascript:alert('敬请期待！');"><i class="Assets2" style="background:url(themesmobile/ahxcgg_mobile/images/user/zhichishiji.png) no-repeat center center; background-size:auto 35px;"></i><span>支持事迹</span></a></li>
	</ul>
</div>

<div class="Wallet main_top">
<a href="security.php" style="display:none;"><em class="Icon4"></em><dl class="border_bottm"><dt>账户安全</dt><dd>&nbsp;</dd></dl></a>

<?php if ($this->_var['is_distrib'] == 1): ?>
<a href="v_user.php" style="display:none;"><em class="Icon8"></em><dl class="border_bottm"><dt>我的分销</dt><dd>查看分销信息</dd></dl></a>
<?php endif; ?>

<a href="user.php?act=my_comment" class="border_bottm"><em class="Icon1"></em><dl><dt>评价/晒单</dt><dd>查看评价/晒单</dd></dl></a>
<a href="user.php?act=collection_list" class="border_bottm"><em class="Icon2"></em><dl><dt>我的收藏</dt><dd>商品收藏</dd></dl></a>
<a href="user.php?act=tg_login" class="border_bottm" style="display:none;"><em class="Icon Icon2"></em><dl class="b"><dt>提货券入口</dt><dd>提货券入口/提货券验证</dd></dl></a>
<a href="user.php?act=tg_order" class="border_bottm" style="display:none;"><em class="Icon Icon2"></em><dl><dt>我的提货</dt><dd>我的提货</dd></dl></a>
<a href="user.php?act=my_shouhou" class="border_bottm"><em style="text-align:center;"><img src="themesmobile/ahxcgg_mobile/images/user/myshouhou.png" style="width:22px; height:22px; background-color:#0066FF; margin-top:13px; border-radius:3px; padding:2px;"/></em><dl><dt>我的售后</dt><dd>&nbsp;</dd></dl></a>
<a href="user.php?act=address_list" class="border_bottm"><em style="text-align:center;"><img src="themesmobile/ahxcgg_mobile/images/user/tihuoren.png" style="width:22px; height:22px; background-color:#0066FF; margin-top:13px; border-radius:3px; padding:2px;"/></em><dl><dt>收货人</dt><dd>添加/修改</dd></dl></a>
<a href="user.php?act=modifypwd" class="border_bottm"><em style="text-align:center;"><img src="themesmobile/ahxcgg_mobile/images/user/mdpassword.png" style="width:22px; height:22px; background-color:#666699; margin-top:13px; border-radius:3px; padding:2px;"/></em><dl><dt>修改密码</dt><dd>&nbsp;</dd></dl></a>
<a href="user.php?act=download" class="border_bottm"><em style="text-align:center;"><img src="themesmobile/ahxcgg_mobile/images/user/download.png" style="width:22px; height:22px; background-color:#576b95; margin-top:13px; border-radius:3px; padding:2px;"/></em><dl><dt>下载APP</dt><dd>&nbsp;</dd></dl></a>
</div>


<div class="Wallet main_top" style="display:none;">
<a href="user.php?act=address_list"><em class="Icon3"></em><dl class="border_bottm"><dt>收货地址</dt><dd>添加/修改</dd></dl></a>
<a href="user.php?act=affiliate"><em class="Icon4"></em><dl class="border_bottm"><dt>我的推荐</dt><dd>&nbsp;</dd></dl></a>
<a href="user.php?act=message_list"><em class="Icon5"></em><dl><dt>我的留言</dt><dd>&nbsp;</dd></dl></a>
<a href="supplier"><em class="Icon8"></em><dl><dt>我的店铺</dt><dd>&nbsp;</dd></dl></a>
</div>
<div class="Wallet main_top">
<a href="javascript:void(0)" onClick="window.location.href='user.php?act=logout'" ><em class="Icon6"></em><dl><dt>注销登录</dt></dl></a>
</div>
</div>

		