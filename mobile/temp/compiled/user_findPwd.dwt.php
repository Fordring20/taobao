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

<!--
<link rel="stylesheet" href="themesmobile/ahxcgg_mobile/css/ecsmart.css" />
-->
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="themesmobile/ahxcgg_mobile/js/validate/messages_zh.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,user.js,transport.js')); ?>
</head>
<body>
	<header id="header" class='header'>
    <div class="h-left"><?php if ($this->_var['action'] == 'login' || $this->_var['action'] == 'register' || $this->_var['action'] == 'step_1'): ?>
	<a href="javascript:history.back(-1)"></a>
	<?php else: ?>
	<a href="findPwd.php"></a> 
	<?php endif; ?></div>
	<div class="h-mid">
		<?php if ($this->_var['action'] == 'login'): ?>
		会员登录
		<?php endif; ?>
		<?php if ($this->_var['action'] == 'register'): ?>
		用户注册
		<?php endif; ?>
		<?php if ($this->_var['action'] == 'step_1'): ?>
		找回密码
		<?php endif; ?>
		<?php if ($this->_var['action'] == 'step_2'): ?>
		找回密码
		<?php endif; ?>
		<?php if ($this->_var['action'] == 'step_3'): ?>
		找回密码
		<?php endif; ?>
		<?php if ($this->_var['action'] == 'step_4'): ?>
		找回密码
		<?php endif; ?>
	</div>
 </header>

	<div id="tbh5v0">
		<div class="find">
			<?php if ($this->_var['action'] == 'step_1'): ?>
            
			<section class="innercontent">
			<form action="" method="post" id="fpForm" name="fpForm" class="c-form login-form">
 <div class="yonghu">
<input type="text" id="u_name" name="u_name" placeholder="请输入登录的手机号" value="" />
 </div>  
        <div class="yanzheng" style=" margin-top:10px;">
										<div class="codeTxt">
											<input type="text" id="captcha" name="captcha" placeholder="验证码" />
										</div>
										<div class="codePhoto">
											<img class="check-code-img" src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_login=1&'+Math.random()" height="35"/>
										</div>
									</div>                                    
		<div class="submit-btn">
					<input type="button" id="btn_submit" class="btn_big1" value="下一步" />
					<input type="hidden" name="act" value="check_username" />
			</div>
			</form>
			</section>
			<script type="text/javascript">
			$().ready(function(){
				var container = $("#error_container");
				var validator = $("#fpForm").validate({
					rules: {
						u_name: "required",
						captcha: {
							required: true,
							maxlength: 4
						}
					},
					messages: {
						u_name: "请输入您的用户名/已验证的手机",
						captcha: {
							required: "验证码不能为空",
							max: "验证码格式不正确"
						}
					},
					//errorPlacement: function(error, element) {
					//	error.appendTo($("#error_container"));  
					//},
					errorContainer: container,
					errorLabelContainer: $(container),
					wrapper: 'div'
				});
				$("#btn_submit").click(function(){
					// 验证信息
					if(!validator.form()){
						return;
					}
										
					$("#fpForm").submit();
				});
			});
			</script>
			<?php endif; ?>
			<?php if ($this->_var['action'] == 'step_2'): ?>
			<section class="innercontent">
			<form action="findPwd.php" method="post" id="fpForm" name="fpForm" class="c-form login-form">
				<div class="item validate_type">
					<label style=" font-size:14px;">请选择验证身份方式：</label>
					<select id="validate_type" name="validate_type"  class="select">
						<?php $_from = $this->_var['validate_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
						<option id="validate_type_<?php echo $this->_var['item']['type']; ?>" value="<?php echo $this->_var['item']['type']; ?>" val="<?php echo $this->_var['item']['value']; ?>"><?php echo $this->_var['item']['name']; ?></option>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</select>
				</div>
				<div class="v_mobile_phone v_item">
					<label>手机号：</label>
					<span id="l_mobile_phone"></span>
				</div>
				<div id="c_mobile_code" class="field auth-code v_item v_mobile_phone">
					<div class="codeTxt">
					<input type="text" id="mobile_code" name="mobile_code" placeholder="手机验证码" class="hq_phone" />
					</div>
					<input id="zphone" type="button" value="获取手机验证码" class="zphone m_phone" style="margin-top: 5px; color: #fff;" />
				</div>
				<div class=" email v_email v_item" style="display: none">
					<label>邮箱：</label>
					<span id="l_email"></span>
				</div>  
                                    
				<div id="c_email_code" class=" v_item v_email" style="display: none">
                <div class="codeTxt">
					<input type="text" id="email_code" name="email_code" class="hq_phone" value="" />
                    </div>
					<input id="zemail" type="button" value="获取邮箱验证码" class="m_phone" style=" color:#FFF">
				</div>
                
                <div class="submit-btn " style=" padding-top:40px;">
				<input type="button" name="button" id="btn_submit" class="btn_big1" value="提 交" />
					<input type="hidden" name="act" value="to_reset_password" />
			</div>
		
			</form>
			</section>
			<script type="text/javascript">
			function show_validate_type(validate_type_obj){
				var type = $(validate_type_obj).val();
				var value = $("#validate_type_"+type).attr("val");
				$("#l_"+type).html(value);
				$(".v_item").hide();
				$(".v_"+type).show();
			}
			
			function send_email_code(emailCodeObj, sendButton){
				// 发送邮件
				var url = 'validate.php?XDEBUG_SESSION_START=ECLIPSE_DBGP';
				$.post(url, {
					act: 'send_email_code'
				}, function(result) {
					if (result == 'ok') {
						//倒计时
						countdown(sendButton);
					} else {
						alert(result);
					}
				}, 'text');
			}
			
			function send_mobile_code(mobileCodeObj, sendButton) {
				// 发送邮件
				var url = 'validate.php?XDEBUG_SESSION_START=ECLIPSE_DBGP';
				$.post(url, {
					act: 'send_mobile_code'
				}, function(result) {
					if (result == 'ok') {
						//倒计时
						countdown(sendButton);
					} else {
						alert(result);
					}
				}, 'text');
			}
			
			$().ready(function(){
				
				show_validate_type($("#validate_type"));
				
				$("#validate_type").change(function(){
					show_validate_type($(this));
				});
				
				$("#zphone").click(function(){
					send_mobile_code($("#mobile_code"), $(this));
				});
				
				$("#zemail").click(function(){
					send_email_code($("#email_code"), $(this));
				});
				
				$("#btn_submit").click(function(){
					
					var type = $("#validate_type").val();
					
					if(type == 'mobile_phone'){
						if($("#mobile_code").val().length == 0){
							$("#mobile_code").focus();
							alert("验证码不能为空！");
							return;
						}
					}else if(type == 'email'){
						if($("#email_code").val().length == 0){
							$("#email_code").focus();
							alert("验证码不能为空！");
							return;
						}
					}
					
					var url = "findPwd.php?XDEBUG_SESSION_START=ECLIPSE_DBGP";
					var validate_type = $("#validate_type").val();
					$.post(url, {act: "validate", mobile_code: $("#mobile_code").val(), email_code: $("#email_code").val(), validate_type: validate_type}, function(data){
						if(data.error == 1){
							alert(data.content);
							if(data.url != undefined && data.url.length > 0){
								window.location.href = data.url;
							}
						}else{
							$("#fpForm").submit();
						}
					}, "json");
				});
				
			});
			</script>
			<?php endif; ?>
			<?php if ($this->_var['action'] == 'step_3'): ?>
			<section class="innercontent">
			<form action="findPwd.php" method="post" id="fpForm" name="fpForm">
				<div class="field pwd" style=" margin-top:20px">
					<input name="password" id="password" type="password" placeholder="请输入密码" class="c-form-txt-normal" />
				</div>
				<div class="field pwd">
					<input name="confirm_password" id="confirm_password" type="password" placeholder="请再次确认密码" class="c-form-txt-normal" />
				</div>
				<div class="submit-btn">
					<input type="button" id="btn_submit" name="btn_submit" class="btn_big1" value="提 交" />
					<input type="hidden" name="act" value="to_success" />
				</div>
			</form>
			</section>
			<script type="text/javascript">
			$().ready(function(){
				var validator = $("#fpForm").validate({
					debug: false,
					rules: {
						password: {
							required: true,
							minlength: 6
						},
						confirm_password: {
							required: true,
							equalTo: "#password"
						}
					},
					messages: {
						password: {
							required: "请输入密码",
							minlength: "登录密码不能少于 6 个字符"
						},
						confirm_password: {
							required: "请再次输入新密码",
							equalTo: "两次输入的密码不一致，请重新输入"
						}
					},
					errorPlacement: function(error, element) {
						error.appendTo(element.parent());  
					}
				});
				
				$("#btn_submit").click(function(){
					if(!validator.form()){
						return;
					}
					
					var url = "findPwd.php?XDEBUG_SESSION_START=ECLIPSE_DBGP";
					$.post(url, {act: 'reset_password', password: $("#password").val()}, function(data){
						if(data.error == 1){
							alert(data.content);
							if(data.url != undefined && data.url.length > 0){
								window.location.href = data.url;
							}
						}else{
							$("#fpForm").submit();
						}
					}, "json");
						
				});
			});
			</script>
			<?php endif; ?>
			<?php if ($this->_var['action'] == 'step_4'): ?>
			<section class="innercontent">
			<div class="find_box_end">
				<p>
					
					新密码设置成功！
				</p>
				<p>请您牢记新密码！</p>
				<p class="on_go">
					<a href="user.php" title="立即购物" class="btn_big1" style=" color:#FFF">立即登录&gt;&gt;</a>
				</p>
			</div>
			</section>
			<?php endif; ?>
			<?php if ($this->_var['action'] == 'step_5'): ?>
			<section class="innercontent">
			<form action="user.php" method="post">
				<fieldset>
					<div class="field username">
						<div class="c-form-search st">
							<input type="text" name="user_name" placeholder="请输入用户名/邮箱" value="" class="c-form-txt-normal" />
						</div>
					</div>
					<div class="field submit-btn">
						<input type="submit" class="btn_big1" value="提 交" />
						<input type="hidden" name="act" value="get_passwd_question" />
					</div>
					<div class="tips">如果您忘记了密码问题答案，可以使用注册邮箱来修改密码。</div>
					<div class="tips">
						<a href="user.php?act=get_password" class="btn_big1" style=" color:#FFF">注册邮件找回密码</a>
					</div>
				</fieldset>
			</form>
			</section>
			<?php endif; ?>
			<?php if ($this->_var['action'] == 'get_passwd_question'): ?>
			<section class="innercontent">
			<form action="user.php" method="post">
				<fieldset>
					<div class="field username">
						<div class="c-form-search st"><?php echo $this->_var['lang']['passwd_question']; ?><?php echo $this->_var['lang']['colon']; ?> <?php echo $this->_var['passwd_question']; ?></div>
					</div>
					<div class="field email">
						<div class="c-form-search st">
							<input type="text" name="passwd_answer" placeholder="<?php echo $this->_var['lang']['passwd_answer']; ?>" class="c-f-text" />
						</div>
						<div class="tips"></div>
					</div>
					<?php if ($this->_var['enabled_captcha']): ?>
					<div class="field identifyCode">
						<div class="c-form-search">
							<div class="codeTxt">
								<input name="captcha" type="text" value="" placeholder="<?php echo $this->_var['lang']['comment_captcha']; ?>" class="c-f-text" />
							</div>
							<div class="codePhoto">
								<img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
							</div>
						</div>
					</div>
					<?php endif; ?>
					<div class="field submit-btn">
						<input type="submit" class="c-btn-oran-big1" value="<?php echo $this->_var['lang']['submit']; ?>">
							<input type="hidden" name="act" value="check_answer" />
					</div>
				</fieldset>
			</form>
			</section>
			<?php endif; ?>
			<?php if ($this->_var['action'] == 'reset_password'): ?>
			<section class="innercontent">
			<form action="user.php" method="post">
				<fieldset>
					<div class="field username">
						<div class="c-form-search st">
							<input type="password" name="new_password" placeholder="<?php echo $this->_var['lang']['new_password']; ?>" value="" class="c-f-text" />
						</div>
					</div>
					<div class="field email">
						<div class="c-form-search st">
							<input type="password" name="confirm_password" placeholder="<?php echo $this->_var['lang']['confirm_password']; ?>" class="c-f-text" />
						</div>
						<div class="tips"></div>
					</div>
					<div class="field submit-btn">
						<input type="submit" class="c-btn-oran-big1" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
						<input type="hidden" name="act" value="act_edit_password" />
						<input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
						<input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
					</div>
				</fieldset>
			</form>
			</section>
			<?php endif; ?>
			    <div style="height:20px; line-height:20px; clear:both"></div>
            <?php echo $this->fetch('library/page_footer.lbi'); ?>
            
		</div>
	</div>
	<script type="text/javascript">
	var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
	<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
	</script>
	</div>
	<?php echo $this->fetch('library/footer_nav.lbi'); ?>
	<script type="text/javascript">
	$(function(){ 
		$('input[type=text],input[type=password]').bind({ 
		focus:function(){ 
		 $(".global-nav").css("display",'none'); 
		}, 
		blur:function(){ 
		 $(".global-nav").css("display",'flex'); 
		} 
		}); 
	}) 
	</script>
</body>
</html>